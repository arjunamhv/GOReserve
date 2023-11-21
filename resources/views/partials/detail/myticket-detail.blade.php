@extends('layouts.app')

@section('content')
    <section class="py-12">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl dark:text-white tracking-widest"
              >
                TICKET DETAILS
              </h2>
            </div>
          </div>
        <div class="py-12 px-24 flex justify-between">
            <div class="w-1/4 border border-slate-800 rounded-lg p-4">
                <p class="text-center border-b mb-3 pb-2">Detail GOR</p>
                @if($payment->ticket_number)
                <div class="px-4">
                    {!! DNS2D::getBarcodeHTML('$payment->ticket_number', 'QRCODE', 8, 8) !!}
                </div>
                @else
                <div class="text-center">
                    <p class="text-lg font-medium text-red-400 mb-2">ticket not found!</p>
                </div>
                @endif
            </div>
            <div class="w-[70%] border border-slate-800 rounded-lg py-4">
                <p class="text-center border-b mb-3 text-base font-bold text-slate-800 pb-4">NOTED : Don't show QR Code to everyone!</p>
                <div class="flex items-center">
                    <div class="w-1/2 flex justify-between border-r">
                        <div class="p-4">
                            <p class="text-base font-small text-gray-500 mb-2">Booking ID</p>
                            <p class="text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->id }}</p>
                            <p class="text-base font-small text-gray-500 mb-2">Name</p>
                            <p class="text-lg font-medium text-slate-800 mb-2">{{ $payment->booking->user->name }}</p>
                        </div>
                        <div class="p-4">
                            <p class="text-base font-small text-gray-500 mb-2">Category</p>
                            <p class="text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->field->name }}</p>
                            <p class="text-base font-small text-gray-500 mb-2">Status</p>
                            @if ($payment->booking->status === 'Sudah Bayar' || $payment->booking->status === 'Check In')
                                <p class="text-lg font-medium text-green-500 mb-2">{{ $payment->booking->status }}</p>
                            @else
                                <p class="text-lg font-medium text-red-500 mb-2">{{ $payment->booking->status }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="p-4">
                            <p class="text-base font-small text-gray-500 mb-2">GOR</p>
                            <p class="text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->field->gor->name }}</p>
                            <div class="w-full flex justify-between items-center">
                                <div class="mb-2">
                                    <p class="text-base font-small text-gray-500">Tanggal</p>
                                    <p class="text-lg font-medium text-slate-800">{{ $payment->booking->booking_date }}</p>
                                </div>
                                <div class="mb-2 text-right">
                                    <p class="text-base font-small text-gray-500">Jam</p>
                                    <p class="text-lg font-medium text-slate-800">{{ date('H:i', strtotime($payment->booking->start_time)) }} - {{ date('H:i', strtotime($payment->booking->start_time) + $payment->booking->duration * 3600) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-24 text-right">
         <a href="/myticket" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Kembali</a>
        </div>
    </section>
@endsection