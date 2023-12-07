<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Payment;
use Carbon\Carbon;

class TransactionStats
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $labels = [];
        $totalAmounts = [];

        // Loop through the last 7 days
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $labels[] = $date;

            // Calculate the total amount for the day using groupBy and sum
            $totalAmount = Payment::whereDate('created_at', $date)->sum('amount');

            // Populate data array
            $totalAmounts[] = $totalAmount;
        }

        return $this->chart->lineChart()
            ->setTitle('Total Amount per Day during the Last 7 Days')
            ->addData('Total Amount', $totalAmounts)
            ->setXAxis($labels);
    }
}
