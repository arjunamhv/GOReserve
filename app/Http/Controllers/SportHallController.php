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
            'gors'=> Gor::latest()->filter(request(['search']))->paginate(7)->withQueryString()
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

    public function checkschedule(Gor $gor){
        return view("partials.order.sporthall-check", [
            "gor" => $gor,
        ]);
    }

    public function check(Request $request, Gor $gor){
        $validatedData = $request->validate([
            "field_id" => "required",
            "booking_date" => "required"
        ]);

        $bookings = Booking::whereDate('booking_date', $validatedData['booking_date']) //mengambil data tanggal booking
        ->where('field_id', $validatedData['field_id'])->get();

        $field = Field::find($validatedData['field_id'])->name;

        return redirect()->route('check', ['gor' => $gor->slug])->with(["success" => "sudah aman", 'booking' => $bookings, 'date' => $validatedData['booking_date'], 'field' => $field]);
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

        //get data field dan gor
        $field = Field::find($validatedData['field_id'])->gor_id;
        $gor = Gor::find($field);

        //prepare query
        $starttime = $validatedData['start_time'];
        $endTime = date('H:i', strtotime($validatedData['start_time']) + $validatedData['duration'] * 3600);//membuat endtime dari inputan duration pengguna
        $validatedData['end_time'] = $endTime;

        //cek waktu booking apakah tersedia atau tidak
        $bookings = Booking::whereDate('booking_date', $validatedData['booking_date']) //mengambil data tanggal booking
            ->where('field_id', $validatedData['field_id'])->where(function($query) use ($starttime, $endTime){ //pengecekan where nested
            $query->whereBetween('start_time', [$starttime, $endTime])->orWhereBetween('end_time', [$starttime, $endTime])//cek rentang waktu booking baru dari mulai ke berhenti
            ->orWhere(function($query2) use ($starttime, $endTime){//pengecekan kedua untuk rentang waktu
                $query2->where('start_time', '<', $starttime)//cek apakah terdapat start_time yang waktunya lebih awal dari starttime booking baru
                ->where('start_time', '>=', $endTime);//cek start_time booking lain juga harus lebih akhir dari end time booking baru
            });
        })->exists();

        //validasi dari banyak kemungkinan
        if(strtotime($validatedData['start_time']) < strtotime($gor->opening_hour) || strtotime($validatedData['start_time']) > strtotime($gor->closing_hour)){
            return redirect()->back()->with("error", "Booking diluar jam buka");
        }
        elseif($endtime > strtotime($gor->closing_hour)){
            return redirect()->back()->with("error", "Durasi melebihi jam tutup");
        }
        elseif($bookings){
            return redirect()->back()->with("error", "Lapangan sudah dibooking");
        }
        
        // Membuat record baru dalam tabel Booking berdasarkan data yang divalidasi
        $booking = Booking::create($validatedData);
        
        // Menyimpan data dalam session untuk ditampilkan pada bagian summary
        session()->flash("formData", [
            'field_name' => $booking->field->name,
            'username' => $booking->user->name,
            'start_time' => $booking->start_time,
            'end_time' => $booking->end_time,
            'price' =>  $booking->field->price * $booking->duration,
            'booking_date' => $booking->booking_date,
            'booking_id' => $booking->id
        ]);

        // Mengarahkan kembali ke halaman 'store' dengan parameter 'gor' dan memberikan pesan sukses
        return redirect()->route('store', ['gor' => $booking->field->gor->slug])->with("success", "Data tersimpan!");
    }

    public function transaction(Request $request){
        $payment = Payment::firstOrNew([
            'booking_id' => $request->input('booking_id'),
            'amount' => $request->input('amount'),
        ]);

        if (!$payment->exists) {
            $payment = Payment::create($request->all());
        }
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