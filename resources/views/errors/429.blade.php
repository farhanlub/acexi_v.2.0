@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper bg-primary">
        <div class="container">
            <div class="row">
                <div the="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title text-center">429 Error - Terlalu Banyak Permintaan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tj-contact-section m-0 tj-contact-page pb-5 pt-5">
        <div class="container">
            <p class="p-0 m-0">Anda telah mengirim terlalu banyak permintaan dalam waktu singkat. Silakan tunggu sebelum mencoba lagi.</p>
        </div>
    </div>
@endsection
