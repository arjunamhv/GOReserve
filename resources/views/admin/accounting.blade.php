@extends('admin.app')

@section('content')
<h1 class="text-3xl font-bold m-5">Accounting</h1>
<h1 class="text-xl m-5 mb-1">Statistik Keuangan</h1>
<div class="stats stats-vertical lg:stats-horizontal shadow m-5">
    <div class="stat">
      <div class="stat-title">Total Pendapatan Mingguan</div>
      <div class="stat-value my-1">{{ $totalAmount }}</div>
      <div class="stat-desc">Since {{ $sevenDaysAgo }} Until now</div>
    </div>
    
    <div class="stat">
      <div class="stat-title">Total Pendapatan Bulanan</div>
      <div class="stat-value my-1">{{ $totalAmount }}</div>
      <div class="stat-desc">Since {{ $sevenDaysAgo }} Until now</div>
    </div>
  </div>
<div class="px-5">
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
</div>
@endsection
