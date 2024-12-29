@extends('layouts.guest')
 
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset($data->image) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">{{ $data->title }}</h1>
                    </div>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="/">
                                <span>Beranda</span>
                            </a>
                        </span>
                        <span>
                            <a href="{{ route('tentang-kami.lingkup-kepakaran') }}">
                                <span>Lingkup Kepakaran</span>
                            </a>
                        </span>
                        <i class="fa-light fa-angle-right"></i>
                        <span>
                            <span>{{ $data->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-project-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-details-item">
                    <div class="project-image">
                        <img src="{{asset('storage/assets/images/project/project-6.jpg')}}" alt="Images">
                    </div>
                    <div class="project-category">
                        <ul class="dot-style">
                            <li><span class="sub-title d-block">Client</span>Sandi Leo Rakiul</li>
                            <li><span class="sub-title d-block">15000 USD</span>Sandi Leo Rakiul</li>
                            <li><span class="sub-title d-block">Date</span>November 19, 2024</li>
                            <li><span class="sub-title d-block">Category</span>Planing, Real Estate</li>
                        </ul>
                    </div>
                    <h2 class="title">Develops Sustainable Infrastructure</h2>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque corrupti quos dolores. At vero eos et
                        accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate non
                        provident, similique sunt indeserunt mollitia animi, id est laborum et dolorum fuga.
                        Et harum quidem rerum facilis est et expedita distinctio.
                    </p>
                    <div class="project-wrapper">
                        <div class="row">
                            <div class="col-xl-7 col-lg-12">
                                <div class="project-left-content">
                                    <h3 class="title">Manages Sustainable Infrastructure</h3>
                                    <p>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores. At vero eos et accusamus et iusto odio.
                                    </p>
                                    <p>
                                        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                                        atque corrupti quos dolores et quas molestias excepturi sint
                                        cupiditate non provident, similique sunt indeserunt mollitia animi,
                                        id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-12">
                                <div class="project-feature-item">
                                    <p>
                                        ''It is a long established fact that a reader will be distracted by
                                        the readable content of a page when looking at its layout. simply
                                        dummy text of the printing and typesetting industry.''
                                    </p>
                                    <div class="project-text">
                                        <div class="project-auother">
                                            <div class="auother-image">
                                                <img src="{{asset('storage/assets/images/testimonial/feature-testimonail.png')}}" alt="Images">
                                            </div>
                                            <div class="auother-text">
                                                <h3 class="title">Donald <span>Hughes</span></h3>
                                                <span class="sub-title">Customer</span>
                                            </div>
                                        </div>
                                        <div class="project-quote">
                                            <img src="{{asset('storage/assets/images/icon/quote2.svg')}}" alt="Icon">
                                        </div>
                                    </div>
                                    <div class="project-rating">
                                        <div class="star-ratings" style="width: 104.137px;">
                                            <div class="fill-ratings">
                                                <span>★★★★★</span>
                                            </div>
                                            <div class="empty-ratings">
                                                <span>★★★★★</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-wrapper-slider">
                        <div class="swiper tj-wrapper-slider2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-e961c6e554fc10602" aria-live="off" style="transform: translate3d(-3960px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 1296px; margin-right: 24px;">
                                    <div class="slider-image">
                                        <img src="{{asset('storage/assets/images/project/project-6.jpg')}}" alt="Images">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 1296px; margin-right: 24px;">
                                    <div class="slider-image">
                                        <img src="{{asset('storage/assets/images/project/project-7.jpg')}}" alt="Images">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 1296px; margin-right: 24px;">
                                    <div class="slider-image">
                                        <img src="{{asset('storage/assets/images/project/project-6.jpg')}}" alt="Images">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 1296px; margin-right: 24px;">
                                    <div class="slider-image">
                                        <img src="{{asset('storage/assets/images/project/project-7.jpg')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-navigation">
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e961c6e554fc10602"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e961c6e554fc10602"></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <h3 class="title">Project Challenging Story</h3>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                            officia distinctio.
                        </p>
                        <div class="project-slider-content">
                            <div class="project-text">
                                <h5 class="title">Best Emplementation</h5>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti.
                                </p>
                            </div>
                            <div class="project-text">
                                <h5 class="title">Best Emplementation</h5>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="project-details-share">
                        <ul class="dot-style">
                            <li><span>Share This Project:</span></li>
                            <li>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
@endsection