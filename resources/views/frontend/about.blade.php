@extends('frontend.layout')

@section('content')
<div class="container mt-5">
    <div class="card card-hero-primary">
        <img src="{{ asset('frontend/assets/images/g.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-white card-hero position-absolute text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
            <h1 class="card-title card-title-hero">Tentang Kami</h1>
            <p class="card-text">Sejarah awal berdirinya perusahaan kami.</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card p-3 border-0">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/s.png') }}" alt="">
                <h3 class="mt-3">Tentang Kami</h3>
                <p>Selamat datang di TravelEase, platform perjalanan yang dirancang untuk membantu Anda menjelajahi destinasi terbaik di Indonesia. Kami percaya bahwa setiap perjalanan adalah pengalaman yang berharga, dan kami hadir untuk membuatnya lebih mudah, aman, dan menyenangkan.

TravelEase menyediakan berbagai pilihan paket wisata yang dapat disesuaikan dengan kebutuhan dan preferensi Anda. Kami bekerja sama dengan penyedia layanan terpercaya untuk memastikan perjalanan Anda berjalan lancar. Kami juga menyediakan informasi yang jelas dan rinci tentang setiap destinasi, sehingga Anda dapat membuat pilihan yang tepat sebelum memulai perjalanan.</p>
            </div>
        </div>
    </div>

</div>
@endsection