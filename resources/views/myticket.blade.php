@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 lg:px-32">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
                <h2 class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest">MY TICKETS</h2>
            </div>
        </div>

        {{-- filter search --}}
        <form method="GET" action="/myticket" class="mb-4">
            <div class="flex justify-center items-center">
                <select name="filter" class="w-1/2 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-sky-500">
                    <option value="All" @if(request('filter') == 'All') selected @endif>All</option>
                    <option value="Paid" @if(request('filter') == 'Paid') selected @endif>Paid</option>
                    <option value="Unpaid" @if(request('filter') == 'Unpaid') selected @endif>Unpaid</option>
                    <option value="Cancel" @if(request('filter') == 'Canceled') selected @endif>Cancel</option>
                    <option value="Check Out" @if(request('filter') == 'CheckOut') selected @endif>Check Out</option>
                </select>
                <button type="submit" class="text-sm lg:text-base font-medium bg-sky-800 text-white px-4 py-2 rounded-md ml-2">Filter</button>
            </div>
        </form>

        @if($payment->count())
            @foreach ($payment as $ticket)
                {{-- ada tiket --}}
                <div class="mx-auto w-full lg:w-[80%] mb-10">
                    <div class="border border-slate-300 rounded-lg shadow-md p-4 flex justify-between items-center">
                        <img src="../img/login-image.png" alt="lapang" class="hidden lg:block w-[300px] h-[200px] rounded-xl">
                        <div>
                            <p class="text-xs lg:text-base font-semibold text-slate-800 mb-2">{{ $ticket->booking->user->name }}</p>
                            <p class="text-xs lg:text-base font-semibold text-slate-800 mb-2">{{ $ticket->booking->field->gor->name }}</p>
                            <p class="text-xs lg:text-base font-semibold text-slate-800 mb-2">{{ $ticket->booking->field->name }}</p>
                            <p class="text-xs lg:text-base font-semibold text-slate-800 mb-2">{{ date('H:i', strtotime($ticket->booking->start_time)) }} - {{ date('H:i', strtotime($ticket->booking->start_time) + $ticket->booking->duration * 3600) }} WIB</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <a href="/myticket/{{ $ticket->id }}" class="text-xs lg:text-base font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out mb-2">Ticket Detail</a>
                            <a href="/rating" class="text-xs lg:text-base font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out mb-2">Write Review</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $payment->links() }}
        @else
            {{-- tidak ada tiket --}}
            <div class="mx-auto text-center">
                <img src="../img/empty.png" alt="" class="mx-auto w-1/3 mb-3">
                <h1 class="font-bold text-lg lg:text-2xl text-slate-800 mb-3">No ticket bought</h1>
                <p class="text-sm lg:text-base font-medium">It appears you haven’t bought any ticket yet. Maybe try searching these?</p>
                <div class="mx-auto w-3/4 py-4">
                    <a href="/sporthall" class="text-xs lg:text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Explore our Services</a>
                </div>
            </div>
        @endif
    </section>
@endsection
