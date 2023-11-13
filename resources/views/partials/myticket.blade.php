@extends('layouts.app')

@section('container')
    <section class="py-12">
        <div class="w-full flex justify-between items-center py-12 px-24 bg-sky-800 mb-10">
            <p class="text-2xl font-bold text-white">My Tickets</p>
            <input type="text" class="rounded-lg" placeholder="Search Ticket">
        </div>
        {{-- tidak ada tiket --}}
        <div class=" hidden mx-auto text-center">
            <img src="../img/empty.png" alt="" class="mx-auto w-1/3 mb-3">
            <h1 class="font-bold text-2xl text-slate-800 mb-3">No ticket bought</h1>
            <p>it appears you haven’t bought any ticket yet. maybe try searching these?</p>
            <div class="mx-auto w-3/4 py-4">
                <a href="/transaksi/input" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Explore our Services</a>
            </div>
        </div>

        {{-- ada tiket --}}
        <div class="mx-auto w-4/6">
            <div class="border border-slate-700 rounded-lg shadow-md p-4 flex justify-between items-center">
                <img src="../img/login-image.png" alt="lapang" class="w-[300px] h-[200px] rounded-xl">
                <div>
                    <p class="text-base font-semibold text-slate-800 mb-2"> Nama : Amalia Chrissafa</p>
                    <p class="text-base font-semibold text-slate-800 mb-2"> Category : Lapangan Basket</p>
                    <p class="text-base font-semibold text-slate-800 mb-2"> Waktu : 07.30 - 09.00 WIB</p>
                </div>
                    <a href="/myticket/detail" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Ticket Detail</a>
            </div>
        </div>
    </section>
@endsection