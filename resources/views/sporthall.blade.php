@extends('layouts.app')

@section('content')
    <section class="py-16 px-12 lg:px-32">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
              >
                SPORTHALL
              </h2>
            </div>
          </div>
          <div class="flex justify-center items-center mb-5">
            <form action="/sporthall" class="w-full max-w-xs lg:max-w-xl" method="GET">
                <div class="flex items-center border-b-2 border-sky-800 py-2 mb-5">
                    <input type="text" placeholder="Cari GOR" name='search' value="{{ request('search') }}" class="appearance-none outline-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" />
                    <button class="flex-shrink-0 bg-sky-800 hover:bg-sky-700 border-sky-800 hover:border-sky-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                        Search
                    </button>
                </div>
            </form>
        </div>
        
          @if($gors->count())
          @foreach ($gors as $gor)
            <div class="w-3/5 mx-auto rounded-3xl bg-slate-300 py-4 px-4 mb-10 lg:w-full">
                <a href="/sporthall/{{ $gor->slug }}">
                    <div class="block lg:flex items-center justify-start">
                        <img src="../img/login-image.png" alt="lapang" class="w-full mb-5 rounded-xl mx-auto lg:mr-12 lg:w-2/5 lg:mb-0 lg:mx-0">
                        <div class="text-center">
                            <h1 class="text-2xl lg:text-4xl font-bold text-slate-800">{{ $gor->name }}</h1>
                            <div class="flex items-center justify-start my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1e293b" class="bi bi-geo-alt-fill mr-2" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                <h3 class="text-base lg:text-xl font-semibold text-slate-800">{{ json_decode($gor->address)->kota }}</h3>
                            </div>
                            @foreach ($gor->field as $field)
                                <div class="flex items-center justify-start lg:mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    <p class="text-sm lg:text-base font-medium text-slate-800">{{ $field->name }}</p>
                                </div>
                            @endforeach
                            <div class="flex items-center justify-start mt-4">
                                <p class="text-base font-medium text-slate-800 mr-3">Rating</p>
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
                </a>
            </div>
            @endforeach
        @else
        <p class="text-center fs-4">No sporthall found.</p>
        @endif
    </section>
@endsection
