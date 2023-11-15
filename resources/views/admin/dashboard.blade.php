@extends('admin.app')

@section('content')
    <h1 class="text-3xl font-bold m-5">Dashboard</h1>
    @if (session('message'))
        <div class="alert alert-info">
            <i class="fa-solid fa-circle-info"></i><span>{{ session('message') }}</span>
        </div>
    @endif

    <h1 class="text-xl m-5 mb-1">Aktifitas Pemesanan Terkini</h1>
    <div class="carousel rounded-box w-full overflow-x-auto">
        <div class="carousel-item px-5">
            <div class="card w-96 bg-base-200 shadow-xl">
                <h2 class="card-title p-5 pb-1">Booking id: 123123123213</h2>
                <div class="grid grid-cols-12 p-5 pt-1">
                    <div class="col-span-5">
                        <h1>Nama Pemesan</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>Arjuna Mahavira</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Tanggal</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sdadasdasda</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Jam</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sadasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Type</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Number</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasd</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item px-5">
            <div class="card w-96 bg-base-200 shadow-xl">
                <h2 class="card-title p-5 pb-1">Booking id: 123123123213</h2>
                <div class="grid grid-cols-12 p-5 pt-1">
                    <div class="col-span-5">
                        <h1>Nama Pemesan</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>Arjuna Mahavira</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Tanggal</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sdadasdasda</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Jam</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sadasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Type</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Number</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasd</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item px-5">
            <div class="card w-96 bg-base-200 shadow-xl">
                <h2 class="card-title p-5 pb-1">Booking id: 123123123213</h2>
                <div class="grid grid-cols-12 p-5 pt-1">
                    <div class="col-span-5">
                        <h1>Nama Pemesan</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>Arjuna Mahavira</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Tanggal</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sdadasdasda</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Jam</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sadasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Type</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Number</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasd</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item px-5">
            <div class="card w-96 bg-base-200 shadow-xl">
                <h2 class="card-title p-5 pb-1">Booking id: 123123123213</h2>
                <div class="grid grid-cols-12 p-5 pt-1">
                    <div class="col-span-5">
                        <h1>Nama Pemesan</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>Arjuna Mahavira</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Tanggal</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sdadasdasda</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Jam</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>sadasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Type</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasdas</h1>
                    </div>
                    <div class="col-span-5">
                        <h1>Field Number</h1>
                    </div>
                    <div class="col-span-1">
                        <h1>:</h1>
                    </div>
                    <div class="col-span-6">
                        <h1>asdasdasd</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-xl m-5 mb-1">Booking Schedule</h1>
        
    {{-- @foreach ($booking as $data)
        <div class="carousel rounded-box w-full overflow-x-auto">
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-head">
                        <h1>Booking id: {{ $data->id }}</h1>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-col-3">
                            <div>
                                <h1 class="text-xl">Nama Pemesan: </h1>
                            </div>
                            <div>
                                <h1 class="text-xl col-span-2">{{ $data->name }}</h1>
                            </div>
                            <div>
                                <h1 class="text-xl">Tanggal: </h1>
                            </div>
                            <div>
                                <h1 class="text-xl col-span-2">{{ $data->date }}</h1>
                            </div>
                            <div>
                                <h1 class="text-xl">Jam: </h1>
                            </div>
                            <div>
                                <h1 class="text-xl col-span-2">{{ $data->date }}</h1>
                            </div>
                            <div>
                                <h1 class="text-xl">Field Type: </h1>
                            </div>
                            <div>
                                <h1 class="text-xl col-span-2">{{ $data->field->type }}</h1>
                            </div>
                            <div>
                                <h1 class="text-xl">Field Number: </h1>
                            </div>
                            <div>
                                <h1 class="text-xl col-span-2">{{ $data->field->number }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}
@endsection
