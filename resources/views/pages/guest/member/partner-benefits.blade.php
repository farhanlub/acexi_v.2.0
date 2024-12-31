@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-0 bg-success" style=" background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title" style="font-size: 60px">Manfaat menjadi mitra</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
        </div>
    </section>
    <section class="tj-project-section-two pb-5 mb-5">
        <div class="container">
            <div class="about-feature-item">
                <div class="feature-content w-100">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i> <!-- Ikon kolaborasi strategis -->
                    </div>
                    <div class="feature-text">
                        <h5 class="title">Kolaborasi Strategis</h5>
                        <span class="sub-title">Berperan aktif dalam proyek mitigasi perubahan iklim dan program karbon offset.</span>
                    </div>
                </div>
                <div class="feature-content w-100">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i> <!-- Ikon jaringan profesional -->
                    </div>
                    <div class="feature-text">
                        <h5 class="title">Jaringan Profesional</h5>
                        <span class="sub-title">Akses ke komunitas anggota dan mitra ACEXI yang luas.</span>
                    </div>
                </div>
                <div class="feature-content w-100">
                    <div class="feature-icon">
                        <i class="fas fa-flag"></i> <!-- Ikon branding bersama -->
                    </div>
                    <div class="feature-text">
                        <h5 class="title">Branding Bersama</h5>
                        <span class="sub-title">Kesempatan meningkatkan reputasi melalui branding bersama ACEXI.</span>
                    </div>
                </div>
                <div class="feature-content w-100">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i> <!-- Ikon dukungan teknis -->
                    </div>
                    <div class="feature-text">
                        <h5 class="title">Dukungan Teknis</h5>
                        <span class="sub-title">Bantuan teknis atau konsultasi dalam pengelolaan emisi karbon.</span>
                    </div>
                </div>
                <div class="feature-content w-100">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i> <!-- Ikon eksposur acara -->
                    </div>
                    <div class="feature-text">
                        <h5 class="title">Eksposur Acara</h5>
                        <span class="sub-title">Peluang berpartisipasi sebagai sponsor atau partner resmi dalam acara ACEXI.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
