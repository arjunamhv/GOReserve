@extends('layouts.app')

@section('container')
    <section class="py-36 px-32">
        <div class="w-full rounded-3xl bg-slate-300 p-4 mb-10">
            <h1 class="text-center text-3xl font-bold text-slate-800 mb-4">GOR CENDEKIA</h1>
            <div class="flex items-center justify-between">
                <img src="../img/login-image.png" alt="lapang" class="w-2/5 h-[400px] rounded-xl">
                <div class="w-1/2">
                    <form action="post" action="#">
                        @csrf
                        <div class="mb-2 text-left">
                            <p class="text-base font-bold text-slate-800">
                                Name
                            </p>
                            <input type="text" name="name" id="name" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                        </div>
                        <div class="mb-2 text-left">
                            <p class="text-base font-bold text-slate-800">
                                Category
                            </p>
                            <input type="text" name="name" id="name" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                        </div>
                        <div class="mb-2 text-left">
                            <p class="text-base font-bold text-slate-800">
                                Time
                            </p>
                            <input type="text" name="name" id="name" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                        </div>
                        <div class="mb-10 text-left">
                            <p class="text-base font-bold text-slate-800">
                                Phone Number
                            </p>
                            <input type="text" name="name" id="name" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary" required>
                        </div>
                        <a href="/order" class="text-lg font-bold text-white bg-sky-800 py-3 px-24 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">SUBMIT</a>
                    </form>
                </div>
            </div>
        </div>
        {{-- summary --}}
        <div class="w-full border-1 border-slate-800 rounded-lg p-4">
            <h2 class="text-slate-800 text-2xl font-bold mb-3">Summary</h2>
            <p class="text-blue-800 text-lg font-semibold mb-3">Amalia Chrissafa Zalzabila</p>
            <p class="text-blue-800 text-lg font-semibold mb-3">Lapangan Basket</p>
            <div class="flex justify-between items-center mb-3">
                <p class="text-blue-800 text-lg font-semibold">Pukul 07.30 - 09.00</p>
                <p class="text-blue-800 text-xl font-semibold">Rp. 100.000,-</p>
            </div>
            <div class="w-full border-t border-slate-700 flex justify-between items-center py-3 mb-3">
                <p class="text-blue-800 text-lg font-bold">TOTAL</p>
                <p class="text-blue-800 text-xl font-bold">Rp. 100.000,-</p>
            </div>
            <div class="flex justify-between    ">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-sky-600">
                    <span class="text-slate-800">I agree to the terms and conditions</span>
                </label>
                <a href="#" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">ORDER</a>
            </div>
        </div>
    </section>
@endsection