<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Mail\CustomerMail;
use App\Models\Customer;
use App\Models\CustomerService;
use App\Models\Service;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index()
    {
        $data['title'] = "Potencial Customer";
        $data['customers'] = Customer::latest()->get();
        // dd($data['customers']);

        $data['customer_status'] = [];
        foreach ($data['customers'] as $customer) {
            $data['customer_status'][$customer->id] = $customer->getCustomerStatus();
        }

        return view('customer.index', $data);
    }

    public function store(StoreCustomerRequest $request): RedirectResponse
    {
        try {
            $validatedRequest = $request->validated();
            $validatedRequest['status'] = 'uncontacted';
            $customer = Customer::create($validatedRequest);
    
            // Insert to Customer Service Table
            $customerId = $customer->id;
            $serviceId = $request->service_id;
            CustomerService::create([
                'customer_id' => $customerId,
                'service_id' => $serviceId
            ]);

            $customerName = $validatedRequest['name'];
            $customerPhone = $validatedRequest['phone'];
            $recipientEmail = 'aamutezar@gmail.com';
            Mail::to($recipientEmail)->send(new CustomerMail($customerName, $customerPhone));
    
            return redirect()->back()->with('success', 'Thank you for submitting your data. Please wait, our team will contact you shortly.');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1062) {
                $errorMessage = 'The email address has already been taken.';
                return redirect()->back()->withInput()->withErrors([$errorMessage]);
            }

            throw $e;
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
       
    }

    public function edit(Request $request, $id)
    {
        $data['record'] = CustomerService::find($id);
        $data['title'] = "Edit Customer Data";
        $data['breadcrumb'] = "Edit Customer";

        $customer = Customer::find($data['record']->customer_id);
        $data['statusOptions'] = $customer->getStatusOptions();
        return view('customer.edit', $data);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $rules = [ 'status' => 'required|string'];
        $data = $request->validate($rules);
        
        $customerId = CustomerService::find($id)->customer_id;
        Customer::find($customerId)->update($data);
        return redirect()->route('customer.data')->with('success', 'Customer status has been updated successfully.');

    }


}
