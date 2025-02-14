@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/hubungi_kami.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Hubungi Kami</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Hubungi Kami</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tj-contact-section tj-contact-page pb-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Berhasil!</h4>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="contact-left-content">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title">Untuk Dunia Baru</span>
                            <h2 class="title">
                                Mari Membuat
                                <span>Perubahan</span>
                            </h2>
                            <div class="desc">
                                <p>
                                    Kasus-kasus ini sangat sederhana dan mudah untuk dibedakan. Dalam waktu senggang, hindari hal-hal yang tidak perlu.
                                </p>
                            </div>
                            <div class="contact-map">
                                <iframe src="https://maps.google.com/maps?q=manhattan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border: 0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('submit-contact') }}" onsubmit="disableButton()">
                        @csrf
                        <div class="tj-contact-form">
                            <div class="row">
                                @foreach (['name', 'phone', 'email', 'website', 'message'] as $field)
                                    <div class="col-lg-{{ $field == 'message' ? '12' : '6' }}">
                                        <div class="form-input">
                                            <label for="{{ $field }}">{{ ucfirst($field) }}</label>
                                            @if ($field == 'message')
                                                <textarea id="{{ $field }}" name="{{ $field }}" placeholder="Tulis Pesan Anda...">{{ old($field) }}</textarea>
                                            @else
                                                <input type="{{ $field == 'email' ? 'email' : 'text' }}" id="{{ $field }}" name="{{ $field }}" placeholder="Masukkan {{ ucfirst($field) }} Anda" value="{{ old($field) }}" required="">
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12">
                                    <div class="tj-contact-button">
                                        <button class="tj-primary-btn2 btn" type="submit" id="submitBtn">
                                            Hubungi Kami <i class="flaticon-right-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function disableButton() {
            document.getElementById('submitBtn').disabled = true;
            document.getElementById('submitBtn').innerHTML = 'Mengirim...';
        }
    </script>
@endsection
