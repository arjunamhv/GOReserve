<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index(){
        return view("myticket", [
            'payment' => Payment::latest()->paginate(7)->withQueryString()
        ]);
    }

    public function show(Payment $payment){
        return view('partials.detail.myticket-detail', [
            'payment' => $payment
        ]);
    }

    public function callback(Request $request){
        function generate(){
            return mt_rand(100000000, 999999999);
        }

        $serverkey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.$serverkey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $payment = Payment::find($request->order_id);
                $payment->booking->update(['status' => 'Sudah Bayar']);
                $newNumber = generate();
                $exists = Payment::where('ticket_number', $newNumber)->exists();
                if($exists){
                    do {
                        $newNumber = generate();
                        $exists = Payment::where('ticket_number', $newNumber)->exists();
                      } while ($exists);
                }
                Payment::where('id', $payment->id)->update([
                    'ticket_number' => $newNumber
                ]);
            }
        }
    }
}