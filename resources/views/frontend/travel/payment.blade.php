@extends('frontend.layout')

@section('content')
<div class="container">
    <h2>{{ $travel_package->title }}</h2>
    <h3>Harga: Rp{{ $travel_package->price }}</h3>
    <form action="{{ url('/paket-travel/' . $travel_package->slug . '/payment/checkout') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="full_name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Hp</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="people" class="form-label">Jumlah Orang</label>
            <input type="number" min="0" max="10" class="form-control" id="people" name="people" required>
        </div>

        <div class="mb-3">
            <label for="travel-date" class="form-label">Tanggal Berangkat</label>
            <input type="date" class="form-control" id="date" name="travel_date" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Payment</button>
    </form>
</div>
@endsection
