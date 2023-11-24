<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking;

class ScanController extends Controller
{
    public function scan(Request $request)
    {
        $qr = $request->qr_code;
        $data = Payment::where('ticket_number', $qr)->first();
        $booking_status = Booking::where($data->Booking_id, $qr)->first();
        if ($data !== null && $qr == $data->ticket_number) {
            $booking_status->update([
                'status' => 'Checked-in'
            ]);
            return response()->json([
                'status' => 200,
            ]);
        }else{
            return response()->json([
                'status' => 400,
            ]);
        }
    }
}
