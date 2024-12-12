@extends('layouts.guest')

@section('content')
    <section class="tj-slider-section">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('assets/images/banner/banner1.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">ACEXI</h1>
                            <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        ASSOCIATION OF CARBON EMISSION EXPERTS INDONESIA
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="contact.html">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('assets/images/banner/banner2.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Harnessing The Wind</h1>
                            <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered form, passage.
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="contact.html">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('assets/images/banner/banner3.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Harnessing The Wind</h1>
                            <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered form, passage.
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="contact.html">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="slider-sec-shape">
            <img src="assets/images/shape/hero-shape.svg" alt="Shape" />
        </div>
        <div class="tj-service-item">
            <ul class="dot-style">
                <li>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-solar-panel"></i>
                        </div>
                        <div class="service-text">
                            <h5 class="title">Number #1</h5>
                            <span class="sub-title">Best Renewable Solar</span>
                        </div>
                        <div class="item-shape">
                            <img src="assets/images/shape/service-1.svg" alt="Shape" />
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-solar-energy"></i>
                        </div>
                        <div class="service-text">
                            <h5 class="title">3,480+mw</h5>
                            <span class="sub-title">Installed Will Capacity</span>
                        </div>
                        <div class="item-shape">
                            <img src="assets/images/shape/service-1.svg" alt="Shape" />
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="flaticon-battery"></i>
                        </div>
                        <div class="service-text">
                            <h5 class="title">25900+</h5>
                            <span class="sub-title">Total WTGS Installed</span>
                        </div>
                        <div class="item-shape">
                            <img src="assets/images/shape/service-1.svg" alt="Shape" />
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="tj-about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="about-content-one">
                        <div class="tj-sec-heading">
                            {{-- <span class="sub-title">Tentang Kami</span> --}}
                            <h2 class="sec-title">
                                Tentang Kami
                            </h2>
                            <div class="desc">
                                <p>
                                    Kami dengan bangga mempersembahkan diri sebagai lembaga yang memimpin perubahan dalam mengatasi permasalahan emisi karbon di Indonesia. Di sini, kami menggali solusi inovatif, melakukan penelitian mendalam, dan mengedukasi masyarakat tentang pentingnya mengurangi emisi karbon untuk menjaga lingkungan hidup yang sehat dan berkelanjutan. Kami percaya bahwa dengan kolaborasi antara para ahli, pemangku kepentingan, dan masyarakat luas, kita dapat mencapai tujuan bersama dalam menghadapi perubahan iklim global. Jelajahi situs kami untuk mengetahui lebih lanjut tentang proyek-proyek terkini, riset terbaru, dan inisiatif pendidikan yang sedang kami jalankan.
                                </p>
                            </div>
                        </div>
                        <div class="fun-fact-area">
                            <div class="counter-item">
                                <div class="about-icon">
                                    <i class="flaticon-solar-panel-1"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count">
                                        <span class="odometer" data-count="14000">0</span>+
                                    </div>
                                    <span class="sub-title">Installed Capacity</span>
                                </div>
                            </div>
                            <div class="counter-item">
                                <div class="about-icon">
                                    <i class="flaticon-solar-cell"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="70">0</span>%</div>
                                    <span class="sub-title">Save World</span>
                                </div>
                            </div>
                        </div>
                        <div class="tj-about-button d-flex">
                            <a class="tj-primary-btn btn" href="about-us.html">
                                Read More <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-lg-image">
                            <img src="{{ asset('assets/images/banner/Visi Misi.jpg') }}" alt="Image" />
                            {{-- <div class="about-circle">
                                <div class="video-play">
                                    <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                        <i class="fa-solid fa-play"></i>
                                        <svg class="shape-1" viewBox="0 0 100 100" width="150" height="100">
                                            <defs>
                                                <path id="circle" d="
                                                              M 50, 50
                                                              m -37, 0
                                                              a 37,37 0 1,1 74,0
                                                              a 37,37 0 1,1 -74,0" />
                                            </defs>
                                            <text font-size="16">
                                                <textPath xlink:href="#circle" class="shape-1">
                                                    Solar Energy . Solar Energy .
                                                </textPath>
                                            </text>
                                        </svg>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="about-experience">
                            <div class="about-icon">
                                <i class="flaticon-experience-1"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="25">0</span>+</div>
                                <span class="sub-title">Years Experience</span>
                            </div>
                            <div class="about-shape">
                                <img src="assets/images/shape/service-1.svg" alt="Shape" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-shape">
            <img src="assets/images/shape/service-1.svg" alt="Shape" />
        </div>
    </section>
    <!--=========== About Section End =========-->

    <!--=========== Service Section Start =========-->
    <section class="tj-service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Tujuan Utama Kami</span>
                        <h2 class="sec-title">
                            Perkumpulan Ahli Emisi Karbon untuk <br />
                            <span>Dunia yang Lebih Hijau</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-environmental"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Hydropower Plants</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-save-energy"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Fossil Resources</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-hydropower"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Maximize Green Resources</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-green-energy"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Future with Green Energy</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Service Section End =========-->

    <!--=========== Counter Section Start =========-->
    <section class="tj-counter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="counter-content-area">
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-experience"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="48">0</span>+</div>
                                <span class="sub-title">Jumlah Pakar</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-completed-task"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="239">0</span>+</div>
                                <span class="sub-title">Jumlah Pengurus</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="230">0</span>+</div>
                                <span class="sub-title">Jumlah Anggota</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-timeline"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="20">0</span>+</div>
                                <span class="sub-title">Jumlah Mitra</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="counter-wrapper">
                        <img src="{{ asset('assets/images/banner/our-team-banner.jpg') }}" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Counter Section End =========-->

    <!--=========== Process Section Start =========-->
    <section class="tj-process-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Aktivitas Kami</span>
                        <h2 class="sec-title">
                            Mewujudkan Masa Depan Hijau melalui Kolaborasi dan Aksi Nyata
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tj-process-item">
                        <img src="assets/images/project/process-1.jpg" alt="Image" />
                        <div class="process-content">
                            <div class="process-icon">
                                <i class="flaticon-renewable-energy"></i>
                            </div>
                            <div class="process-title">
                                <h5 class="title">Carbon Offsetting</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-process-item">
                        <img src="assets/images/project/process-2.jpg" alt="Image" />
                        <div class="process-content">
                            <div class="process-icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <div class="process-title">
                                <h5 class="title">Research & Analysis</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-process-item">
                        <img src="assets/images/project/process-3.jpg" alt="Image" />
                        <div class="process-content">
                            <div class="process-icon">
                                <i class="flaticon-solar-energy-2"></i>
                            </div>
                            <div class="process-title">
                                <h5 class="title">Renewable Energy</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Process Section End =========-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content-area">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Pakar</span>
                            <h2 class="sec-title">
                                Kolaborasi, Dedikasi, dan Aksi 
                                 <br />
                                <span>untuk Hijaukan Dunia 
                                </span>
                            </h2>
                        </div>
                        {{-- <div class="right-content">
                            <p>
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse fugiat quo
                                voluptas nulla pariatur?"
                            </p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="assets/images/team/team-1.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Albert Flores</h5>
                                <span class="sub-title">Technician</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="assets/images/team/team-2.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Leslie Alexan</h5>
                                <span class="sub-title">Solar Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="assets/images/team/team-3.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Sony Miltar</h5>
                                <span class="sub-title">Solar Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="assets/images/team/team-4.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Marko Daniel</h5>
                                <span class="sub-title">Wind Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->

    <!--=========== Testimonial Section Start =========-->
    <section class="tj-testimonial-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="tj-sec-heading">
                        <span class="sub-title">Testimonial</span>
                        <h2 class="sec-title">
                            {{-- Check Our Clients <br /> --}}
                            <span>Umpan Balik</span>
                        </h2>
                    </div>
                    <div class="swiper tj-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="desc">
                                        <p>
                                            Asosiasi ini adalah mitra strategis yang menggabungkan keahlian, dedikasi, dan visi untuk menciptakan solusi berkelanjutan. Dengan tim profesional yang memiliki keahlian di berbagai bidang seperti energi terbarukan, pengelolaan karbon, hingga penerapan prinsip ESG, mereka memberikan pendekatan holistik terhadap tantangan lingkungan. Setiap proyek yang dikerjakan mencerminkan komitmen mereka untuk masa depan yang lebih hijau dan inklusif.
                                        </p>
                                    </div>
                                    <div class="testimonial-auother">
                                        <div class="auother-image">
                                            <img src="assets/images/testimonial/testi-small-1.png" alt="Image" />
                                        </div>
                                        <div class="auother-header">
                                            <h5 class="title">
                                                Dewan pengawas  
                                                {{-- <span class="active-text">Thomas</span> --}}
                                            </h5>
                                            {{-- <span class="sub-title">Manager</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="desc">
                                        <p>
                                            ‘’Lorem Ipsum is not simply random text. It has roots in a piece of
                                            classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden’’
                                        </p>
                                    </div>
                                    <div class="testimonial-auother">
                                        <div class="auother-image">
                                            <img src="assets/images/testimonial/testi-small-2.png" alt="Image" />
                                        </div>
                                        <div class="auother-header">
                                            <h5 class="title">
                                                Richard <span class="active-text">Thomas</span>
                                            </h5>
                                            <span class="sub-title">Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="desc">
                                        <p>
                                            ‘’Lorem Ipsum is not simply random text. It has roots in a piece of
                                            classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden’’
                                        </p>
                                    </div>
                                    <div class="testimonial-auother">
                                        <div class="auother-image">
                                            <img src="assets/images/testimonial/testi-small-3.png" alt="Image" />
                                        </div>
                                        <div class="auother-header">
                                            <h5 class="title">
                                                Richard <span class="active-text">Thomas</span>
                                            </h5>
                                            <span class="sub-title">Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-navigation">
                            <div class="testimonial-prev"><i class="flaticon-right-arrow"></i></div>
                            <div class="testimonial-next">
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-wrapper">
                        <div class="swiper tj-testimonial-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="assets/images/testimonial/testi-big-1.jpg" alt="Image" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="assets/images/testimonial/testi-big-2.jpg" alt="Image" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="assets/images/testimonial/testi-big-3.jpg" alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <img src="assets/images/icon/test-quote.svg" alt="Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <!--=========== Faq Section Start =========-->
    <section class="tj-faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-four text-center">
                        <span class="sub-title">FAQ</span>
                        <h2 class="sec-title">Pertanyaan yang Sering<span>Diajukan</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="ItemOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa yang dimaksud dengan Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>Ahli Emisi Karbon Expert Indonesia adalah profesional yang memiliki pengetahuan mendalam tentang emisi karbon, praktik keberlanjutan, dan solusi untuk mengurangi dampak lingkungan. Mereka membantu perusahaan dan organisasi untuk mengelola dan mengurangi jejak karbon mereka.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa saja layanan yang dapat diberikan oleh Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>Ahli Emisi Karbon Expert Indonesia menyediakan berbagai layanan, termasuk penilaian emisi karbon, konsultasi keberlanjutan, dan pengembangan strategi hijau untuk membantu klien mengurangi dampak lingkungan mereka.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah Ahli Emisi Karbon Expert Indonesia juga memberikan pelatihan atau workshop?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>Ya, Ahli Emisi Karbon Expert Indonesia menyelenggarakan pelatihan dan workshop untuk membantu individu dan organisasi memahami praktik keberlanjutan, mengukur emisi karbon, dan mengembangkan solusi berkelanjutan.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="ItemTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Bagaimana caranya untuk bergabung menjadi anggota ACEXI?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>Anda bisa mendaftar dengan mengisi formulir yang sudah kami sediakan di halaman Anggota, atau bisa melalui link berikut</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana saya dapat menjadi Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>Untuk menjadi Ahli Emisi Karbon Expert Indonesia, Anda perlu memiliki pendidikan dan pengalaman yang relevan dalam bidang keberlanjutan, emisi karbon, atau disiplin ilmu terkait. Selain itu, sertifikasi atau pelatihan tambahan dapat menjadi nilai tambah.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Bagaimana perusahaan atau organisasi dapat bekerja sama dengan Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>Perusahaan atau organisasi yang ingin bekerja sama dengan Ahli Emisi Karbon Expert Indonesia dapat menghubungi kami melalui formulir kontak di situs web atau melalui email. Kami akan segera merespons permintaan Anda.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
