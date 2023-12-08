<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Type;
use App\Models\Gor;
use App\Models\Field;
use Carbon\Carbon;
use App\Charts\VisitorStats;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(VisitorStats $chart, $userId)
    {
        $fiveDaysToGo = Carbon::now()->addDays(5)->endOfDay();

        $gorData = Gor::where('user_id', $userId)->first();
        $fieldsData = Field::where('gor_id', $gorData->id)->get();

        if ($fieldsData) {
            foreach ($fieldsData as $field) {
                $bookingsData = Booking::where('field_id', $field->id);
            }
        } else {
            $bookingsData = '';
        }

        $bookings = $bookingsData->where('status', ['Paid', 'CheckIn']);
        foreach ($bookings as $booking) {
            $booking->whereDate('booking_date', '<=', $fiveDaysToGo)->get();
        }
        

        foreach ($bookings as $booking) {
            $typeId = $booking->field->type;
            $type = Type::find($typeId);        
            $booking->field_type = $type->name;
        }
        $data['chart'] = $chart->build();

        $totalTransaksi = $bookingsData->whereNotIn('status', ['Unpaid', 'Cancled'])
        ->count();
        $getTotalAmount = $bookingsData
        ->join('payments', 'bookings.id', '=', 'payments.booking_id')
        ->sum('payments.amount');
        $totalAmount = 'Rp ' . number_format($getTotalAmount, 0, ',', '.');

        $getSevenDaysAgo = Carbon::now()->subDays(7);
        // Format tanggal jika diperlukan
        $sevenDaysAgo = $getSevenDaysAgo->format('d-m-Y');

        return view('admin.dashboard', $data, compact('bookings', 'totalTransaksi', 'totalAmount', 'sevenDaysAgo'));
    }
}
       
