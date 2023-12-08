<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{

    public function index(Request $request){
    
    // Mendapatkan id pengguna yang sedang login
    $userId = Auth::id();
        
    // Query untuk mendapatkan pembayaran terkait dengan pengguna yang terautentikasi
    $payments = Payment::whereHas('booking.user', function ($query) use ($request) {
        $filter = $request->input('filter');

        if ($filter && $filter !== 'All') {
            $query->where('status', $filter);
        }
    })->whereHas('booking', function ($query) use ($userId) {
        $query->where('user_id', $userId);
    })->latest()->paginate(4);

    // Send data to the view
    return view("myticket", [
        'payment' => $payments,
    ]);
    }

    public function rating() {
        return view('partials.detail.rating-detail');
    }

    public function reviewstore(Request $request){
        $request->validate([
            'booking_id' => 'required',
            'comment' => 'required',
            'rating' => 'required|numeric',
            'service_id' => 'required',
        ]);
        
        $review = new Rating();
        $review->booking_id = $request->input('booking_id');
        $review->comments = $request->input('comment');
        $review->star_rating = $request->input('rating');
        $review->service_id = $request->service_id;
        $review->save();
        return redirect()->back()->with('flash_msg_success', 'Your review has been submitted successfully.');
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
                $payment->booking->update(['status' => 'Paid']);
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
