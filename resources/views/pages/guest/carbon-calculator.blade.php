@extends('layouts.guest')
 
@section('content')

<section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/banner-visimisi.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">Kalkulator Karbon</h1>
                    </div>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="/">
                                <span>Beranda</span>
                            </a>
                        </span>
                        <i class="fa-light fa-angle-right"></i>
                        <span>
                            <span>Kalkulator Karbon</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section-three">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-7 col-12 order-2 order-xl-1">
             <div class="about-content-three">
                <div class="tj-sec-heading-three">
                   <span class="sub-title">Carbon Footprint</span>
                   <h2 class="title">
                    Kalkulator Karbon Gratis
                      <span>Untuk Perorangan dan Usaha Kecil</span>
                   </h2>
                   <div class="desc">
                      <p>
                        Pilih jenis kalkulator yang Anda butuhkan
                      </p>
                   </div>
                </div>
                <div class="about-feature-item">
                   <div class="feature-content"> 
                      <div class="feature-text">
                         <h5 class="title"><a href="https://www.carbonfootprint.com/calculator.aspx" target="blank">Perorangan</a></h5>
                         <span class="sub-title">Kalkulator online gratis - rata-rata jejak karbon per tahun adalah 6,5 ton per orang (Inggris); 11 ton per orang untuk negara industri lainnya</span>
                      </div>
                   </div>
                   <div class="feature-content"> 
                      <div class="feature-text">
                         <h5 class="title"><a href="https://www.carbonfootprint.com/small_business_calculator.html">Usaha Kecil</a></h5>
                         <span class="sub-title">Kalkulator karbon online yang mudah digunakan - memungkinkan Anda menyimpan hasil dan mengunduh laporan</span>
                      </div>
                   </div>
                </div> 
             </div>
          </div>
          <div class="col-xl-5 col-12 order-1 order-xl-2">
             <div class="about-image-group-three">
                <div class="about-top-image">
                   <img src="{{ asset('storage/assets/images/logos/carbonfootprintlogo.png') }}" alt="Images">
                </div>  
                <div class="shape-one">
                   <img src="assets/images/shape/about-shape-1.svg" alt="Shape">
                </div>
                <div class="shape-two">
                   <img src="assets/images/shape/about-shape-2.svg" alt="Shape">
                </div>
                <div class="shape-three">
                   <img src="assets/images/shape/about-shape-3.svg" alt="Shape">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="about-top-shape">
       <img src="assets/images/shape/about-shape-4.svg" alt="Shape">
    </div>
 </section>
@endsection