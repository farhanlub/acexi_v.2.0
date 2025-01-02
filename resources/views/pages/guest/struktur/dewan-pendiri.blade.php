@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/banner-visimisi.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Dewan Pendiri</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-service-section-two">
        <div class="container">
            <div class="row justify-content-center g-3">
                @foreach ($data->pengurus as $items)
                    <div class="col-lg-3 col-md-6 col-sm-6"> 
                        @include('components.profile-pengurus', ['data' => $items])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
