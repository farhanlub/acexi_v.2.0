@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-0 bg-success" style=" padding-top: 155px; background-size: auto;">

        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
        </div>
    </section>
    <section class="tj-service-section-two pt-5 pb-5">
        <div class="container">
            <div class="tj-sec-heading-two mb-3">
                <span class="sub-title">Hasil pencarian: "{{ $text }}"</span>
            </div>
            <hr>
            <div class="row">
                @if (count($newsPK) > 0)
                    @foreach ($newsPK as $item)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            @include('components.news_program_kegiatan', ['data' => $item])
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12">
                        <div class="alert alert-primary" role="alert">
                            Tidak ada data yang ditemukan
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
