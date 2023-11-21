@extends('layouts.app')

@section('content')
    <section class="py-36 px-32">
        <div class="w-full border-1 border-slate-800 rounded-lg p-4">
            <h2 class="text-slate-800 text-2xl font-bold mb-3">Detail Pesanan</h2>
            <p class="text-blue-800 text-lg font-semibold mb-3">{{ $payment->booking->user->name }}</p>
            <p class="text-blue-800 text-lg font-semibold mb-3">{{ $payment->booking->user->email }}</p>
            <p class="text-blue-800 text-lg font-semibold mb-3">{{ $payment->booking->field->name }}</p>
            <div class="flex justify-between items-center mb-3">
                <p class="text-blue-800 text-lg font-semibold">{{ $payment->booking->booking_date }}</p>
                <p class="text-blue-800 text-lg font-semibold">{{ date('H:i', strtotime($payment->booking->start_time)) }} - {{ date('H:i', strtotime($payment->booking->start_time) + $payment->booking->duration * 3600) }} WIB</p>
                <p class="text-blue-800 text-xl font-semibold">{{ $payment->booking->duration }} x {{ number_format($payment->booking->field->price, 2, ',', '.') }}</p>
            </div>
            <div class="w-full border-t border-slate-700 flex justify-between items-center py-3 mb-3">
                <p class="text-blue-800 text-lg font-bold">TOTAL</p>
                <p class="text-blue-800 text-xl font-bold">Rp. {{ number_format($payment->amount, 2, ',', '.') }}</p>
            </div>
            <button type="submit" id="pay-button" class="text-md font-semibold text-white bg-sky-800 py-2 px-4 rounded-2xl hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">ORDER</button>
        </div>
    </section>
    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            // alert("payment success!"); console.log(result);
            window.location.href = '/myticket/{{ $payment->id }}'
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
@endsection