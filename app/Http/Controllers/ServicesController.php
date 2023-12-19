<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    private function getViewData(): array 
    {
        return [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ];
    }

    public function index()
    {
        return view('frontend_layouts.service', $this->getViewData());

    }

    public function serviceDetails()
    {
        return view('frontend_layouts.service_details', $this->getViewData());
    }

    public function getServicesData()
    {
        $data['view_data'] = $this->getViewData();
        $data['title'] = "Services";
        $data['services'] = Service::all();
        return view('services.index', $data);
    }

    public function create()
    {
        $data['title'] = "Create Your Service";
        // $data['record'] = null;
        return view('services.create-edit', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['record'] = Service::find($id);
        // dd($record->id);
        $data['title'] = "Services";
        return view('services.create-edit', $data);
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        $validatedRequest = $request->validated();
        Service::create($validatedRequest);

        $redirect = redirect()->route('services.data')->with('success', 'Your services has been added successfully.');
        return $redirect;
    }

    public function update(StoreServiceRequest $request, $id): RedirectResponse
    {
        $validatedRequest = $request->validated();
        $service = Service::findOrFail($id);
        $service->update($validatedRequest);
        
        $redirect = redirect()->route('services.data')->with('success', 'Your services has been updated successfully.');
        return $redirect;
    }


}
