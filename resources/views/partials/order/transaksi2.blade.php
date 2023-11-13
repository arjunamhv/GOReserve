@extends('layouts.app')

@section('container')
    <section class="py-36 px-32">
        <h3 class="text-4xl font-bold text-slate-800 mb-10">Transaksi</h3>
            <div class="mx-auto w-3/4 flex justify-start items-center rounded-lg border shadow-md p-4 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank mr-10" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                </svg>
                <div>
                    <p class="text-lg font-bold text-sky-800">AMALIA CHRISSAFA ZALZABILA</p>
                    <p class="text-base font-bold text-slate-800">BRI: XXXXX</p>
                </div>
            </div>
        <div class="mx-auto w-3/4 rounded-lg border shadow-md p-4 mb-5">
            <p class="text-base font-bold text-sky-800">Jumlah Transfer</p>
            <div class="flex flex-start items-center">
                <p class="text-2xl font-semibold text-slate-800">Rp.</p>
                <input type="text" name="nominal" placeholder="0" class="border-none text-2xl font-semibold text-slate-40">
            </div>
        </div>
        <div class="mx-auto w-3/4 rounded-lg border shadow-md p-4 mb-5">
            <textarea type="text" name="nominal" placeholder="Deskripsi (Opsional)" class="border-none text-lg font-semibold text-slate-40 w-full"></textarea>
        </div>
        <div class="mx-auto w-3/4 rounded-lg border shadow-md p-4">
            <div class="flex flex-start items-center justify-between">
                <p class="text-base font-semibold text-sky-800">Total jumlah yang di transfer</p>
                <p class="text-base font-bold text-sky-800">100.000</p>
                
            </div>
        </div>
        <div class="mx-auto w-3/4 py-4 flex justify-end">
            <a href="/transaksi/input" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">SUBMIT</a>
        </div>
    </section>
@endsection