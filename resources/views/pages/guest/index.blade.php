@extends('layouts.guest')

@section('content')
    <section class="tj-slider-section">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner1.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title" style="font-size: 60px">ACEXI</h1>
                            <h2 class="slider-sub-title">ASSOCIATION OF CARBON EMISSION EXPERTS <span>INDONESIA</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Driving AMBITIONS to ACTION
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="{{ route('tentang-kami.profil') }}">
                                        Selenggkapnya <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner2.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content me-5">
                            <h1 class="slider-title" style="font-size: 60px">Jenderal TNI (Purn.) <br> Dr. H. Moeldoko, S.I.P., M.A.</h1>
                            {{-- <h2 class="slider-sub-title">Lorem Ipsum<span>Lorem Ipsum</span></h2> --}}
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Asosiasi ini adalah mitra strategis yang menggabungkan keahlian, dedikasi, dan visi untuk menciptakan solusi berkelanjutan. Dengan tim profesional yang memiliki keahlian di berbagai bidang seperti energi terbarukan, pengelolaan karbon, hingga penerapan prinsip ESG, mereka memberikan pendekatan holistik terhadap tantangan lingkungan. Setiap proyek yang dikerjakan mencerminkan komitmen mereka untuk masa depan yang lebih hijau dan inklusif.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner3.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content me-5">
                            <h1 class="slider-title" style="font-size: 60px">Prof. Dr. Ir. Rokhmin <br> Dahuri, MS.</h1>
                            {{-- <h2 class="slider-sub-title">Lorem Ipsum<span>Lorem Ipsum</span></h2> --}}
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Asosiasi ini adalah mitra strategis yang menggabungkan keahlian, dedikasi, dan visi untuk menciptakan solusi berkelanjutan. Dengan tim profesional yang memiliki keahlian di berbagai bidang seperti energi terbarukan, pengelolaan karbon, hingga penerapan prinsip ESG, mereka memberikan pendekatan holistik terhadap tantangan lingkungan. Setiap proyek yang dikerjakan mencerminkan komitmen mereka untuk masa depan yang lebih hijau dan inklusif.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner4.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content me-5">
                            <h1 class="slider-title" style="font-size: 60px">Poempida Hidayatulloh, <br> B.Eng., Ph.D., DIC.</h1>
                            {{-- <h2 class="slider-sub-title">Lorem Ipsum<span>Lorem Ipsum</span></h2> --}}
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Asosiasi ini adalah mitra strategis yang menggabungkan keahlian, dedikasi, dan visi untuk menciptakan solusi berkelanjutan. Dengan tim profesional yang memiliki keahlian di berbagai bidang seperti energi terbarukan, pengelolaan karbon, hingga penerapan prinsip ESG, mereka memberikan pendekatan holistik terhadap tantangan lingkungan. Setiap proyek yang dikerjakan mencerminkan komitmen mereka untuk masa depan yang lebih hijau dan inklusif.
                                    </p>
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
            <div class="row">
                @foreach ($newsPK as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tj-blog-item-two">
                            <div class="blog-image">
                                <a href=""><img style="height: 200px;" src="{{ $item->image }}" class="object-fit-cover" alt="Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> {{ date('h:i:s d-m-y', strtotime($item->created_at)) }}</li>
                                        <li><i class="fa fa-eye"></i> {{ $item->views }}</li>
                                    </ul>
                                </div>
                                <h5 class="title">
                                    <a href="">{{ $item->title }}</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="tj-testimonial-section-two pt-0 d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumb-content-area">
                        <div class="active-image">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial_active_img @if ($loop->first) active @endif">
                                    <img src="{{ asset($testimonial->image_large) }}" alt="Image">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper thumb-testimonial-slider">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide @if ($loop->first) swiper-slide-active @endif">
                                        <div class="thumb-image">
                                            <img src="{{ asset($testimonial->image_small) }}" alt="Image">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content-area">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title">Testimonial</span>
                            <h2 class="title">Ulasan dari <span>Para Ahli</span></h2>
                        </div>
                    </div>
                    <div class="swiper thumb-slider2">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide @if ($loop->first) swiper-slide-active @endif">
                                    <div class="testimonial-slider-item">
                                        <div class="desc">
                                            <p>{{ $testimonial->testimonial_text }}</p>
                                        </div>
                                        <div class="testimonial-auother">
                                            <div class="quote-icon">
                                                <img src="assets/images/icon/quote.svg" alt="Icon">
                                            </div>
                                            <div class="testimonial-text">
                                                <h3 class="title">{{ $testimonial->name }} <span>{{ $testimonial->last_name }}</span></h3>
                                                <span class="sub-title">{{ $testimonial->role }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-service-section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two">
                        <h2 class="title">
                            Program dan Kegiatan
                            <span>ACEXI</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper tj-service-slider">
                        <div class="swiper-wrapper">
                            @foreach ($programKegiatan as $program)
                                <div class="swiper-slide">
                                    <div class="tj-service-item-three">
                                        <div class="service-image">
                                            <img src="{{ asset($program->image) }}" alt="Image">
                                            <div class="service-icon">
                                                <i><img src="{{ asset('assets/images/logos/logo.png') }}" alt=""></i> <!-- Ganti dengan ikon sesuai kebutuhan -->
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
    <section class="tj-process-section">
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
    <section class="tj-team-section">
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
