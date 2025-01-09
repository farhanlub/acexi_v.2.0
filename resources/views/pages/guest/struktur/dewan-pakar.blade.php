@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/dewan_pakar.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Dewan Pakar</h1>
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
                    @if ($items->role == 'Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center">Ketua</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row justify-content-center g-3 mt-5">
                @foreach ($data->pengurus as $items)
                    @if ($items->role == 'Wakil Ketua')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.8) !important;">Wakil Ketua</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row justify-content-center g-3 mt-5">
                @foreach ($data->pengurus as $items)
                    @if ($items->role == 'Anggota')
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h5 class="sub-title p-2 bg-success bg-gradient mb-0 rounded-top text-white text-center" style="background-color: rgba(25, 135, 84, 0.6) !important;">Anggota</h5>
                            @include('components.profile-pengurus', ['data' => $items])
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
