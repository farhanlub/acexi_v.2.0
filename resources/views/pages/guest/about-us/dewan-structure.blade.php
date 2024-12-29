@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/banner/banner-visimisi.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Dewan Kehormatan, Penasihat, Pembbina, Pendiri dan Pakar</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Dewan Kehormatan, Penasihat, Pembbina, Pendiri dan Pakar</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-team-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content-area">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Tim Kami</span>
                            <h2 class="sec-title">
                                Penggerak Utama di Balik <br>
                                <span>Kesuksesan Asosiasi ACEXI</span>
                            </h2>
                        </div>
                        <div class="right-content">
                            <p>
                                Temui para profesional yang berdedikasi yang membentuk tulang punggung ACEXI. Bersama-sama, mereka bekerja untuk mendorong inovasi, kolaborasi, dan keunggulan dalam asosiasi ini, memastikan masa depan cerah bagi industri.
                            </p>
                        </div>
                    </div>
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
        </div>
    </section>
@endsection
