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
            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image shadow-sm">
                            <img src="{{ $data->image != null ? asset($data->image) : 'https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg'}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2 class="sec-title">
                        {{ $data->name }}
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
                </div>
            </div>

            <div class="team-content-area mb-1 mt-4">
                <div class="tj-sec-heading">
                    <span class="sub-title"><strong>Jabatan: </strong></span>
                </div>
            </div>
            @if (count($data->pengurus) > 0)
                @foreach ($data->pengurus as $item)
                    @if ($item->kategori_pengurus)
                        <div class="tj-work-item mb-4">
                            <h5 class="title">{{ $item->role }} {{ $item->kategori_pengurus->name }}</h5>
                            <div class="desc">
                                {{-- <p>It was popularised in the 1960s with the release Letraset containing.</p> --}}
                            </div>
                            <hr>
                        </div>
                    @endif
                @endforeach
            @endif
            @if (count($data->pengurus) > 0)
                @foreach ($data->pengurus as $item)
                    @if ($item->bidang)
                        <div class="tj-work-item mb-4">
                            <h5 class="title">{{ $item->role }} {{ $item->bidang->name }}</h5>
                            <div class="desc">
                                {{-- <p>It was popularised in the 1960s with the release Letraset containing.</p> --}}
                            </div>
                            <hr>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </section>
@endsection
