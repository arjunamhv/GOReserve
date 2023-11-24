<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Booking;
use App\Models\User;
use App\Models\Field;
use App\Models\Payment;
use Illuminate\Http\Request;

class SportHallController extends Controller
{
    public function index(){
        return view("sporthall", [
            'gors'=> Gor::all()
    ]);
    }

    public function show(Gor $gor){
        return view('partials.detail.sporthall-detail', [
            "gor" => $gor
        ]);
    }

    public function order(Gor $gor){
        return view("partials.order.sporthall-order", [
            "gor"=> $gor,
            "formData" => session('formData', [])
            ] );
    }

    public function store(Request $request){
        
        // value assignement username dari input
        $username = $request->input('username');
        
        // cek nama user pada tabel user
        $user = User::where('name', $username)->first();

        // value assignment userid
        $userId = $user->value('id');

        // validasi data input user
        $validatedData = $request->validate([
            "field_id"=> "required",
            "booking_date"=> "required",
            "start_time"=> "required",
            "duration"=> "required",
        ]);
        
        // mengisi userid
        $validatedData['user_id'] = $userId;
        
        //menenetukan akhir waktu booking
        $endtime = strtotime($validatedData['start_time']. ' + '. $validatedData['duration'] .' hours');

        $field = Field::find($validatedData['field_id'])->gor_id;
        $gor = Gor::find($field);

        if(strtotime($validatedData['start_time']) < strtotime($gor->opening_hour) || strtotime($validatedData['start_time']) > strtotime($gor->closing_hour)){
            return redirect()->back()->with("error", "Booking diluar jam buka");
        }
        elseif($endtime > strtotime($gor->closing_hour)){
            return redirect()->back()->with("error", "Durasi melebihi jam tutup");
        }
        
        // Membuat record baru dalam tabel Booking berdasarkan data yang divalidasi
        $booking = Booking::create($validatedData);
        
        // Menyimpan data dalam session untuk ditampilkan pada bagian summary
        session()->flash("formData", [
            'field_name' => $booking->field->name,
            'username' => $booking->user->name,
            'start_time' => $booking->start_time,
            'end_time' => date('H:i',strtotime($booking->start_time) + $booking->duration * 3600),
            'price' =>  $booking->field->price * $booking->duration,
            'booking_date' => $booking->booking_date,
            'booking_id' => $booking->id
        ]);

        // Mengarahkan kembali ke halaman 'store' dengan parameter 'gor' dan memberikan pesan sukses
        return redirect()->route('store', ['gor' => $booking->field->gor->slug])->with("success", "Data tersimpan!");
    }

    public function transaction(Request $request, $gor){
        $payment = Payment::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $payment->id,
                'gross_amount' => $payment->amount,
            ),
            'customer_details' => array(
                'name' => $payment->booking->user->name,
                'email' => $payment->booking->user->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

         // Mengarahkan kembali ke halaman 'store' dengan parameter 'gor' dan memberikan pesan sukses
         return view('partials.order.transaction', compact('snapToken', 'payment'));
    }
}