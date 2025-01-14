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
                <div class="row g-3">
                    @foreach ($newsPK as $item)
                        <div class="col-md-3">
                            <div class="card shadow-sm border-0 h-100">
                                <a href="{{ route('program-kegiatan.detail', $item->slug) }}"><img style="height: 200px;" src="{{ asset($item->image) }}" class="object-fit-cover w-100" alt="Image"></a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-column h-100 gap-2">
                                        <div class="">
                                            <div class="d-flex justify-content-between p-0 mb-2">
                                                <span><i class="flaticon-calendar"></i> {{ date('h:i d-M-y', strtotime($item->created_at)) }}</span>
                                            </div>

                                            <h5 class="title">
                                                <a href="{{ route('program-kegiatan.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                        <div class="tj-blog-button d-flex">
                                            <a class="tj-secondary-btn btn" href="{{ route('program-kegiatan.detail', $item->slug) }}">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    {{ $newsPK->appends([])->links('vendor.pagination.custom-bootstrap-5') }}
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
