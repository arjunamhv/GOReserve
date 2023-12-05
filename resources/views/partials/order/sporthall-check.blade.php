@extends('layouts.app')

@section('content')
<section class="py-16 px-12 lg:px-32">
    <a href="/sporthall/{{ $gor->slug }}" class="text-lg font-semibold text-sky-800 flex items-center hover:opacity-50 transition duration-300 ease-in-out "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
        </svg>
        Kembali</a>
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
              class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
              >
              CHECK BOOKING
        </h2>
        </div>
    </div>
    <div class="w-[80%] lg:w-[60%] mx-auto rounded-3xl bg-slate-300 p-4 mb-10">
            <h1 class="text-center text-2xl lg:text-3xl font-bold text-sky-800 mb-5">{{ $gor->name }}</h1>
            <div class="w-full mx-auto">
                <form method="POST" action="{{ route('check', ['gor' => $gor->slug]) }}">
                    @csrf
                    <div class="mb-2 text-left">
                        <p class="text-base font-bold text-slate-800">
                            Lapangan
                        </p>
                        <select name="field_id" id="field_id" class="rounded-lg bg-slate-200 w-full">
                            @foreach ($gor->field as $field)
                            @if(old('field') == $field->id)
                            <option value="{{ $field->id }}" selected>{{ $field->name }}</option>
                            @else
                                <option value="{{ $field->id }}">{{ $field->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                        <p class="text-base font-bold text-slate-800">
                            Jadwal
                        </p>
                        <input type="date" name="booking_date" id="booking_date" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                        <button type="submit" class="w-full mt-10 text-md font-semibold text-white bg-sky-800 py-3 px-28 rounded-xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">SUBMIT</button>
                    </form>
            </div>

            @if (session('success'))
            <div class="container mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
                <h2 class="text-2xl font-bold mb-4">Booking Information</h2>
                <div class="flex justify-between items-center">
                    <h2 class="text-sm font-medium mb-4">{{ session('field') }}</h2>
                    <h2 class="text-sm font-medium mb-4">{{ session('date') }}</h2>
                </div>
                    <!-- Example Card for Booking Information -->
                @if(session('booking') && count(session('booking')) > 0)
                    @foreach (session('booking') as $bookings)
                    <div class="bg-gray-200 p-4 rounded-md mb-4 flex justify-between items-center">
                            <p class="text-gray-700"><span class="font-semibold">Name:</span> {{ $bookings->user->name }}</p>
                            <p class="text-gray-700"><span class="font-semibold">Time:</span> {{ date('H:i', strtotime($bookings->start_time)) }} - {{ date('H:i', strtotime($bookings->end_time)) }}</p>
                            @if ($bookings->status === 'Unpaid' ||$bookings->status === 'Canceled')
                            <p class="text-red-700"><span class="font-semibold text-gray-700">Status:</span> {{ $bookings->status }}</p>
                            @elseif($bookings->status === 'Paid' || $bookings->status === 'CheckIn')
                            <p class="text-green-700"><span class="font-semibold text-gray-700">Status:</span> {{ $bookings->status }}</p>
                            @else
                            <p class="text-yellow-700"><span class="font-semibold text-gray-700">Status:</span> {{ $bookings->status }}</p>
                            @endif
                    </div>
                    @endforeach
                @else
                    <div class="bg-gray-200 p-4 rounded-md mb-4">
                        <p class="text-gray-700">Tidak ada yang Booking!</p>
                    </div>
                @endif
            </div>
            @endif
        </div>
    </section>
@endsection