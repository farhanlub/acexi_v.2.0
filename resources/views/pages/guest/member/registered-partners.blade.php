@extends('layouts.guest')
 
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/banner/banner-visimisi.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">Mitra Terdaftar</h1>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

@include('components/mitra', ['mitras' => $mitra]);
@endsection