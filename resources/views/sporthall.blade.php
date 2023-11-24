@extends('layouts.app')

@section('content')
    <section class="py-16 px-32">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl dark:text-white tracking-widest"
              >
                SPORTHALL
              </h2>
            </div>
          </div>
          @if($gors->count())
          @foreach ($gors as $gor)
            <div class="w-full rounded-3xl bg-slate-300 py-4 px-4">
                <a href="/sporthall/{{ $gor->slug }}">
                    <div class="flex items-center justify-between">
                        <img src="../img/login-image.png" alt="lapang" class="w-2/5 rounded-xl">
                        <div class="text-center mx-auto">
                            <h1 class="text-4xl font-bold text-slate-800">{{ $gor->name }}</h1>
                            <div class="flex items-center justify-center my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1e293b" class="bi bi-geo-alt-fill mr-2" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                <h3 class="text-xl font-semibold text-slate-800">{{ json_decode($gor->address)->kota }}</h3>
                            </div>
                            @foreach ($gor->field as $field)
                                <div class="flex items-center justify-start mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    <p class="text-base font-medium text-slate-800">{{ $field->name }}</p>
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
