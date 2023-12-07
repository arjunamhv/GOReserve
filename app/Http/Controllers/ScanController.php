<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking;

class ScanController extends Controller
{
    public function scancheck(Request $request)
    {
        $qr = $request->qr_code;
        $payment = Payment::where('ticket_number', $qr)->first();
        $ticket_code = $payment->ticket_number;
        if ($ticket_code !== null && $qr == $ticket_code) {
            $booking_status = Booking::where('id', $payment->booking_id)->first();
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
