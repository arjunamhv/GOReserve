@extends('layouts.app')

@section('content')
    <section class="py-16 px-4 lg:px-32">
        <a href="/sporthall/{{ $gor->slug }}" class="text-sm lg:text-lg mb-5 lg:mb-0 font-semibold text-sky-800 flex items-center hover:opacity-50 transition duration-300 ease-in-out "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
            </svg>
            Kembali</a>
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
              >
              SPORTHALL BOOKING
            </h2>
        </div>
    </div>
    @if(session()->has('success'))
    <div class="w-full lg:w-1/2 flex justify-between mx-auto bg-green-100 border-l-4 border-green-500 text-green-700 p-4 relative" role="alert">
        {{ session('success') }}
        <button
            class=" text-green-600 hover:text-green-400 font-bold text-medium"
            onclick="this.parentElement.style.display='none'"
        >
            X
        </button>
    </div>
    @elseif(session()->has('error'))
    <div class="w-full lg:w-1/2 flex justify-between mx-auto bg-red-100 border-l-4 border-red-500 text-red-700 p-4 relative" role="alert">
        {{ session('error') }}
        <button
            class=" text-red-600 hover:text-red-400 font-bold text-medium"
            onclick="this.parentElement.style.display='none'"
        >
            X
        </button>
    </div>
    @endif
        <div class="w-full lg:mx-0 rounded-3xl bg-slate-300 p-4 mb-10">
            <h1 class="text-center text-xl lg:text-3xl font-bold text-slate-800 mb-4">{{ $gor->name }}</h1>
            <div class="block lg:flex items-center justify-between">
                <img src="{{ asset('storage/' . $gor->gor_banner) }}" alt="{{ $gor->gor_banner }}" class="hidden lg:block w-2/5 h-[400px] rounded-xl">
                <div class="lg:w-1/2">
                    <form method="POST" action="{{ route('store', ['gor' => $gor->slug]) }}">
                        @csrf
                        <div class="mb-2 text-left">
                            <p class="text-base font-bold text-slate-800">
                                Name
                            </p>
                            <input type="text" name="username" id="username" value="{{ auth()->user()->name }}" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" readonly>
                        </div>
                        <div class="mb-2 text-left">
                            <p class="text-base font-bold text-slate-800">
                                Lapangan
                            </p>
                            <select name="field_id" id="field_id" class="rounded-lg bg-slate-200 w-full">
                                @foreach ($gor->field as $field)
                                    @if(old('field') == $field->id)
                                    <option value="{{ $field->id }}" selected>{{ $field->name }}</option>
                                    @else
                                    <option value="{{ $field->id }}">{{ $field->name }} - Rp. {{ $field->price }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="block lg:flex justify-between items-center">
                            <div class="">
                                <p class="text-base font-bold text-slate-800">
                                    Jadwal
                                </p>
                                <input type="date" name="booking_date" id="booking_date" class="w-full bg-slate-200 text- p-1 lg:p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                            </div>
                            <div class="">
                                <p class="text-base font-bold text-slate-800">
                                    Jam
                                </p>
                                <input type="time" name="start_time" id="start_time" class="w-full bg-slate-200 text-dark p-1 lg:p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                            </div>
                            <div class="">
                                <p class="text-base font-bold text-slate-800">
                                    Durasi
                                </p>
                                <input type="number" name="duration" id="duration" min="1" max="12" class="w-full bg-slate-200 text-dark p-1 lg:p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                            </div>
                        </div>
                            <button type="submit" class="w-full mt-10 text-md font-semibold text-white bg-sky-800 py-3 px-28 rounded-xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
                
            @if (session('success'))    
            {{-- summary --}}
            <form action="{{ route('transaction', ['gor' => $gor->slug]) }}" method="POST">
                @csrf
                <input type="hidden" name="booking_id" value="{{ $formData['booking_id'] }}">
                <input type="hidden" name="booking_date" value="{{ $formData['booking_date'] }}">
                <input type="hidden" name="amount" value="{{ $formData['price'] }}">

                <div class="w-full border border-slate-800 rounded-lg p-4">
                    <h2 class="text-slate-800 text-xl lg:text-2xl font-bold mb-3">Summary</h2>
                    <p class="text-sky-800 text-base lg:text-lg font-semibold mb-3">{{ $formData['username'] }}</p>
                    <p class="text-sky-800 text-base lg:text-lg font-semibold mb-3">{{ $formData['field_name'] }}</p>
                    <div class="flex justify-between items-center mb-3">
                        <p class="text-sky-800 text-base lg:text-lg font-semibold">Pukul {{ $formData['start_time'] }} - {{ $formData['end_time'] }}</p>
                        <p class="text-sky-800 text-base lg:text-xl font-semibold">Rp. {{ $formData['price'] }}</p>
                    </div>
                    <div class="w-full border-t border-slate-700 flex justify-between items-center py-3 mb-3">
                        <p class="text-sky-800 text-base lg:text-lg font-bold">TOTAL</p>
                        <p class="text-sky-800 text-lg lg:text-xl font-bold">Rp. {{ number_format($formData['price'], 2, ',', '.') }}</p>
                    </div>
                    <div class="flex justify-between">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-sky-600" required>
                            <span class="text-sm lg:text-base text-slate-800">I agree to the terms and conditions</span>
                        </label>
                        <button type="submit" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">ORDER</button>
                    </div>
                </div>
            </form>
            @endif
    </section>
@endsection