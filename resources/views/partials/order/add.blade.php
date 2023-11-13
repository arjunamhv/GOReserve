@extends('layouts.app')

@section('container')
    <section class="py-36 px-32">
        <h3 class="text-4xl font-bold text-slate-800 mb-10">Transaksi</h3>
        <div class="mx-auto w-3/4 flex justify-between items-center rounded-lg border shadow-md p-4 mb-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
            </svg>
            <p class="text-base font-semibold text-slate-800">Bank Transfer</p>
        </div>
        <div class="mx-auto w-3/4 rounded-lg border shadow-md p-4">
            <p class="text-base font-semibold text-sky-800 mb-3">Stored Bank Account</p>
            <div class="border-t border-slate-400 py-4 flex justify-between">
                    <p>Nama Bank: </p>
                    <select id="bank" name="bank" class="py-2 border border-gray-300 rounded-md focus:outline-none focus:border-sky-500 focus:ring focus:ring-sky-200">
                        <option value="bri">BRI</option>
                        <option value="bca">BCA</option>
                        <option value="bni">BNI</option>
                      </select>
            </div>
            <div class="border-t border-slate-400 py-4 flex justify-between">
                    <p>No Rekening: </p>
                    <input type="text" class="border-none bg-white focus:outline-none" placeholder="Masukan No Rekening" name="norek">
            </div>
            <div class="border-t border-slate-400 py-4 flex justify-between">
                    <p>Simpan No Rekening </p>
                    <input type="radio" name="save" id="save">
            </div>
        </div>
            <div class="mx-auto w-3/4 p-4 flex justify-end">
                <a href="/transaksi/input" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">SUBMIT</a>
            </div>
    </section>
@endsection