@extends('frontend.layout')

@section('content')
<div class="container mt-5">
    <div class="card card-hero-primary">
        <img src="{{ asset('frontend/assets/images/g.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-white card-hero position-absolute text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
                </ol>
            </nav>
            <h1 class="card-title card-title-hero">Blog</h1>
            <p class="card-text">Dapatkan Tips dan Trik dalam berwisata di Indonesia.</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <h3 class="text-center mb-4">Artikel Kami</h3>
        @foreach($posts as $post)
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