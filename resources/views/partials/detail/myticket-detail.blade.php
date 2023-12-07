@extends('layouts.app')

@section('content')
    <section class="py-12">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
              >
                TICKET DETAILS
              </h2>
            </div>
          </div>
        <div class="px-6 lg:py-12 lg:px-24 lg:flex justify-between">
            <div class="w-full mx-auto mb-5 lg:mb-0 lg:w-1/4 lg:mx-0 border border-slate-800 rounded-lg p-4 flex flex-col justify-center items-center">
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
            <div class="w-full lg:w-[70%] border border-slate-800 rounded-lg py-4">
                <p class="text-center border-b mb-3 text-xs lg:text-base font-bold text-slate-800 lg:pb-4">NOTED : Don't show QR Code to everyone!</p>
                <div class="px-4 lg:flex lg:px-0 items-center">
                    <div class="w-full lg:w-1/2 flex justify-between border-r">
                        <div class="lg:p-4">
                            <p class="text-xs lg:text-base font-small text-gray-500 mb-2">Booking ID</p>
                            <p class="text-sm lg:text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->id }}</p>
                            <p class="text-xs lg:text-base font-small text-gray-500 mb-2">Name</p>
                            <p class="text-sm lg:text-lg font-medium text-slate-800 mb-4 lg:mb-2">{{ $payment->booking->user->name }}</p>
                        </div>
                        <div class="lg:p-4">
                            <p class="text-xs text-right lg:text-left lg:text-base font-small text-gray-500 mb-2">Nama GOR</p>
                            <p class="text-sm lg:text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->field->gor->name }}</p>
                            <p class="text-right lg:text-left text-xs lg:text-base font-small text-gray-500 mb-2">Status</p>
                            @if ($payment->booking->status === 'Paid' || $payment->booking->status === 'Check In')
                                <p class="text-right lg:text-left text-sm lg:text-lg font-medium text-green-500 lg:mb-2">{{ $payment->booking->status }}</p>
                            @else
                                <p class="text-right lg:text-left text-sm lg:text-lg font-medium text-red-500 lg:mb-2">{{ $payment->booking->status }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="lg:p-4">
                            <div class="w-full flex justify-between items-center">
                                <div class="mb-2">
                                    <p class="text-left text-xs lg:text-base font-small text-gray-500 mb-2">Category</p>
                                    <p class="text-right lg:text-left text-sm lg:text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->field->name }}</p>
                                </div>
                                <div class="mb-2">
                                    <p class="text-right lg:text-left text-xs lg:text-base font-small text-gray-500 mb-2">Type</p>
                                    <p class="text-right text-sm lg:text-lg font-medium text-slate-800 mb-4">{{ $payment->booking->field->type }}</p>
                                </div>
                            </div>
                            <div class="w-full flex justify-between items-center">
                                <div class="mb-2">
                                    <p class="text-xs lg:text-base font-small text-gray-500 mb-2">Tanggal</p>
                                    <p class="text-sm lg:text-lg font-medium text-slate-800">{{ $payment->booking->booking_date }}</p>
                                </div>
                                <div class="mb-2 text-right">
                                    <p class="text-xs lg:text-base font-small text-gray-500 mb-2">Jam</p>
                                    <p class="text-sm lg:text-lg font-medium text-slate-800">{{ date('H:i', strtotime($payment->booking->start_time)) }} - {{ date('H:i', strtotime($payment->booking->start_time) + $payment->booking->duration * 3600) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 pt-12 lg:pt-0 lg:px-24 text-right">
         <a href="/myticket" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Kembali</a>
        </div>
    </section>
@endsection