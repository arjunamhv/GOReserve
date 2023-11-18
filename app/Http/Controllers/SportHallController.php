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

    public function store(Request $request, $gor){
        
        // value assignement username dari input
        $username = $request->input('username');
        
        // cek nama user pada tabel user
        $user = User::where('name', $username)->first();

        if(!$user) {
            // jika user tidak ditemukan
            return redirect()
            ->back()
            ->withErrors(['username' => 'User not found!']);
            
        }

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

        // mencari nama field dari field yang akan disewa oleh user
        $fieldname = Field::find($validatedData['field_id'])->name;
        
        //menenetukan akhir waktu booking
        $starttime = strtotime($validatedData['start_time']);
        $endtime = date('H:i', $starttime + $validatedData['duration'] * 3600); // Hitung end_time dalam detik

        // menjumlahkan harga sewa booking
        $obj = Gor::where('name', $gor)->first();
        $harga = $validatedData['duration'] * $obj->price;

        // Menyimpan data dalam session untuk ditampilkan pada bagian summary
        session()->flash("formData", [
            'field_name' => $fieldname,
            'username' => $username,
            'start_time' => $validatedData['start_time'],
            'end_time' => $endtime,
            'price' =>  $harga,
            'booking_date' => $validatedData['booking_date'],
            'booking_id' => Gor::where('name', $gor)->value('id')
        ]);

        // Membuat record baru dalam tabel Booking berdasarkan data yang divalidasi
        Booking::create($validatedData);

        // Mengarahkan kembali ke halaman 'store' dengan parameter 'gor' dan memberikan pesan sukses
        return redirect()->route('store', ['gor' => $gor])->with("success", "Data tersimpan!");
    }

    public function transaction(Request $request, $gor){
        $payment = Payment::create($request->all());

        // get data
        $pay = Payment::find($payment->id);
        $id_user = $pay->booking->user_id;
        $username = User::find($id_user)->name;
        $email = User::find($id_user)->email;

        $id_field = $pay->booking->field_id;
        $field = Field::find($id_field)->name;

        $price = Gor::where('user_id', $id_user)->first()->price;

        $start_time = strtotime($pay->booking->start_time);
        $end_time = date('H:i', $start_time + $pay->booking->duration * 3600);

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
                'name' => $username,
                'email' => $email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return view('transaction', compact('snapToken', 'order'))->with('transaction');

         // Mengarahkan kembali ke halaman 'store' dengan parameter 'gor' dan memberikan pesan sukses
         return view('partials.order.transaction', compact('snapToken', 'payment', 'username', 'email', 'field', 'end_time', 'price'));
    }
}
