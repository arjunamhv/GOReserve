@extends('layouts.app')

@section('content')
    <section class="py-16 px-6 lg:px-32">
        <a href="/sporthall" class="text-sm lg:text-lg mb-5 lg:mb-0 font-semibold text-sky-800 flex items-center hover:opacity-50 transition duration-300 ease-in-out "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
            </svg>
            Kembali</a>
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4x tracking-widest"
              >
                SPORTHALL DETAIL
              </h2>
            </div>
          </div>
        <div class="overflow-hidden block lg:flex justify-between">
            @foreach ($gor->gor_photos as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="{{ $image }}" class="hidden lg:block w-[44%] h-[300px] rounded-xl">
                <img src="{{ asset('storage/images/gorbanner/' . $gor->gor_banner) }}" alt="{{ $gor->gor_banner }}" class="w-full lg:block lg:w-[55%] lg:h-[300px] rounded-xl">
            @endforeach
        </div>
        <div class="block lg:flex justify-start my-5">
            <div class="lg:w-1/2">
                <h1 class="text-xl lg:text-3xl font-bold text-slate-800">{{ $gor->name }}</h1>
                <div class="flex items-center justify-start my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1e293b" class="bi bi-geo-alt-fill mr-2" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <h3 class="text-base lg:text-lg font-medium text-slate-800">{{ json_decode($gor->address)->detailAlamat }}</h3>
                </div>
                <h1 class="text-lg lg:text-2xl font-bold text-slate-800 my-2">Contact</h1>
                <p class="text-sm lg:text-lg font-medium text-slate-800 mb-4">{{ $gor->user->name }}</p>
                <h1 class="text-lg lg:text-2xl font-bold text-slate-800 my-2">Jam Operasional</h1>
                <p class="text-sm lg:text-lg font-medium text-slate-800 mb-4 lg:mb-0 lg:my-2">{{ date('H:i', strtotime($gor->opening_hour)) }} - {{ date('H:i', strtotime($gor->closing_hour)) }} WIB</p>
            </div>
            <div class="lg:w-1/2">
                <h4 class="text-xl lg:text-3xl font-bold text-slate-800 mb-4">Fasilitas</h4>
                @foreach ($gor->field as $field)
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                </svg>
                                <p class="text-xs lg:text-lg font-medium text-slate-800">{{ $field->name }}</p>
                            </div>
                            <p class="text-sm lg:text-base text-sky-900 font-medium">Rp. {{ number_format($field->price, 2, ',', '.') }}/Jam</p>
                        </div>
                @endforeach
                <div class="flex items-center justify-start mt-4">
                    <p class="text-lg lg:text-2xl font-bold text-slate-800 mr-3">Rating</p>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <p class="ms-2 text-sm font-bold text-gray-900 dark:text-dark">4.95</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <div class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-dark">73 reviews</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 border-t border-slate-700 flex justify-between lg:justify-end items-center">
            <a href="/sporthall/{{ $gor->slug }}/check" class="text-sm lg:text-md font-semibold text-sky-800 bg-white border border-sky-800 px-4 rounded-2xl py-4 lg:px-24 hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">CEK JADWAL</a>
            <a href="/sporthall/{{ $gor->slug }}/order" class="text-md font-semibold text-white bg-sky-800 rounded-2xl ml-12 py-3 px-12 lg:px-24 hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">ORDER</a>
        </div>
    </section>
@endsection