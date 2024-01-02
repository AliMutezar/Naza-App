<?php

namespace App\Charts;

use App\Models\Customer;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CustomerSubmissionChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        $XAsisValues = Customer::getMonth();
        $chartData = Customer::getChartStatus();

        return $this->chart->barChart()
            ->addData('uncontacted', $chartData->get('uncontacted', [0,0,0,0,0,0]))
            ->addData('contacted', $chartData->get('contacted', [0,0,0,0,0,0]))
            ->addData('completed', $chartData->get('completed', [0,0,0,0,0,0]))
            ->setXAxis($XAsisValues);
    }
}
