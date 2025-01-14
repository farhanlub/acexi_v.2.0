@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/pendampingan_keberlanjutan.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Keberlanjutan dan Pendampingan</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Keberlanjutan dan Pendampingan</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-choose-us-section pt-5 pb-5 bg-white" id="kebijakan">
        <div class="container">
            <div class="tj-sec-heading-two  mb-0" style="max-width: 100% !important;">
                <h2 class="title text-success">
                    Keberlanjutan
                </h2>
            </div>
            <div class="row g-4">
                @foreach ($keberlanjutan as $key => $item)
                    <div class="col-md-4">
                        <div class="tj-choose-us-item shadow-sm h-100 mb-0">
                            <h5 class="title">
                                {{ $item->name }}
                            </h5>
                            <div class="desc">
                                <p>
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="tj-choose-us-section pt-5 pb-5 bg-white" id="kebijakan" style="background: #fafafc !important">
        <div class="container">
            <div class="tj-sec-heading-two  mb-0" style="max-width: 100% !important;">
                <h2 class="title text-success">
                    Pendampingan
                </h2>
            </div>
            <div class="row g-4">
                @foreach ($pendampingan as $key => $item)
                    <div class="col-md-4">
                        <div class="tj-choose-us-item shadow-sm h-100 mb-0">
                            <h5 class="title">
                                {{ $item->name }}
                            </h5>
                            <div class="desc">
                                <p>
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
