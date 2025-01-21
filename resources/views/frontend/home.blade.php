<!-- resources/views/frontend/home.blade.php -->
@extends('frontend.layouts.navigation')

@section('content')
    <!-- Konten halaman lainnya -->

    {{-- <!-- Popup Modal -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h3>Login / Register</h3>

            <!-- Form Login -->
            <div id="loginForm">
                <form action="/login" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                <p class="text-center">Don't have an account? <a href="javascript:void(0);" onclick="switchToRegister()">Sign Up</a></p>
            </div>

            <!-- Form Register -->
            <div id="registerForm" style="display:none;">
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
                <p class="text-center">Already have an account? <a href="javascript:void(0);" onclick="switchToLogin()">Login</a></p>
            </div>
        </div>
    </div>
     --}}

     {{-- Open Header --}}
    <header>
        <div id="beranda" class="container py-5">
            <div class="content-header">
                <div class="text-header">
                    <div class="card-header">
                        <div class="card-body-header">
                            <h5>Explore the world! <span><i class="fa-solid fa-person-walking-luggage" style="color: #F85E9F;"></i></span> </h5>
                        </div>
                    </div>
                    <h1 class="mt-3">Tujuan <span class="text-pink"> utama perjalanan </span> 
                        dunia</h1>
                    <p>Dimana petualangan bertemu kenyamanan. <br> Kami menciptakan pengalaman perjalanan yang tak terlupakan</p>

                    <div class="class-button">
                        <div class="button-header-1">
                            <button>
                                <a href="#pilih-tujuan">Memulai</a>
                        </button>
                    </div>
                    <div class="button-header-2">
                        {{-- <button>
                            <a href=""> <span><i class="fa-solid fa-play" style="color:#5D50C6"></i></span> Tonton Demo</a>
                        </button> --}}
                    </div>
                </div>

            </div>
                <div class="hero-section-header">
                    <img src="{{ asset('image/hero-section-header.svg') }}" alt="">
                </div>
            </div>

            <div class="logo-header">
                <img src="{{ asset('icon/logo/Group 2.svg') }}" alt="">
                <img src="{{ asset('icon/logo/Group 3.svg') }}" alt="">
                <img src="{{ asset('icon/logo/Group 9235.svg') }}" alt="">
                <img src="{{ asset('icon/logo/Group-1.svg') }}" alt="">
                <img src="{{ asset('icon/logo/Group.svg') }}" alt="">
            </div>
        </div>
    </header>
     {{-- Close Header --}}

     {{-- Open Service --}}

    <div class="container py-5">
        <div class="content-serve">
            <div class="content-text-serve">
                <h2 class="text-pink">APA YANG KAMI LAYANI</h2>
                <h1>Nilai Tertinggi <br> Untukmu</h1>
                <p>Rangkullah keluasan hidup, <br> bertualanglah ke depan,</p>
            </div>
            <div class="content-card-serve">
            <div class="card-serve">
                <div class="card-body-serve">
                    <img src="{{ asset('icon/Features/Travel anywhere in the world with a suitcase.svg') }}" alt="">
                    <h5 class="mt-3">Banyak pilihan</h5>
                    <p class="mt-3">Rangkullah keluasan hidup,  bertualanglah ke depan,</p>
                </div>
            </div>

            <div class="card-serve">
                <div class="card-body-serve">
                    <img src="{{ asset('icon/Features/yellow paper airplane.svg') }}" alt="">
                    <h5 class="mt-3">Pemandu Wisata</h5>
                    <p class="mt-3">Rangkullah keluasan hidup,  bertualanglah ke depan,</p>
                </div>
            </div>

            <div class="card-serve">
                <div class="card-body-serve">
                    <img src="{{ asset('icon/Features/card.svg') }}" alt="">
                    <h5 class="mt-3">Pemesanan Mudah</h5>
                    <p class="mt-3">Rangkullah keluasan hidup,  bertualanglah ke depan,</p>
                </div>
            </div>
        </div>
        </div>
    </div>

     {{-- Close Service --}}

     {{-- Open Destinasi --}}

     {{-- <div class="container py-5">
        <div class="content-destinasi">
            <div class="content-text-destinasi">
                <p class="text-pink">Pilih tujuan Anda selanjutnya</p>
                <h1>Jelajahi tujuan teratas</h1>
            </div>
            <div class="button-slider-destinasi">
                <div class="button-destinasi-1">
                    <button onclick="moveSlide(-1)">
                        <i class="fa-solid fa-arrow-left" style="color: #5D50C6"></i>
                    </button>
                </div>
                <div class="button-destinasi-2">
                    <button onclick="moveSlide(1)">
                        <i class="fa-solid fa-arrow-right" style="color: #fff"></i>
                    </button>
                </div>
            </div>            
        </div>
    
        <div class="content-card-destinasi mt-3">
            <!-- Card Group 1 (Visible initially) -->
            <div class="card-container" id="group1">
                <div class="card-destinasi">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi 1</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan.</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()">Pelajari Lebih Lanjut</a>
                          </p>                          
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
                <div class="card-destinasi">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi 2</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan.</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()">Pelajari Lebih Lanjut</a>
                          </p>  
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
                <div class="card-destinasi">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi 3</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan.</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()">Pelajari Lebih Lanjut</a>
                          </p>  
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Card Group 2 (Initially hidden) -->
            <div class="card-container" id="group2" style="display: none;">
                <div class="card-destinasi">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi 4</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan.</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()">Pelajari Lebih Lanjut</a>
                          </p>  
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
                <div class="card-destinasi">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi 5</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan.</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()">Pelajari Lebih Lanjut</a>
                          </p>  
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
                <div class="card-destinasi">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi 6</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan.</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()">Pelajari Lebih Lanjut</a>
                          </p>  
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    

          <!-- Modal Login -->
          <div id="loginModal" class="modal">
             <div class="modal-content">
               <span class="close" onclick="closeLoginModal()">&times;</span>
               <h2>Login Dulu!</h2>
            <p>Untuk melanjutkan, Anda harus login terlebih dahulu.</p>
            <a href="/login" class="btn btn-primary">Login</a>
        </div>
    </div>

     
     {{-- Open Top Destinasi --}}
     
    <div id="pilih-tujuan" class="container py-5">
         <!-- Content Section -->
         <div class="content-menu-judul-destinasi">
             <!-- Title Section -->
          <div class="content-text-top-destinasi">
            <p class="text-pink">Tujuan Teratas</p>
            <h1 class="font-bold">Jelajahi tujuan teratas</h1>
          </div>
          
      
          <!-- Menu Category Section -->
          {{-- <div class="menu-category">
            <button class="menu-btn active" onclick="filterCategory('all')">Lihat Semua</button>
            <button class="menu-btn" onclick="filterCategory('city')">Kota</button>
            <button class="menu-btn" onclick="filterCategory('mountain')">Gunung</button>
            <button class="menu-btn" onclick="filterCategory('forest')">Hutan</button>
            <button class="menu-btn" onclick="filterCategory('island')">Pulau</button>
        </div> --}}
    </div>
    <div class="tujuan">
    @foreach ($travel_packages as $travel_package)
        <div class="tujuan-flex col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ Storage::url($travel_package->galleries->first()->image) }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="{{ $travel_package->galleries->first()->title }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $travel_package->title }}</h5>
                </div>
                <div class="card-footer bg-transparent d-flex justify-content-center p-0">
                    <a href="{{ route('travel.detail', $travel_package->slug) }}" class="btn btn-primary w-100">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
   

    
    <!-- Destination Cards Section -->
    <div class="content-card-destinasi-top">
        
        <!-- Card 1 -->
        {{-- <div class="content-card-destinasi">
            <div class="card-destinasi" data-category="city">
                <div class="rating">
                    <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                </div>
                <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                <div class="card-body-destinasi">
                    <h3>Judul Destinasi</h3>
                    <p class="text-description">
                        Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                        <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan...</span>
                        <a href="javascript:void(0);" class="learn-more" onclick="toggleText()"><span>Pelajari Lebih Lanjut</span></a>
                    </p>
                <div class="button-destinasi mt-2">
                    <div class="price">Rp 1.500.000</div>
                    <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Card 2 -->
    <div class="content-card-destinasi">
        <div class="card-destinasi" data-category="mountain">
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
            </div>
            <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
            <div class="card-body-destinasi">
                <h3>Judul Destinasi</h3>
                <p class="text-description">
                    Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                    <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan...</span>
                    <a href="javascript:void(0);" class="learn-more" onclick="toggleText()"><span>Pelajari Lebih Lanjut</span></a>
                </p>
                <div class="button-destinasi mt-2">
                    <div class="price">Rp 1.500.000</div>
                    <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                </div>
            </div>
            </div>
          </div>
      
          <!-- Card 3 -->
          <div class="content-card-destinasi">
              <div class="card-destinasi" data-category="forest">
                  <div class="rating">
                      <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan...</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()"><span>Pelajari Lebih Lanjut</span></a>
                        </p>
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="content-card-destinasi">
                <div class="card-destinasi" data-category="island">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                    </div>
                    <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                    <div class="card-body-destinasi">
                        <h3>Judul Destinasi</h3>
                        <p class="text-description">
                            Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                            <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan...</span>
                            <a href="javascript:void(0);" class="learn-more" onclick="toggleText()"><span>Pelajari Lebih Lanjut</span></a>
                        </p>
                        <div class="button-destinasi mt-2">
                            <div class="price">Rp 1.500.000</div>
                            <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="content-card-destinasi">
                <div class="card-destinasi" data-category="island">
                    <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
              </div>
              <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
              <div class="card-body-destinasi">
                  <h3>Judul Destinasi</h3>
                  <p class="text-description">
                      Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                      <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan...</span>
                      <a href="javascript:void(0);" class="learn-more" onclick="toggleText()"><span>Pelajari Lebih Lanjut</span></a>
                    </p>
                    <div class="button-destinasi mt-2">
                        <div class="price">Rp 1.500.000</div>
                        <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="content-card-destinasi">
            <div class="card-destinasi" data-category="island">
                <div class="rating">
                    <i class="fa-solid fa-star" style="color: #FFCD6B;"></i> 5.0
                </div>
                <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                <div class="card-body-destinasi">
                    <h3>Judul Destinasi</h3>
                    <p class="text-description">
                        Destinasi ini menawarkan pengalaman yang luar biasa untuk Anda yang ingin menjelajahi keindahan alam. 
                        <span class="more-text">Kami menyediakan berbagai pilihan kegiatan, termasuk hiking, berkemah, dan eksplorasi alam liar. Rasakan pengalaman tak terlupakan dengan pemandangan indah dan udara segar yang menyejukkan...</span>
                        <a href="javascript:void(0);" class="learn-more" onclick="toggleText()"><span>Pelajari Lebih Lanjut</span></a>
                    </p>
                    <div class="button-destinasi mt-2">
                        <div class="price">Rp 1.500.000</div>
                        <a href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()">Lihat lebih banyak</a>
                    </div>
              </div>
            </div>
        </div> --}}
        
    </div>



    {{-- Close Top Destinasi --}}

    {{-- Open Service Section --}}
    
    <div id="tentang-kami" class="container py-3">
       <div class="content-service-section">
           <div class="hero-img">
               <img src="{{ asset('image/hero-02.svg') }}" alt="">
           </div>
           <div class="content-text-service-section">
               <h5 class="text-pink">KAMI ADALAH YANG TERBAIK UNTUK ANDA</h5>
               <h1 class="font-bold">Buka Tujuan Impian Anda</h1>
               <p>Kami berdedikasi untuk membuat perjalanan penemuan Anda benar-benar tak terlupakan. Tim pakar perjalanan kami yang penuh semangat siap membantu Anda menemukan destinasi impian Anda.</p>
               
               <div class="content-card-service-section">
            
                   <div class="card-service-section">
                       <div class="card-body-service-section">
                           <h1 class="text-pink">4k+</h1>
                           <p>Pelanggan yang Puas</p>
                       </div>
                   </div>
               
                   <div class="card-service-section">
                       <div class="card-body-service-section">
                           <h1 class="text-pink">100+</h1>
                           <p>Tujuan Global</p>
                       </div>
                   </div>
               </div>
           
               <div class="content-card-service-section" style="margin-top: 10%">
            
                   <div class="card-service-section">
                       <div class="card-body-service-section">
                           <h1 class="text-pink">24/7</h1>
                           <p>Dukungan Pelanggan</p>
                       </div>
                   </div>
               
                   <div class="card-service-section">
                       <div class="card-body-service-section">
                           <h1 class="text-pink">100+</h1>
                           <p>Dedikasi</p>
                       </div>
                   </div>
               </div>
           
           </div>
       </div>
    </div>
    
    {{-- Close Service Section --}}
    
    {{-- Open Experience --}}

    <div class="container py-3">
        {{-- <div class="content-service-section">
            <div class="content-text-service-section">
                <h5 class="text-pink">Pengalaman Kami</h5>
                <h1 class="font-bold">Menciptakan Petualangan yang Tak Terlupakan</h1>
                <p class="mt-4">Kami unggul dalam mengatur perjalanan luar biasa, dengan spesialisasi destinasi luar ruangan di seluruh dunia. Dengan segudang pengalaman, kami menghidupkan petualangan dan mengundang Anda untuk memulai petualangan Anda sendiri. Panggilan alam menanti—mulai petualangan Anda hari ini!</p>

                <div class="content-card-experience">

                            <div class="card-experience">
                                <div class="card-body-experience">
                                    <h1 class="text-pink text-start">1,000+</h1>
                                    <p class="text-start">tujuan luar ruangan</p>
                                </div>
                            </div>
                        
                            <div class="card-experience">
                                <div class="card-body-experience">
                                    <h1 class="text-pink text-start">98%</h1>
                                    <p class="text-start">kepuasan pelanggan</p>
                                </div>
                            </div>

                            <div class="card-experience">
                                <div class="card-body-experience">
                                    <h1 class="text-pink text-start">15+</h1>
                                    <p class="text-start">Pengalaman Bertahun-tahun</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="hero-img-experience">
                        <img src="{{ asset('image/pixeltrue-location-1.svg') }}" alt="">
                    </div>
                </div> --}}
             </div>

         {{-- Close Experience --}}

         {{-- Travel  --}}

         {{-- <div class="container">
             <div class="content-text-pemandu">
                 <h1 class="font-bold">Temui Pemandu Tur <br> Ahli Kami</h1>
                    <p>Perjalanan kami diperkaya oleh tim pemandu wisata <br> berpengalaman kami. Pemandu kami menghidupkan <br> petualangan Anda dengan keahlian dan semangat mereka</p>
                </div>
                <div class="content-pemandu-travel">
                <div class="content-img-pemandu">
                    <div class="content-card-pemandu">
                        <div class="card-pemandu" data-category="island">
                          <div class="rating">
                            <i class="fa-solid fa-location-dot"></i> <span class="">Bogor, indonesia</span>
                          </div>
                          <img src="{{ asset('image/destinasi/Rectangle 1434-1.svg') }}" alt="Destinasi Travel">
                        </div>
                      </div>
                </div>

                <div class="card-pemandu-travel" style="margin-top: -10%">
                    <div class="card-body-pemandu-travel">
                        <img src="{{ asset('icon/icon-hand.svg') }}" alt="">
                        <div class="text-card-pemandu-travel">
                            <h1>Keahlian</h1>
                            <p>Pemandu kami ahli di bidangnya, memastikan pengetahuan dan wawasan mendalam tentang setiap destinasi.</p>
                        </div>
                    </div>

                    <span class="hr-card">
                        <hr>
                    </span>

                    <div class="card-pemandu-travel">
                        <div class="card-body-pemandu-travel">
                            <img src="{{ asset('icon/icon-love.svg') }}" alt="">
                            <div class="text-card-pemandu-travel">
                                <h1>Gairah</h1>
                                <p>Mereka bersemangat tentang perjalanan, budaya, dan sejarah, membuat perjalanan Anda menarik dan menawan.</p>
                            </div>
                        </div>
                    </div>

                    <span class="hr-card">
                        <hr>
                    </span>

                    <div class="card-pemandu-travel">
                        <div class="card-body-pemandu-travel">
                            <img src="{{ asset('icon/icon-arrow.svg') }}" alt="">
                            <div class="text-card-pemandu-travel">
                                <h1>Dedikasi</h1>
                                <p>Pemandu kami berdedikasi untuk memberikan layanan luar biasa dan memastikan kenangan perjalanan Anda benar-benar tak terlupakan.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>  --}}

        {{-- Close Pemandu Travel --}}

        {{-- Open Contact --}}

        <div id="contact-us" class="container py-5">
            <div class="bg-contact justify-center text-center">
                {{-- <div class="img-icon-pesawat">
                    <img class="img-pesawat" src="{{ asset('image/pesawat.svg') }}" alt="">
                </div>
                <h1 class="">Daftar dan nikmati manfaat eksklusif!</h1>
                <div class="img-icon-location">
                    <img class="img-location" src="{{ asset('image/location.svg') }}" alt="">
                </div> --}}
               <div class="contact-container">
        <!-- Card Sosial Media -->
        <div class="social-media-card">
            <h2>Follow Us</h2>
            <div class="button-contact">
                <button>
                    <a href="https://wa.me/yourNumber" target="_blank" rel="noopener">
                        WhatsApp <span><i class="fa-brands fa-whatsapp"></i></span>
                    </a>
                </button>
                <button>
                    <a href="mailto:ease@travel.com" target="_blank" rel="noopener">
                        Email <span><i class="fa-regular fa-envelope"></i></span>
                    </a>
                </button>
                <button>
                    <a href="https://www.instagram.com/emptyset0.00sec" target="_blank" rel="noopener">
                        Instagram <span><i class="fa-brands fa-instagram"></i></span>
                    </a>
                </button>
                <button>
                    <a href="https://www.tiktok.com/@mikeypro526" target="_blank" rel="noopener">
                        TikTok <span><i class="fa-brands fa-tiktok"></i></span>
                    </a>
                </button>
            </div>
        </div>

        <!-- Input Contact Form -->
        {{-- <div class="input-contact">
            <h3>Contact Us</h3>
            <form action="/submit-contact" method="POST">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukan nama anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukan email anda" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" placeholder="Masukan pesan & kesan anda" rows="4" required></textarea>
                </div>
                <button href="javascript:void(0);" class="checkout-button" onclick="showLoginModal()" type="submit">Send Message</button>
            </form>
        </div> --}}
        </div>
    
    </div>
    </div>

        {{-- Close Contact --}}

    


@endsection
