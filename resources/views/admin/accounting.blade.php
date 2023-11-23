@extends('admin.app')

@section('content')
    <h1 class="text-3xl font-bold m-5">Accounting</h1>
    <div class="px-5">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Transaction</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $transaction)    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
