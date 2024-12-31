@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/banner/banner-visimisi.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Pengurus Pusat</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Pengurus Pusat</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-team-page">
        <div class="container">
            <div class="team-content-area">
                <div class="tj-sec-heading">
                    <span class="sub-title">Tim Kami</span>
                    <h2 class="sec-title">
                        Pengurus Pusat
                    </h2>
                </div>
            </div>

            <div class="row">
                @foreach ($data as $teamMember)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tj-team-item">
                            <div class="team-image">
                                <img src="{{ asset($teamMember->image_url) }}" alt="Image">
                            </div>
                            <div class="team-content">
                                <div class="team-auother">
                                    <h5 class="title">{{ $teamMember->name }}</h5>
                                    <span class="sub-title">{{ $teamMember->role }}</span>
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
                @endforeach
            </div>

            <div class="team-content-area mt-5">
                <hr>
                <div class="tj-sec-heading">
                    <h2 class="sec-title">
                        Komite teknis 1
                    </h2>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-four h-100">
                        <h3 class="title">Bidang organisasi & <span>Keanggotaan</span></h3>
                        <div class="read-more-button">
                            <a class="read-more" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-four h-100">
                        <h3 class="title">Bidang Hukum & <span>Kode Etik</span></h3>
                        <div class="read-more-button">
                            <a class="read-more" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-four h-100">
                        <h3 class="title">Bidang Humas & <span>Hubungan Kelembagaan</span></h3>
                        <div class="read-more-button">
                            <a class="read-more" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-four h-100">
                        <h3 class="title">Bidang Gender & <span>Inklusi Sosial</span></h3>
                        <div class="read-more-button">
                            <a class="read-more" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-four h-100">
                        <h3 class="title">Bidang Transformasi Digital, Data, & <span>Informasi</span></h3>
                        <div class="read-more-button">
                            <a class="read-more" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-four h-100">
                        <h3 class="title">Bidang Humas & <span>Hubungan Kelembagaan</span></h3>
                        <div class="read-more-button">
                            <a class="read-more" href="service-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
