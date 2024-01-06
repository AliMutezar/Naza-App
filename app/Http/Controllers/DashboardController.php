<?php

namespace App\Http\Controllers;

use App\Charts\CustomerSubmissionChart;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(CustomerSubmissionChart $chart)
    {
        $data = [
            'total_submission' => Customer::count(),
            'uncontacted' => Customer::getCountByStatus('uncontacted'),
            'contacted' => Customer::getCountByStatus('contacted'),
            'completed' => Customer::getCountByStatus('completed'),
            'title' => "Customer Statistic",
            'grafik_title_column' => "Customer Submissions",
            'grafik_title_donat' => "Completed Percentage",
            'chart' => $chart->build()
        ];

        $month = Customer::getMonth();
        $status = Customer::getChartStatus();
        $chart = $status->get('contacted');
        // dd($data);

        return view('backoffice_layouts.dashboard-mazer', $data);
    }
}
