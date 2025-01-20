@extends('frontend.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card card-blog-single p-3 border-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                    </ol>
                </nav>
                <img class="img-fluid" src="{{ Storage::url($post->thumbnail) }}" alt="">
                <h3 class="my-4">{{ $post->title }}</h3>
                {!!  $post->description !!}
            </div>
        </div>
    </div>

</div>
@endsection