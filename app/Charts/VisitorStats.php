<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Gor;
use App\Models\Field;
use Illuminate\Support\Facades\Auth;


class VisitorStats
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $gorData = Gor::where('user_id', auth()->user()->id)->first();

        if ($gorData) { // Check if the Gor data is found
            $fieldsData = Field::where('gor_id', $gorData->id)->get();
            $bookingData = collect(); 
            foreach ($fieldsData as $field) {
                $bookingData = $bookingData->merge(
                    Booking::where('field_id', $field->id)->get()
                );
                // Your logic for each $bookingData goes here
            }
        } else {
            $bookingData = collect();

        }

        // Menghitung tanggal 7 hari yang lalu dari hari ini
        $startDate = Carbon::now()->subDays(6)->toDateString();
        $endDate = Carbon::now()->toDateString();

        // Mengambil data pengunjung dari database dalam rentang waktu 7 hari
        $pengunjung = $bookingData->whereIn('status', ['CheckIn', 'CheckOut'])
            ->whereBetween('booking_date', [$startDate, $endDate]); 

        // Mengelompokkan data pengunjung berdasarkan hari
        $groupedData = $pengunjung->groupBy(function ($date) {
            return Carbon::parse($date->booking_date)->format('l'); // 'l' memberikan nama hari dalam bahasa Inggris
        });

        // Inisialisasi array untuk menyimpan jumlah pengunjung per hari
        $visitorCounts = [];

        // Mengisi array dengan jumlah pengunjung yang sesuai
        foreach ($groupedData as $day => $visitors) {
            $visitorCounts[$day] = count($visitors);
        }

        $visitorCounts = array_reverse($visitorCounts);

        // Generate the chart with the obtained data
        return $this->chart->barChart()
            ->addData('Visitor Counts', array_values($visitorCounts))
            ->setXAxis(array_keys($visitorCounts));
    }
}
