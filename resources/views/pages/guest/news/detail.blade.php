@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-0 bg-success" style=" padding-top: 155px; background-size: auto;">
        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
        </div>
    </section>

    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sidebar-wrapper">
                        <div class="details-item details-item-two">
                            <div class="blog-thumb-image">
                                <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                            </div>
                            <div class="blog-meta-two">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> {{ date('h:i, d/M/Y', strtotime($data->created_at)) }}</li>
                                    <li><i class="fa-light fa-eye"></i> {{ number_format($data->views) }}</li>
                                    {{-- <li><i class="fa-regular fa-message"></i> Comment</li> --}}
                                </ul>
                            </div>
                            <div class="details-title">
                                <h4 class="title">{{ $data->title }}</h4>
                            </div>
                            <p>
                                @php
                                    echo $data->desc;
                                @endphp
                            </p> 
                            @if (Auth::check())
                                <div class="blog-button d-flex">
                                    <a class="tj-primary-btn btn" href="{{ $data->source }}" target="_blank">
                                        Baca Selengkapnya dari Sumber <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            @else
                                <div class="blog-button d-flex">
                                    <a href="{{ route('login') }}" class="tj-primary-btn btn">
                                        Login untuk Akses Sumber Berita <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="sidebar-search">
                                <form action="{{ route('program-kegiatan.search') }}" method="GET">
                                    <input type="text" name="search" id="searchTwo" placeholder="Search Here">
                                    <button type="submit" value="search">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Categories</h3>
                            <div class="sidebar-catagory">
                                <ul>
                                    @foreach ($category as $item)
                                        <li>
                                            <a href="{{ route('program-kegiatan-kategori', $item->slug) }}">{{ $item->name }}
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Recent Post</h3>
                            <div class="sidebar-recent-post">
                                @foreach ($recent5 as $item)
                                    <div class="single-post d-flex align-items-center">
                                        <div class="post-image">
                                            <a href="blog-details.html">
                                                <img src="{{ asset($item->image) }}" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> {{ date('h:i, d/M/Y', strtotime($item->created_at)) }}</li>
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="{{ route('program-kegiatan.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="tj-blog-widget">
                            <h3 class="side-title">Popular Tag</h3>
                            <div class="sidebar-tags">
                                <div class="tagcloud">
                                    <a href="#">Engineering</a>
                                    <a href="#">Renewal</a>
                                    <a href="#">Solar</a>
                                    <a href="#">Solar Plans</a>
                                    <a href="#">Gosolar</a>
                                    <a href="#">Wheepup</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
