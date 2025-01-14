@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper bg-success pb-2" style="padding-top: 170px">
        <div class="container">
            <div class="breadcrumb-content-area">
                <div class="breadcrumb-link">
                    <span>
                        <a href="/galeri">
                            <span>Galeri</span>
                        </a>
                    </span>
                    <i class="fa-light fa-angle-right"></i>
                    <span>
                        <span>{{ $data->title }}</span>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-page pt-5 pb-5">
        <div class="container">
            <div class="project-image mb-4">
                <img src="{{ asset($data->image) }}" alt="Images">
            </div>
            <h2 class="mb-3">{{ $data->title }}</h1>
                <hr>
            <?= $data->content ?>
        </div>
    </section>
@endsection
