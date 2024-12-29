@extends('layouts.guest')
 
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/banner/banner-visimisi.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">Lingkup Kepakaran</h1>
                    </div>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="/">
                                <span>Beranda</span>
                            </a>
                        </span>
                        <i class="fa-light fa-angle-right"></i>
                        <span>
                            <span>Lingkup Kepakaran</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tj-testimonial-section">
    <div class="container">
        <div class="row">
            @foreach($expertScopes as $scope)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('tentang-kami.lingkup-kepakaran.detai', $scope->slug) }}">
                        <div class="tj-process-item">
                            <img src="{{ asset($scope->image) }}" alt="Image" />
                            <div class="process-content">
                                <div class="process-icon">
                                    <i class="{{ $scope->icon }}"></i>
                                </div>
                                <div class="process-title">
                                    <h5 class="title">{{ $scope->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>      
    </div>
</section>
@endsection