@extends('layouts.guest')
 
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/lingkup_kepakaran.jpg') }}">
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
        @include('components/expertise', ['expertScopes' => $expertScopes])    
    </div>
</section>
@endsection