@extends('frontend.layouts.navigation')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card card-blog-single p-4 border-0 shadow-sm">
                <!-- Breadcrumb -->
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                    </ol>
                </nav> --}}

                <!-- Image -->
                <div class="mb-4">
                    <img class="img-fluid" src="{{ Storage::url($post->thumbnail) }}" alt="">
                </div>

                <!-- Title and Description -->
                <h3 class="my-4 text-center">{{ $post->title }}</h3>
                <div class="description">{!! $post->description !!}</div>
            </div>
        </div>
    </div>
</div>
@endsection
