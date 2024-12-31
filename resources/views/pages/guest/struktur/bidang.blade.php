@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" style="padding-top: 170px !important; padding-bottom: 100px !important" data-bg-image="{{ asset('assets/images/banner/banner-visimisi.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">{{ $data->kategori_pengurus->name }} <br> {{ $data->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($data->pengurus->count() > 0)
        <section class="tj-project-section-two pb-5 mb-5">
            <div class="container">
                <div class="row justify-content-center g-3">
                    @foreach ($data->pengurus as $items)
                        @if ($items->role == 'Ketua')
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Ketua</h5>
                                @include('components.profile-pengurus', ['data' => $items])
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row justify-content-center g-3 mt-5">
                    @foreach ($data->pengurus as $items)
                        @if ($items->role == 'Wakil Ketua')
                            <div class="col-lg-3 col-md-6 col-sm-6 ">
                                <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.8) !important;">Wakil Ketua</h5>
                                @include('components.profile-pengurus', ['data' => $items])
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row justify-content-center g-3 mt-5">
                    @foreach ($data->pengurus as $items)
                        @if ($items->role == 'Anggota')
                            <div class="col-lg-3 col-md-6 col-sm-6 ">
                                <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.6) !important;">Anggota</h5>
                                @include('components.profile-pengurus', ['data' => $items])
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @else
    <div class="container p-5"> 
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Maaf</h4>
            <p>Data pengurus <strong>{{ $data->name }}</strong> belum tersedia</p>
        </div>
    </div>
    @endif
    <section class="tj-service-section-two">
        <div class="container">
            <div class="team-content-area">
                <div class="tj-sec-heading">
                    <h2 class="sec-title">
                        {{ $komite1->name }}
                    </h2>
                </div>
            </div>
            <div class="row g-3">
                @foreach ($komite1->pengurus as $items)
                    @if ($items->role == 'Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Koordinator Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
                @foreach ($komite1->pengurus as $items)
                    @if ($items->role == 'Wakil Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.8) !important;">Wakil Koordinator Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
                @foreach ($komite1->pengurus as $items)
                    @if ($items->role == 'Anggota')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.6) !important;">Anggota Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="team-content-area mb-1 mt-4">
                <div class="tj-sec-heading">
                    <span class="sub-title"><strong>Bidang-bidang</strong></span>
                </div>
            </div>
            <div class="row g-3">
                @foreach ($komite1->bidang as $item2)
                    <div class="col-lg-4 col-md-6">
                        @include('components/bidang-card', ['data' => $item2])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="tj-project-section-two pb-5 mb-5">
        <div class="container">
            <div class="team-content-area">
                <div class="tj-sec-heading">
                    <h2 class="sec-title">
                        {{ $komite2->name }}
                    </h2>
                </div>
            </div>
            <div class="row g-3">
                @foreach ($komite2->pengurus as $items)
                    @if ($items->role == 'Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Koordinator Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
                @foreach ($komite2->pengurus as $items)
                    @if ($items->role == 'Wakil Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.8) !important;">Wakil Koordinator Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
                @foreach ($komite2->pengurus as $items)
                    @if ($items->role == 'Anggota')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.6) !important;">Anggota Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="team-content-area mb-1 mt-4">
                <div class="tj-sec-heading">
                    <span class="sub-title"><strong>Bidang-bidang</strong></span>
                </div>
            </div>
            <div class="row g-3">
                @foreach ($komite2->bidang as $item2)
                    <div class="col-lg-4 col-md-6">
                        @include('components/bidang-card', ['data' => $item2])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="tj-service-section-two">
        <div class="container">
            <div class="team-content-area">
                <div class="tj-sec-heading">
                    <h2 class="sec-title">
                        {{ $komite3->name }}
                    </h2>
                </div>
            </div>
            <div class="row g-3">
                @foreach ($komite3->pengurus as $items)
                    @if ($items->role == 'Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Koordinator Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
                @foreach ($komite3->pengurus as $items)
                    @if ($items->role == 'Wakil Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.8) !important;">Wakil Koordinator Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
                @foreach ($komite3->pengurus as $items)
                    @if ($items->role == 'Anggota')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.6) !important;">Anggota Komite</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="team-content-area mb-1 mt-4">
                <div class="tj-sec-heading">
                    <span class="sub-title"><strong>Bidang-bidang</strong></span>
                </div>
            </div>
            <div class="row g-3">
                @foreach ($komite3->bidang as $item2)
                    <div class="col-lg-4 col-md-6">
                        @include('components/bidang-card', ['data' => $item2])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
