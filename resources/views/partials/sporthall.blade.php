@extends('layouts.app')

@section('container')
    <section class="py-36 px-32">
        <div class="w-full rounded-3xl bg-slate-300 py-4 px-4">
            <a href="/sporthall/detail">
                <div class="flex items-center justify-between">
                    <img src="../img/login-image.png" alt="lapang" class="w-2/5 rounded-xl">
                    <div class="text-center mx-auto">
                        <h1 class="text-4xl font-bold text-slate-800">GOR CENDEKIA</h1>
                        <div class="flex items-center justify-center my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1e293b" class="bi bi-geo-alt-fill mr-2" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            <h3 class="text-xl font-semibold text-slate-800">Madiun</h3>
                        </div>
                        <div class="flex items-center justify-start mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <p class="text-lg font-medium text-slate-800">Lapangan Badminton</p>
                        </div>
                        <div class="flex items-center justify-start mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <p class="text-lg font-medium text-slate-800">Lapangan Basket</p>
                        </div>
                        <div class="flex items-center justify-start mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1e293b" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <p class="text-lg font-medium text-slate-800">Lapangan Sepakbola</p>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24   " fill="#f59e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24   " fill="#f59e0b" class="bi bi-star-fill ml-3" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        </div>
                        <p class="text-3xl text-sky-900 font-bold mt-3">Rp.100.000 - 150.000</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection