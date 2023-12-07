<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Type;
use Carbon\Carbon;
use App\Charts\VisitorStats;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(VisitorStats $chart)
    {
        $fiveDaysToGo = Carbon::now()->addDays(5)->endOfDay();

        $bookings = Booking::where('status', ['Paid', 'CheckIn'])
            ->whereDate('booking_date', '<=', $fiveDaysToGo)
            ->get();

        foreach ($bookings as $booking) {
            $typeId = $booking->field->type;
            $type = Type::find($typeId);        
            $booking->field_type = $type->name;
        }
        $data['chart'] = $chart->build();
        $totalTransaksi = Booking::whereNotIn('status', ['Unpaid', 'Cancled'])->count();
        $getTotalAmount = Booking::whereNotIn('bookings.status', ['Unpaid', 'Canceled'])
        ->join('payments', 'bookings.id', '=', 'payments.booking_id')
        ->sum('payments.amount');
        $totalAmount = 'Rp ' . number_format($getTotalAmount, 0, ',', '.');

        $getSevenDaysAgo = Carbon::now()->subDays(7);
        // Format tanggal jika diperlukan
        $sevenDaysAgo = $getSevenDaysAgo->format('d-m-Y');

        return view('admin.dashboard', $data, compact('bookings', 'totalTransaksi', 'totalAmount', 'sevenDaysAgo'));
    }
}
       
