@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title text-center">401 Error - Akses Ditolak</h1>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tj-contact-section m-0 tj-contact-page pb-5 pt-5">
        <div class="container">
            <p class="p-0 m-0">Anda tidak memiliki izin untuk mengakses halaman ini. Silakan kembali atau hubungi admin situs jika Anda percaya ini adalah kesalahan.</p>
        </div>
    </div>
@endsection
