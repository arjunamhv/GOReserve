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
        @foreach ($bookings as $booking)
        <div class="carousel-item px-5">
            <div class="card bg-base-200 shadow-xl">
                <p class="card-title p-5 pb-1">Booking id: {{ $booking->id }} <span class="badge badge-sm badge-neutral">{{ $booking->status }}</span></p>
                <div class="grid grid-cols-12 p-5 pt-1">
                    <div class="col-span-5">
                        <p>Nama Pemesan</p>
                    </div>
                    <div class="col-span-1">
                        <p>:</p>
                    </div>
                    <div class="col-span-6">
                        <p>{{ $booking->user->name }}</p>
                    </div>
                    <div class="col-span-5">
                        <p>Tanggal</p>
                    </div>
                    <div class="col-span-1">
                        <p>:</p>
                    </div>
                    <div class="col-span-6">
                        <p>{{ (new DateTime($booking->booking_date))->format('l, d F') }}</p>
                    </div>
                    <div class="col-span-5">
                        <p>Jam</p>
                    </div>
                    <div class="col-span-1">
                        <p>:</p>
                    </div>
                    <div class="col-span-6">
                        <p>{{ $booking->start_time }}</p>
                    </div>
                    <div class="col-span-5">
                        <p>Durasi</p>
                    </div>
                    <div class="col-span-1">
                        <p>:</p>
                    </div>
                    <div class="col-span-1">
                        <p>{{ $booking->duration }}</p>
                    </div>
                    <div class="col-span-5">
                        <p>jam</p>
                    </div>
                    <div class="col-span-5">
                        <p>Field Type</p>
                    </div>
                    <div class="col-span-1">
                        <p>:</p>
                    </div>
                    <div class="col-span-6">
                        <p>{{ $booking->field_type}}</p>
                    </div>
                    <div class="col-span-5">
                        <p>Field Name</p>
                    </div>
                    <div class="col-span-1">
                        <p>:</p>
                    </div>
                    <div class="col-span-6">
                        <p>{{ $booking->field->name}}</p>
                    </div>
                </div>
                <div class="card-actions justify-end">
                    <a href="{{ route('scan') }}" class="btn btn-primary mb-5 mr-5">Check in</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h1 class="text-xl m-5 mb-1">Statistik Keuangan</h1>
    <div class="stats stats-vertical lg:stats-horizontal shadow m-5">
        <div class="stat">
          <div class="stat-title">Total Pendapatan</div>
          <div class="stat-value my-1">{{ $totalAmount }}</div>
          <div class="stat-desc">Since {{ $sevenDaysAgo }} Until now</div>
        </div>
        
        <div class="stat">
          <div class="stat-title">Total Transaksi</div>
          <div class="stat-value my-1">{{ $totalTransaksi }}</div>
          <div class="stat-desc">Transction Count</div>
        </div>
      </div>

    <h1 class="text-xl m-5 mb-1">Statistik Pengunjung</h1>
    <div class="p-6 m-5 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
