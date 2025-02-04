@extends('frontend.layouts.navigation')

@section('content')
<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="{{ config('midtrans.client_key') }}"></script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

<div class="container mt-5">
    <h2 class="mb-4 text-center">{{ $travel_package->title }}</h2>
    <h3 class="mb-4 text-center">Harga: Rp{{ number_format($order->total_price, 0, ',', '.') }}</h3>
    
    <div class="card p-4 border-0 shadow">
        <h4>Detail Pesanan</h4>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Nama Lengkap</th>
                    <td>{{ $order->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Alamat Email</th>
                    <td>{{ $order->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Nomor Hp</th>
                    <td>{{ $order->phone }}</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Orang</th>
                    <td>{{ $order->people }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Berangkat</th>
                    <td>{{ $order->travel_date }}</td>
                </tr>
                <tr>
                    <th scope="row">Total Harga</th>
                    <td>Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        
        <div class="text-center">
            <button class="btn btn-primary px-4 py-3" id="pay-button">Booking Sekarang</button>
        </div>
    </div>
</div>

<div id="snap-container" class="d-flex justify-content-center mt-4">
  <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
        // Also, use the embedId that you defined in the div above, here.
        window.snap.embed('{{ $snapToken }}', {
          embedId: 'snap-container',
          onSuccess: function (result) {
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
          },
          onPending: function (result) {
            /* You may add your own implementation here */
            alert("waiting your payment!"); console.log(result);
          },
          onError: function (result) {
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function () {
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        });
      });
  </script>
</div>

@endsection
