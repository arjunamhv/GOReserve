@extends('admin.app')

@section('content')
    <h1 class="text-3xl font-bold m-5">Accounting</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 mx-5">
        <div class="col-span-1">
            <h1 class="text-xl m-5 mb-1">Statistik Keuangan</h1>
            <div class="stats md:stats-vertical stats-horizontal shadow m-5">
                <div class="stat">
                    <div class="stat-title">Total Pendapatan Mingguan</div>
                    <div class="stat-value my-1">{{ $totalAmountWeekly }}</div>
                    <div class="stat-desc">Since {{ $sevenDaysAgo }} Until now</div>
                </div>

                <div class="stat">
                    <div class="stat-title">Total Pendapatan Bulanan</div>
                    <div class="stat-value my-1">{{ $totalAmountMonthly }}</div>
                    <div class="stat-desc">Since {{ $aMonthAgo }} Until now</div>
                </div>
            </div>
        </div>
        <div class="col-span-1 md:col-span-2">
            <div class="p-6 m-5 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    <div class="p-5">
        <table class="table">
            <thead>
                <tr class="bg-base-200">
                    <th></th>
                    <th>Transaction id</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $transaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $payments->links() }}
    </div>
@endsection
