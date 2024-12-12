<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>{{ $title ?? 'ACEXI' }}</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logos/icon.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logos/icon.png') }}" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_solar_plus.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<body>
    <!-- Preloader start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
                <div class="loader-icon">
                    <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Solar & Renewable Energy HTML Template" />
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading"> A </span>
                <span data-text-preloader="C" class="letters-loading"> C </span>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="X" class="letters-loading"> X </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
            </div>
        </div> 
    </div>
    <!-- Preloader end -->

    <!-- start: Offcanvas Area -->
    <div id="tj-overlay-bg" class="tj-overlay-canvas"></div>
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="index.html"><img src="assets/images/logos/main-logo.png" alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
    </div>
    <!-- end: Offcanvas Area -->

    <!-- start: Header Area -->
    <header class="tj-header-area header-absolute header-1">
        <div class="tj-header-topbar-area" style="margin-bottom: 20px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-content-area">
                            <div class="header-info">
                                <ul>
                                    <li><i class="flaticon-email"></i>info@acexi.org</li>
                                    <li>
                                        <i class="fa-brands fa-whatsapp"></i><a href="tel:+6288290222512">0882-9022-2512 (Giordano)</a>, <a href="tel:+6281357447828">0813-5744-7828 (Fresti)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-share">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tj-bottom-content-area" style="padding-bottom: 20px; !important">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-content-area">
                            <div class="menu-area" style="gap:0;">
                                <div class="logo-area">
                                    <a href="index.html"><img src="{{ asset('assets/images/logos/main-logo.png') }}" alt="Logo" /></a>
                                </div>
                            </div>
                            <div class="info-right-item">
                                <div class="tj-menu-area d-lg-block d-none">
                                    <nav>
                                        <ul style="gap: 25px">
                                            <li class="unix-beranda">
                                                <a href="{{ route('beranda') }}">Beranda</a>
                                            </li>
                                            <li class="unix-tentang-kami has-dropdown">
                                                <a href="#">Tentang Kami</a>
                                                <ul class="sub-menu">
                                                    <li class="unix-profil"><a href="{{ route('tentang-kami.profil') }}">Profil</a></li>
                                                    <li class="unix-visi-misi"><a href="{{ route('tentang-kami.visi-misi') }}">Visi & Misi</a></li>
                                                    <li class="unix-struktur-pengurus has-dropdown">
                                                        <a href="#">Struktur Pengurus</a>
                                                        <ul class="sub-menu">
                                                            <li class="unix-dewan-kehormatan"><a href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Kehormatan, Penasihat, Pembina, Pendiri, Pakar</a></li>
                                                            <li class="unix-pengurus-pusat"><a href="{{ route('tentang-kami.struktur-pengurus') }}">Pengurus Pusat</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="unix-lingkup-kepakaran"><a href="{{ route('tentang-kami.lingkup-kepakaran') }}">Lingkup Kepakaran</a></li>
                                                    <li class="unix-galeri"><a href="{{ route('tentang-kami.galeri') }}">Galeri</a></li>
                                                </ul>
                                            </li>
                                            <li class="unix-program-kegiatan">
                                                <a href="{{ route('program-kegiatan') }}">Program & Kegiatan</a>
                                            </li>
                                            <li class="unix-anggota has-dropdown">
                                                <a href="#">Anggota</a>
                                                <ul class="sub-menu">
                                                    <li class="unix-manfaat-anggota"><a href="{{ route('anggota.manfaat') }}">Manfaat Menjadi Anggota</a></li>
                                                    <li class="unix-cara-anggota"><a href="{{ route('anggota.cara') }}">Cara Menjadi Anggota</a></li>
                                                    <li class="unix-manfaat-mitra"><a href="{{ route('anggota.mitra') }}">Manfaat Menjadi Mitra</a></li>
                                                    <li class="unix-cara-mitra"><a href="{{ route('anggota.cara-mitra') }}">Cara Menjadi Mitra</a></li>
                                                    <li class="unix-mitra-terdaftar"><a href="{{ route('anggota.mitra-terdaftar') }}">Mitra Terdaftar</a></li>
                                                </ul>
                                            </li>
                                            <li class="unix-emisi-iklim has-dropdown">
                                                <a href="#">Emisi & Iklim</a>
                                                <ul class="sub-menu">
                                                    <li class="unix-kalkulator-emisi"><a href="{{ route('emisi-iklim.kalkulator') }}">Kalkulator Emisi</a></li>
                                                    <li class="unix-climate-change-101"><a href="{{ route('emisi-iklim.climate-change-101') }}">Climate Change 101</a></li>
                                                </ul>
                                            </li>
                                            <li class="unix-hubungi-kami">
                                                <a href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="info-navbar d-lg-none">
                                    <ul>
                                        <li>
                                            <a class="canva_expander nav-menu-link menu-button" href="#"><i class="flaticon-menu"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="info-item d-none d-md-block">
                                    <a class="tj-header-btn btn" href="{{ route('login') }}">Member Area <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="tj-header-area header-sticky header-1">
        <div class="tj-bottom-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-content-area">
                            <div class="menu-area">
                                <div class="logo-area">
                                    <a href="index.html"><img src="{{ asset('assets/images/logos/main-logo.png') }}" alt="Logo" /></a>
                                </div>
                            </div>
                            <div class="info-right-item">
                                <div class="tj-menu-area d-lg-block d-none" id="main-menu">
                                    <nav id="mobile-menu">
                                        <ul style="gap: 25px">
                                            <li class="unix-beranda">
                                                <a href="{{ route('beranda') }}">Beranda</a>
                                            </li>
                                            <li class="unix-tentang-kami has-dropdown">
                                                <a href="#">Tentang Kami</a>
                                                <ul class="sub-menu">
                                                    <li class="unix-profil"><a href="{{ route('tentang-kami.profil') }}">Profil</a></li>
                                                    <li class="unix-visi-misi"><a href="{{ route('tentang-kami.visi-misi') }}">Visi & Misi</a></li>
                                                    <li class="unix-struktur-pengurus has-dropdown">
                                                        <a href="#">Struktur Pengurus</a>
                                                        <ul class="sub-menu">
                                                            <li class="unix-dewan-kehormatan"><a href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Kehormatan, Penasihat, Pembina, Pendiri, Pakar</a></li>
                                                            <li class="unix-pengurus-pusat"><a href="{{ route('tentang-kami.struktur-pengurus') }}">Pengurus Pusat</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="unix-lingkup-kepakaran"><a href="{{ route('tentang-kami.lingkup-kepakaran') }}">Lingkup Kepakaran</a></li>
                                                    <li class="unix-galeri"><a href="{{ route('tentang-kami.galeri') }}">Galeri</a></li>
                                                </ul>
                                            </li>
                                            <li class="unix-program-kegiatan">
                                                <a href="{{ route('program-kegiatan') }}">Program & Kegiatan</a>
                                            </li>
                                            <li class="unix-anggota has-dropdown">
                                                <a href="#">Anggota</a>
                                                <ul class="sub-menu">
                                                    <li class="unix-manfaat-anggota"><a href="{{ route('anggota.manfaat') }}">Manfaat Menjadi Anggota</a></li>
                                                    <li class="unix-cara-anggota"><a href="{{ route('anggota.cara') }}">Cara Menjadi Anggota</a></li>
                                                    <li class="unix-manfaat-mitra"><a href="{{ route('anggota.mitra') }}">Manfaat Menjadi Mitra</a></li>
                                                    <li class="unix-cara-mitra"><a href="{{ route('anggota.cara-mitra') }}">Cara Menjadi Mitra</a></li>
                                                    <li class="unix-mitra-terdaftar"><a href="{{ route('anggota.mitra-terdaftar') }}">Mitra Terdaftar</a></li>
                                                </ul>
                                            </li>
                                            <li class="unix-emisi-iklim has-dropdown">
                                                <a href="#">Emisi & Iklim</a>
                                                <ul class="sub-menu">
                                                    <li class="unix-kalkulator-emisi"><a href="{{ route('emisi-iklim.kalkulator') }}">Kalkulator Emisi</a></li>
                                                    <li class="unix-climate-change-101"><a href="{{ route('emisi-iklim.climate-change-101') }}">Climate Change 101</a></li>
                                                </ul>
                                            </li>
                                            <li class="unix-hubungi-kami">
                                                <a href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="info-navbar d-lg-none">
                                    <ul>
                                        <li>
                                            <a class="canva_expander nav-menu-link menu-button" href="#"><i class="flaticon-menu"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="info-item d-none d-md-block">
                                    <a class="tj-header-btn btn" href="{{ route('login') }}">Member Area <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end: Header Area -->

    <main class="site-main">
        @yield('content')
    </main>

    <!--=========== Footer Area Start =========-->
    <footer class="tj-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer1-col-1">
                            <div class="footer-info">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('assets/images/logos/main-logo.png') }}" alt="Logo" /></a>
                                </div>
                                <div class="desc">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered.
                                    </p>
                                </div>
                                <div class="footer-share">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget footer1-col-2 widget_nav_menu">
                            <div class="footer-title">
                                <h5 class="title">Links</h5>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Our Blog</a></li>
                                    <li><a href="#">Our Team</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer1-col-3">
                            <div class="footer-title">
                                <h5 class="title">Contact Us</h5>
                            </div>
                            <div class="footer-contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-location"></i> 2972 Westheimer Rd. Santa Ana, Illinois
                                        937949
                                    </li>
                                    <li>
                                        <i class="flaticon-open"></i>
                                        <a href="mailto:solarplus@gmail.com">Solarplus@gmail.com </a>
                                        <a href="mailto:infosolarplus@gmail.com">infosolarplus@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i><a href="tel:(1234)5678900">(1234)-567-8900 </a>
                                        <a class="d-block" href="tel:1234567890000">123-456-7890000</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget footer1-col-4">
                            <div class="footer-title">
                                <h5 class="title">Newsletter</h5>
                            </div>
                            <div class="footer-newsletter">
                                <div class="desc">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered.
                                    </p>
                                </div>
                                <div class="footer-form">
                                    <input type="email" id="mail" name="email" placeholder="Enter your mail...." />
                                    <a href="#"><i class="flaticon-sent"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tj-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-content-ara">
                            <div class="copyright-text">
                                <p>
                                    Copyright © 2023 <a href="#" target="_blank"> ThemeJunction. </a> All Rights
                                    Reserved.
                                </p>
                            </div>
                            <div class="copyright-menu">
                                <ul>
                                    <li><a href="#">Setting & Privacy</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section-shape">
            <div class="secton-group-one">
                <div class="shape-one">
                    <img src="{{ asset('assets/images/shape/footer-1.svg') }}" alt="Shape" />
                </div>
                <div class="shape-two">
                    <img src="{{ asset('assets/images/shape/footer-2.svg') }}" alt="Shape" />
                </div>
                <div class="shape-three">
                    <img src="{{ asset('assets/images/shape/footer-3.svg') }}" alt="Shape" />
                </div>
                <div class="shape-four">
                    <img src="{{ asset('assets/images/shape/footer-4.svg') }}" alt="Shape" />
                </div>
                <div class="shape-five">
                    <img src="{{ asset('assets/images/shape/footer-8.svg') }}" alt="Shape" />
                </div>
            </div>
            <div class="secton-group-two">
                <div class="shape-one">
                    <img class="image-1" src="{{ asset('assets/images/shape/footer-5.svg') }}" alt="Shape" />
                    <img class="image-2" src="{{ asset('assets/images/shape/footer-6.svg') }}" alt="Shape" />
                </div>
                <div class="shape-two">
                    <img class="image-1" src="{{ asset('assets/images/shape/footer-5.svg') }}" alt="Shape" />
                    <img class="image-2" src="{{ asset('assets/images/shape/footer-6.svg') }}" alt="Shape" />
                </div>
            </div>
        </div>
    </footer>
    <!--=========== Footer Area End =========-->

    <!-- start: Scroll Area -->
    <div class="solar-scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "></path>
        </svg>
        <div class="solar-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- end: Scroll Area -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script> 
        const nacActiveClasses = @json($nav_active);  
        document.querySelectorAll('li').forEach(function(li) {
            nacActiveClasses.forEach(function(className) {
                if (li.classList.contains(className)) {
                    li.classList.add('current-menu-item');
                }
            });
        });
    </script>    

</html>