<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use Carbon\Carbon;

class AccountingController extends Controller
{
    public function index()
    {
        $getTotalAmount = Booking::whereNotIn('bookings.status', ['Unpaid', 'Canceled'])
        ->join('payments', 'bookings.id', '=', 'payments.booking_id')
        ->sum('payments.amount');
        $totalAmount = 'Rp ' . number_format($getTotalAmount, 0, ',', '.');

        $getSevenDaysAgo = Carbon::now()->subDays(7);
        // Format tanggal jika diperlukan
        $sevenDaysAgo = $getSevenDaysAgo->format('d-m-Y');
        
        $payments = Payment::all();
        return view('admin.accounting', compact('payments', 'totalAmount', 'sevenDaysAgo'));
    }
}
