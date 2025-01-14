@extends('layouts.guest')

@section('content')
    <section class="tj-slider-section pb-0">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner1.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">ACEXI</h1>
                            <h2 class="slider-sub-title" style="font-size: 70px"><strong>ASSOCIATION OF <br> CARBON EMISSION EXPERTS <br> INDONESIA</strong></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p style="font-size: 30px">
                                        Driving AMBITIONS to ACTION
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-primary-btn2 btn" href="{{ route('tentang-kami.profil') }}">
                                        Selengkapnya <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner5.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content me-5"> 
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner6.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content me-5"> 
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner7.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content me-5"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="slider-sec-shape">
            <img src="assets/images/shape/hero-shape.svg" alt="Shape" />
        </div>
    </section>

    <section class="tj-process-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two mb-0">
                        <h2 class="title">Kegiatan Terkini <span><strong>ACEXI</strong></span></h2>
                        <div class="desc">
                            <p>
                                ACEXI Menampilkan Kegiatan Terbaru dalam Berbagai Bidang Kepakaran</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($newsPK as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6"> 
                        @include('components.news_program_kegiatan', ['data' => $item])
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="tj-service-section-two pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two mb-0">
                        <h2 class="title">
                            Program dan Kegiatan
                            <span><strong>ACEXI</strong></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper tj-service-slider pt-0">
                        <div class="swiper-wrapper">
                            @foreach ($programKegiatan as $program)
                                <div class="swiper-slide">
                                    <div class="tj-service-item-three">
                                        <div class="service-image">
                                            <img src="{{ asset($program->image) }}" alt="Image">
                                            <div class="service-icon">
                                                <i class="bg-white"><img src="{{ asset('storage/assets/images/logos/logo.png') }}" alt=""></i> <!-- Ganti dengan ikon sesuai kebutuhan -->
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h5 class="title">
                                                <a href="{{ route('program-kegiatan-kategori', $program->slug) }}">{{ $program->title }}</a>
                                            </h5>
                                            <div class="desc">
                                                <p>{{ $program->description }}</p>
                                            </div>
                                            <div class="read-more">
                                                <a class="read-btn" href="{{ route('program-kegiatan-kategori', $program->slug) }}">See More <i class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Swiper Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Swiper Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== Process Section Start =========-->
    <section class="tj-process-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Lingkup Kepakaran</span>
                        <h2 class="sec-title">
                            ACEXI Memiliki Lingkup Kepakaran yang Luas
                        </h2>
                    </div>
                </div>
            </div>

            @include('components/expertise', ['expertScopes' => $expertScopes])
        </div>
    </section>
    <!--=========== Process Section End =========-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content-area">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Pakar</span>
                            <h2 class="sec-title">
                                Kolaborasi, Dedikasi, dan Aksi
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            @include('components/pakar', ['pakars' => $pakars])
        </div>
    </section>
    <!--=========== Team Section End =========-->

    @include('components/mitra', ['mitras' => $mitras]);
@endsection
