<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Gor;
use App\Models\Field;
use Carbon\Carbon;
use App\Charts\TransactionStats;

class AccountingController extends Controller
{
    public function show(TransactionStats $chart, $userId)
    {
        $gorData = Gor::where('user_id', $userId)->first();
        $fieldsData = Field::where('gor_id', $gorData->id)->get();

        $bookings = Booking::where('field_id', null);

        if ($fieldsData) {
            foreach ($fieldsData as $field) {
                $bookings->orWhere('field_id', $field->id);
            }
        }

        $bookingsData = $bookings->get();

        // Mingguan
        $getTotalAmountWeekly = $bookings->whereNotIn('bookings.status', ['Unpaid', 'Canceled'])
            ->join('payments as pw', 'bookings.id', '=', 'pw.booking_id')
            ->whereBetween('pw.created_at', [Carbon::now()->subDays(8), Carbon::now()])
            ->sum('pw.amount');
        $totalAmountWeekly = 'Rp ' . number_format($getTotalAmountWeekly, 0, ',', '.');

        $getSevenDaysAgo = Carbon::now()->subDays(7);
        $sevenDaysAgo = $getSevenDaysAgo->format('d-m-Y');

        // Bulanan
        $getTotalAmountMonthly = $bookings->whereNotIn('bookings.status', ['Unpaid', 'Canceled'])
            ->join('payments as pm', 'bookings.id', '=', 'pm.booking_id')
            ->whereMonth('pm.created_at', Carbon::now()->month)
            ->sum('pm.amount');
        $totalAmountMonthly = 'Rp ' . number_format($getTotalAmountMonthly, 0, ',', '.');

        $getAMonth = Carbon::now()->month;
        $thisMonth = Carbon::createFromDate(null, $getAMonth, null)->format('F');
        

        $payments = collect([]);
        if ($bookingsData !== null) {
            $bookingId = $bookingsData->pluck('id')->toArray();
            $payments = Payment::whereIn('booking_id', $bookingId)->paginate(5);
        }
        $data['chart'] = $chart->build();
        return view('admin.accounting', $data, compact('payments', 'totalAmountWeekly', 'sevenDaysAgo', 'totalAmountMonthly', 'thisMonth'));
    }
}
