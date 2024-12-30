@extends('layouts.guest')

@section('content')

    <section class="breadcrumb-wrapper pb-0 bg-success" style=" padding-top: 155px; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Profil Pengurus</h1>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
         </div>
    </section>
 
    <section class="tj-team-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="{{ asset($data->image) }}" alt="Image">
                        </div>  
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2 class="sec-title">
                        {{ $data->name }} {{ $data->title }}
                    </h2>
                    
                    <div class="d-flex justify-content-start mt-2 mb-3 gap-3"> 
                        @if ($data->linkedin)
                            <a href="{{ $data->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a>
                        @endif 
                        @if ($data->twitter)
                            <a href="{{ $data->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                        @endif 
                        @if ($data->facebook)
                            <a href="{{ $data->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                        @endif 
                        @if ($data->instagram)
                            <a href="{{ $data->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                        @endif
                    </div> 
                    @foreach ($data->pengurus as $item)
                    <span class="sub-title">{{$item->role }} {{  $item->kategori_pengurus->name}}</span>, <br> 
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
