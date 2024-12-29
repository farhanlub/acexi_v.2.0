@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="https://www.klikers.id/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-13-at-19.33.32.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Galeri</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Galeri</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two">
                        <span class="sub-title">Galeri ACEXI</span>
                        <h2 class="title">
                            Menampilkan Kegiatan dan Proyek <br>
                            <span>Asosiasi ACEXI</span>
                        </h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-1.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Pelatihan Tenaga Ahli Energi Terbarukan</a></h3>
                                <span class="sub-title">Peningkatan Kapasitas untuk Masa Depan Energi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-2.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Seminar tentang Solusi Energi Ramah Lingkungan</a></h3>
                                <span class="sub-title">Diskusi Inovasi untuk Keberlanjutan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-8.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Pameran Teknologi Energi Terbarukan</a></h3>
                                <span class="sub-title">Menampilkan Inovasi dalam Energi Bersih</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-9.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Workshop Solusi Pengelolaan Energi</a></h3>
                                <span class="sub-title">Pendekatan Praktis untuk Industri</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-10.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Forum Diskusi Kebijakan Energi Terbarukan</a></h3>
                                <span class="sub-title">Menyusun Langkah Bersama untuk Kebijakan Hijau</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-11.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Rapat Kerja Asosiasi ACEXI 2023</a></h3>
                                <span class="sub-title">Evaluasi dan Perencanaan Ke Depan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('storage/assets/images/project/project-12.jpg') }}" alt="Image">
                            <div class="project-content">
                                <h3 class="title"><a href="#">Kolaborasi dengan Pemerintah untuk Energi Terbarukan</a></h3>
                                <span class="sub-title">Menjamin Implementasi Solusi Energi Bersih</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
@endsection
