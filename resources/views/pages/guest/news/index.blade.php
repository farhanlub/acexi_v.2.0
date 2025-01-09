@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="https://i.pinimg.com/550x/64/01/09/6401090da33cb13ee835da4cc28fc652.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title m-0">Kumpulan Berita</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sidebar-wrapper">
                        @foreach ($data as $item)
                            <div class="details-item">
                                <div class="blog-thumb-image">
                                    <a href="{{ route('berita.detail', $item->slug) }}"><img src="{{ asset($item->image) }}" alt="Image"></a>
                                </div>
                                <div class="blog-meta-two">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> {{ date('d M Y', strtotime($item->created_at)) }}</li>
                                        <li><i class="fa-light fa-eye"></i> {{ number_format($item->views) }}</li>
                                    </ul>
                                </div>
                                <div class="details-title">
                                    <h3 class="title"><a href="{{ route('berita.detail', $item->slug) }}">{{ $item->title }}</a></h3>
                                </div>
                                <p>
                                    {{ Str::limit($item->desc, 150) }}
                                </p>
                                <div class="blog-button d-flex">
                                    <a class="tj-primary-btn btn btn-sm" href="{{ route('berita.detail', $item->slug) }}">
                                        Selengkapnya <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="blog-pagination">
                            <ul>
                                {{ $data->links('pagination::simple-tailwind') }}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="#">
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
                                            <a href="{{ route('berita.kategori', $item->slug) }}">{{ $item->name }}
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
                                            <a href="{{ route('berita.detail', $item->slug) }}">
                                                <img src="{{ asset($item->image) }}" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta mb-0">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> {{ date('h:i, d/M/Y', strtotime($item->created_at)) }}</li>
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="{{ route('berita.detail', $item->slug) }}">{{ $item->title }}</a>
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
