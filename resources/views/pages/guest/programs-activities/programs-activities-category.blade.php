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
    <section class="tj-blog-grid-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-content-area">
                        <div class="tj-sec-heading-four">
                            <h2 class="sec-title">Pembaruan Terbaru <span>{{ $data->title }}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-content-area p-0">
                        <div class="blog-desc">
                            <p>
                                {{ $data->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($newsPK) > 0)
                <div class="row">
                    @foreach ($newsPK as $item)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            @include('components.news_program_kegiatan', ['data' => $item])
                        </div>
                    @endforeach

                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-primary" role="alert">
                            
                            Belum ada berita terbaru pada kategori ini
                        </div>

                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
