<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Payment;
use App\Models\Gor;
use App\Models\Field;
use App\Models\Booking;
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
        $totalAmounts = collect([]);

        $gorData = Gor::where('user_id', auth()->user()->id)->first();
        $fieldsData = Field::where('gor_id', $gorData->id)->get();
        $bookingIds = [];

        if ($fieldsData->isNotEmpty()) {
            $fieldIds = $fieldsData->pluck('id')->toArray();
            $bookingsData = Booking::whereIn('field_id', $fieldIds)->get();

            // Loop through the last 7 days
            for ($i = 6; $i >= 0; $i--) {
                $date = Carbon::now()->subDays($i)->format('Y-m-d');
                $labels[] = $date;

                // Calculate the total amount for the day using groupBy and sum
                if ($bookingsData->isNotEmpty()) {
                    $bookingIds = $bookingsData->pluck('id')->toArray();
                    $totalAmount = Payment::whereIn('booking_id', $bookingIds)
                        ->whereDate('created_at', $date)
                        ->sum('amount');
                } else {
                    $totalAmount = 0;
                }

                $totalAmounts[] = $totalAmount;
            }
        }

        $totalAmountsArray = $totalAmounts->toArray();

        return $this->chart->lineChart()
            ->setTitle('Total Amount per Day during the Last 7 Days')
            ->addData('Total Amount', $totalAmountsArray)
            ->setXAxis($labels);
    }

}
