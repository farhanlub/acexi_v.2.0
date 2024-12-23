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
    <section class="tj-blog-grid-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-content-area">
                        <div class="tj-sec-heading-four">
                            <span class="sub-title">Sesi {{ $data->title }} Terbaru</span>
                            <h2 class="sec-title">Pembaruan Terbaru <span>{{ $data->title }}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-content-area p-0">
                        <div class="blog-desc">
                            <p>
                                Program {{ Str::lower($data->title) }} kami memberikan pengetahuan terbaru dan peluang pengembangan profesional. Ikuti sesi {{ Str::lower($data->title) }} yang akan datang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2024</li>
                                    <li><i class="fa fa-location"></i> Mercure Hotel, Jakarta</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2024</li>
                                    <li><i class="fa fa-location"></i> The Ritz-Carlton Jakarta</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2024</li>
                                    <li><i class="fa fa-location"></i> Mercure Hotel, Jakarta</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2024</li>
                                    <li><i class="fa fa-location"></i> Mercure Hotel, Jakarta</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2024</li>
                                    <li><i class="fa fa-location"></i> The Ritz-Carlton Jakarta</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2024</li>
                                    <li><i class="fa fa-location"></i> Mercure Hotel, Jakarta</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
