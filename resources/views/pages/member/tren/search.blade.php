@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-0 bg-success" style=" padding-top: 155px; background-size: auto;"> 
        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
        </div>
    </section>
    <section class="tj-blog-details">
        <div class="container">
            <div class="tj-sec-heading-two mb-3">
                <span class="sub-title">Hasil pencarian: "{{ $text }}"</span>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    @if (count($data) == 0)
                        <div class="alert alert-info">
                            <h4 class="alert-heading">Tidak ada berita</h4>
                            <p>Belum ada berita dalam kategori ini.</p>
                        </div>
                    @else
                        <div class="sidebar-wrapper">
                            <div class="row g-3">
                                @foreach ($data as $item)
                                    <div class="col-md-6">
                                        @include('components.news', ['data' => $item])
                                    </div>
                                @endforeach
                            </div>  
                            <div class="mt-4">
                                {{ $data->appends(['search' => request('search')])->links('vendor.pagination.custom-bootstrap-5') }}
                            </div>
                        </div>
                    @endif

                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="{{ route('tren-terbaru.search') }}" method="GET">
                                    <input type="text" name="search" id="searchTwo" placeholder="Search Here">
                                    <button type="submit" value="search">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Kategori</h3>
                            <div class="sidebar-catagory">
                                <ul>
                                    @foreach ($kategori as $item)
                                        <li>
                                            <a href="{{ route('tren-terbaru.kategori', $item->slug) }}">{{ $item->name }}
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
                                            <a href="{{ route('tren-terbaru.detail', $item->slug) }}">
                                                <img src="{{ asset($item->image) }}" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta mb-0">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> {{ date('h:i, d/M/Y', strtotime($item->created_at)) }}</li>
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="{{ route('tren-terbaru.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
