@extends('frontend.layout')

@section('content')
<div class="container mt-5">
    <div class="card card-hero-primary">
        <img src="{{ asset('frontend/assets/images/g.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-white card-hero position-absolute text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Paket Travel</li>
                </ol>
            </nav>
            <h1 class="card-title card-title-hero">Paket Travel</h1>
            <p class="card-text">Semua daftar paket travel yang kami sediakan.</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row mt-5">
        <h3 class="text-center mb-4">Paket Travel Indonesia</h3>
        @foreach ($travel_packages as $travel_package)
        <div class="col-lg-4 mb-5">
            <div class="card" style="border: none">
                <img src="{{ Storage::url($travel_package->galleries->first()->image) }}" style="height: 400px;object-fit: cover;" class="card-img-top"
                    alt="{{ $travel_package->galleries->first()->title }}">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ $travel_package->title }}</h4>
                </div>
                <div class="card-body d-block p-0 mx-auto w-75">
                    <a href="{{ route('travel.detail', $travel_package->slug) }}" class="d-block mb-3 card-link btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection