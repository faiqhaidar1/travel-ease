@extends('frontend.layout')

@section('content')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('frontend/assets/images/slide1.png') }}" class="d-block w-100" alt="slide 1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/assets/images/slide2.png') }}" class="d-block w-100" alt="slide 2">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
<div class="container mt-5">
    <div class="card card-hero-primary">
        <img src="{{ asset('frontend/assets/images/g.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-white card-hero position-absolute text-center">
            <h1 class="card-title card-title-hero">Indonesia</h1>
            <p class="card-text">Nikmati keindahan seluruh indonesia hanya dengan satu sentuhan.</p>
            <a href="{{ route('paket-travel') }}" class="btn btn-primary">Liburan Sekarang</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row mt-5">
        <h3 class="text-center mb-4">Paket Travel Indonesia</h3>
        @foreach ($travel_packages as $travel_package)
            <div class="col-lg-4 mb-5">
                <div class="card" style="border: none">
                    <img src="{{ Storage::url($travel_package->galleries->first()->image) }}" class="card-img-top" style="height: 400px;object-fit: cover;"
                        height="100" alt="{{ $travel_package->galleries->first()->title }}">
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
    <div class="row mt-5">
        <h3 class="text-center mb-4">Artikel Terbaru</h3>
        @foreach ($posts as $post)
        <div class="col-lg-4">
            <div class="card border-0 mb-3">
                <a href="{{ route('blog.show', $post->slug) }}" style="color: #111;text-decoration: none">
                    <img src="{{ Storage::url($post->thumbnail) }}" style="height: 500px;object-fit: cover;" class="card-img-top"
                        alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $post->title }}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
