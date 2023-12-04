@extends('layouts.app')

@section('content')
    <section class="py-8 md:py-12 lg:py-16">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-8">
                <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
                <h2 class="font-bold text-dark text-xl md:text-3xl lg:text-4xl tracking-widest mb-4">
                    TICKET DETAILS
                </h2>
            </div>
        </div>

        <div class="py-8 px-4 md:px-24 flex flex-col md:flex-row items-center justify-between">
            <div class="w-full md:w-1/4 border border-slate-800 rounded-lg p-4 mb-4 md:mb-0 flex flex-col justify-center items-center">
                <p class="text-center mb-3 pb-2">QR CODE</p>
                @if($payment->ticket_number)
                    <div class="px-4">
                        {!! DNS2D::getBarcodeHTML('$payment->ticket_number', 'QRCODE', 8, 8) !!}
                    </div>
                @else
                    <div class="text-center my-auto">
                        <form action="{{ route('transaction', ['gor' => $payment->booking->field->gor->slug]) }}" method="POST" class="mb-3">
                            @csrf
                            <input type="hidden" name="booking_id" value="{{ $payment->booking->id }}">
                            <input type="hidden" name="booking_date" value="{{ $payment->booking->booking_date }}">
                            <input type="hidden" name="amount" value="{{ $payment->amount }}">
                            <button type="submit" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">BAYAR SEKARANG</button>
                        </form>
                        <p class="text-sm font-sm text-red-400 mb-2">ticket not found!</p>
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
                            @if ($payment->booking->status === 'Paid' || $payment->booking->status === 'Check In')
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
