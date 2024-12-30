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
                            <h2 class="sec-title">
                                Penggerak Utama di Balik Kesuksesan Asosiasi ACEXI
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p>
                        Temui para profesional yang berdedikasi yang membentuk tulang punggung ACEXI. Bersama-sama, mereka bekerja untuk mendorong inovasi, kolaborasi, dan keunggulan dalam asosiasi ini, memastikan masa depan cerah bagi industri.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-service-section-two">
        <div class="container">
            @foreach ($data as $item)
                <hr class="mt-5">
                <div class="team-content-area mt-5">
                    <div class="tj-sec-heading">
                        <h2 class="sec-title">
                            {{ $item->name }}
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center gap-2 mt-5">
                    @foreach ($item->pengurus as $items)
                        @if ($items->role == 'Ketua')
                            <div class="col-lg-3 col-md-6 col-sm-6 shadow-sm p-0">
                                <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Ketua</h5>
                                @include('components.profile-pengurus', ['data' => $items])
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row justify-content-center gap-2 mt-5">
                    @foreach ($item->pengurus as $items)
                        @if ($items->role == 'Wakil Ketua')
                            <div class="col-lg-3 col-md-6 col-sm-6  shadow-sm p-0">
                                <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Wakil Ketua</h5>
                                @include('components.profile-pengurus', ['data' => $items])
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row justify-content-center gap-2 mt-5">
                    @foreach ($item->pengurus as $items)
                        @if ($items->role == 'Anggota')
                            <div class="col-lg-3 col-md-6 col-sm-6  shadow-sm p-0">
                                <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Anggota</h5>
                                @include('components.profile-pengurus', ['data' => $items])
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
