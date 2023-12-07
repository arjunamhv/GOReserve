<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use Carbon\Carbon;
use App\Charts\TransactionStats;

class AccountingController extends Controller
{
    public function index(TransactionStats $chart)
    {
        // Mingguan
        $getTotalAmountWeekly = Booking::whereNotIn('bookings.status', ['Unpaid', 'Canceled'])
            ->join('payments', 'bookings.id', '=', 'payments.booking_id')
            ->whereBetween('payments.created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->sum('payments.amount');
        $totalAmountWeekly = 'Rp ' . number_format($getTotalAmountWeekly, 0, ',', '.');

        $getSevenDaysAgo = Carbon::now()->subDays(7);
        $sevenDaysAgo = $getSevenDaysAgo->format('d-m-Y');

        // Bulanan
        $getTotalAmountMonthly = Booking::whereNotIn('bookings.status', ['Unpaid', 'Canceled'])
            ->join('payments', 'bookings.id', '=', 'payments.booking_id')
            ->whereMonth('payments.created_at', Carbon::now()->month)
            ->sum('payments.amount');
        $totalAmountMonthly = 'Rp ' . number_format($getTotalAmountMonthly, 0, ',', '.');

        $getAMonthAgo = Carbon::now()->subDays(30);
        $aMonthAgo = $getAMonthAgo->format('d-m-Y');

        $payments = Payment::paginate(5);
        $data['chart'] = $chart->build();
        return view('admin.accounting', $data, compact('payments', 'totalAmountWeekly', 'sevenDaysAgo', 'totalAmountMonthly', 'aMonthAgo'));
    }
}
