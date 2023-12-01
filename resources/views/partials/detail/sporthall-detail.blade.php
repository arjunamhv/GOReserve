@extends('layouts.app')

@section('content')
    <section class="py-16 px-32">
        <a href="/sporthall" class="text-lg font-semibold text-sky-800 flex items-center hover:opacity-50 transition duration-300 ease-in-out "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
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
        <div class="overflow-hidden flex justify-between">
            <img src="../img/login-image.png" alt="lapang" class="w-2/5 h-[300px] rounded-xl">
            <img src="../img/login-image.png" alt="lapang" class="w-7/12 h-[300px] rounded-xl">
        </div>
        <div class="flex justify-start my-5">
            <div class="w-1/2">
                <h1 class="text-3xl font-bold text-slate-800">{{ $gor->name }}</h1>
                <div class="flex items-center justify-start my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1e293b" class="bi bi-geo-alt-fill mr-2" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <h3 class="text-lg font-medium text-slate-800">{{ json_decode($gor->address)->detail }}</h3>
                </div>
                <h1 class="text-2xl font-bold text-slate-800 my-2">Contact</h1>
                <p class="text-lg font-medium text-slate-800 mb-4">{{ $gor->user->name }}</p>
                <h1 class="text-2xl font-bold text-slate-800 my-2">Jam Operasional</h1>
                <p class="text-lg font-medium text-slate-800 my-2">{{ date('H:i', strtotime($gor->opening_hour)) }} - {{ date('H:i', strtotime($gor->closing_hour)) }} WIB</p>
            </div>
            <div class="w-1/2">
                <h4 class="text-3xl font-bold text-slate-800 mb-4">Fasilitas</h4>
                @foreach ($gor->field as $field)
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <p class="text-lg font-medium text-slate-800">{{ $field->name }}</p>
                            </div>
                            <p class="text- text-sky-900 font-medium">Rp. {{ number_format($field->price, 2, ',', '.') }}/Jam</p>
                        </div>
                @endforeach
                <div class="flex items-center justify-start mt-4">
                    <p class="text-2xl font-bold text-slate-800 mr-3">Rating</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16   " fill="#f59e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="pt-5 border-t border-slate-700 flex justify-end items-center">
            <a href="/sporthall/{{ $gor->slug }}/check" class="text-md font-semibold text-sky-800 bg-white border border-sky-800 py-3 px-24 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">CEK JADWAL</a>
            <a href="/sporthall/{{ $gor->slug }}/order" class="text-md font-semibold text-white bg-sky-800 py-3 px-24 rounded-2xl hover:shadow-lg ml-12 hover:opacity-50 transition duration-300 ease-in-out">ORDER</a>
        </div>
    </section>
@endsection