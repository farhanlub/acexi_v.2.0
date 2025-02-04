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
<section class="tj-project-details pt-5 pb-5">
    <div class="container"> 
        <div class="project-details-item">  
            <p>
                {{ $data->description }}
            </p> 
        </div> 
    </div>
</section>
 
@endsection