@extends('layouts.app')

@section('container')
    <section class="py-12">
        <div class="w-full flex justify-between items-center py-12 px-24 bg-sky-800 mb-10">
            <p class="text-2xl font-bold text-white">My Tickets</p>
            <input type="text" class="rounded-lg" placeholder="Search Ticket">
        </div>
        <div class="py-12 px-24 flex justify-between">
            <div class="w-1/4 border border-slate-800 rounded-lg p-4">
                <p class="text-center border-b mb-3 pb-2">Detail GOR</p>
                <img src="../img/login-image.png" alt="lapang" class="w-[300px] h-[200px] rounded-xl mx-auto">
            </div>
            <div class="w-[70%] border border-slate-800 rounded-lg py-4">
                <p class="text-center border-b mb-3 text-base font-bold text-slate-800 pb-4">You have 1 Ticket!</p>
                <div class="flex items-center">
                    <div class="w-1/2 flex justify-between border-r">
                        <div class="p-4">
                            <p class="text-base font-small text-gray-500 mb-2">Booking ID</p>
                            <p class="text-lg font-medium text-slate-800 mb-4">123123</p>
                            <p class="text-base font-small text-gray-500 mb-2">Name</p>
                            <p class="text-lg font-medium text-slate-800 mb-2">amalia chrissafa</p>
                        </div>
                        <div class="p-4">
                            <p class="text-base font-small text-gray-500 mb-2">Category</p>
                            <p class="text-lg font-medium text-slate-800 mb-4">Lapangan Basket</p>
                            <p class="text-base font-small text-gray-500 mb-2">Status</p>
                            <p class="text-lg font-medium text-green-500 mb-2">On Going</p>
                        </div>
                    </div>
                    <a href="/myticket/detail" class="mx-auto text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Download Ticket</a>
                </div>
            </div>
        </div>
    </section>
@endsection