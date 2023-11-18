@extends('layouts.app')

@section('content')
    <section class="py-36 px-32">
        <h3 class="text-4xl font-bold text-slate-800 mb-10">Transaksi</h3>
        <a href="/transaksi/add">
            <div class="mx-auto w-3/4 flex justify-between items-center rounded-lg border shadow-md p-4 mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                </svg>
                <p class="text-base font-semibold text-slate-800">Add a new bank account</p>
            </div>
        </a>
        <div class="mx-auto w-3/4 rounded-lg border shadow-md p-4">
            <p class="text-base font-semibold text-sky-800 mb-3">Stored Bank Account</p>
            <a href="">
                <div class="border-t border-slate-400 flex justify-between items-center py-4">
                    <div class="flex justify-start items-center">
                        <img src="#" alt="A" class="w-[30px] mr-10">
                        <div>
                            <p>Amalia Chrissafa Zalzabila</p>
                            <p>BRI : xxxxxxx</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </a>
            <a href="">
                <div class="border-t border-slate-400 flex justify-between items-center py-4">
                    <div class="flex justify-start items-center">
                        <img src="#" alt="A" class="w-[30px] mr-10">
                        <div>
                            <p>Amalia Chrissafa Zalzabila</p>
                            <p>BRI : xxxxxxx</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </a>
        </div>
    </section>
@endsection