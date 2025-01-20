@extends('frontend.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card card-blog-single p-3 border-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('paket-travel') }}">Paket Travel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $travel_package->title }}</li>
                    </ol>
                </nav>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($travel_package->galleries as $gallery)
                        <div class="carousel-item active">
                            <img src="{{ Storage::url($gallery->image) }}" class="d-block w-100" alt="$gallery->image">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <h3 class="my-4">{{ $travel_package->title }}</h3>
                {!! $travel_package->description !!}
                <h3 class="my-4">Harga: Rp{{ $travel_package->price }}</h3>
                
                <div class="btn-group mt-4">
                    <a href="{{ route('travel.payment', $travel_package->slug) }}" target="_blank" class="btn btn-primary p-3">Liburan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection