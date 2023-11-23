<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $fiveDaysToGo = Carbon::now()->addDays(5)->endOfDay();

        $bookings = Booking::where('status', ['paid', 'not checked in', 'checked in'])
            ->whereDate('booking_date', '<=', $fiveDaysToGo)
            ->get();

        foreach ($bookings as $booking) {
            $typeId = $booking->field->type;
            $type = Type::find($typeId);        
            $booking->field_type = $type->name;
        }

        return view('admin.dashboard', compact('bookings'));
    }
}
       
