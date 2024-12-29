@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/banner/banner-profil.jpeg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Profil</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Profil</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-about-section mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="about-content-one">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Tentang Kami</span>
                            <h2 class="sec-title">
                                ACEXI <br>
                                <span>Mendorong Solusi Emisi Karbon Indonesia</span>
                            </h2>
                            <div class="desc">
                                <p>
                                    Di <strong>ACEXI (Asosiasi Ahli Emisi Karbon Indonesia)</strong>, kami berkomitmen tinggi untuk berkolaborasi aktif dalam perjalanan Indonesia untuk menurunkan emisi karbon. Misi kami adalah membentuk ekosistem perdagangan karbon yang transparan dan efektif yang menyelaraskan tujuan iklim nasional Indonesia dengan solusi dan tindakan yang berkelanjutan dan bermakna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-lg-image">
                            <img src="{{ asset('assets/images/banner/Visi Misi.jpg') }}" alt="Image" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-shape">
            <img src="assets/images/shape/service-1.svg" alt="Shape" />
        </div>
    </section>
    <section class="tj-choose-us-section" style="background: var(--tj-color-theme-bg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="tj-sec-heading-two w-100" style="max-width: 100% !important;"> 
                        <h2 class="title text">
                            Apa yang Kami
                            <span>Lakukan</span>
                        </h2>
                        <div class="desc">
                            <p>
                                ACEXI berfokus pada beberapa bidang utama untuk memastikan bahwa Indonesia siap untuk mencapai target pengurangan emisi karbon. Bidang-bidang utama tersebut adalah:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="tj-choose-us-item">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="flaticon-reliability"></i>
                            </div>
                            <div class="choose-us-text">
                                <span>01</span>
                            </div>
                        </div>
                        <h5 class="title">
                            Membangun Pasar <br>
                            Karbon
                        </h5>
                        <div class="desc">
                            <p>
                                Kami meletakkan dasar bagi ekosistem perdagangan karbon di Indonesia, memastikan bahwa ekosistem ini menjadi platform yang dapat diakses oleh bisnis untuk berpartisipasi dalam mengurangi jejak karbon mereka.

                            </p>
                            <p>
                                Kami secara aktif mencari solusi atas masalah-masalah dalam upaya untuk membangun pasar karbon yang lebih efisien dan mendorong untuk partisipasi sektor yang lebih luas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-choose-us-item">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="flaticon-reliability"></i>
                            </div>
                            <div class="choose-us-text">
                                <span>02</span>
                            </div>
                        </div>
                        <h5 class="title">
                            Membentuk Kebijakan
                        </h5>
                        <div class="desc">
                            <p>
                                Dengan menggunakan penelitian yang dapat diandalkan dan data terkini, kami mendorong pengembangan kebijakan yang membantu mengurangi emisi karbon. Kami membantu memberikan masukan tentang strategi-strategi pertumbuhan pasar yang rendah karbon, memastikan kepraktisan regulasi-regulasi pemerintah dan mendukung pertumbuhan pasar karbon tersebut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-choose-us-item">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="flaticon-reliability"></i>
                            </div>
                            <div class="choose-us-text">
                                <span>03</span>
                            </div>
                        </div>
                        <h5 class="title">
                            Pelatihan & Sertifikasi
                        </h5>
                        <div class="desc">
                            <p>
                                Melalui program sertifikasi yang disesuaikan dengan kebutuhan, kami membantu industri memenuhi standar manajemen karbon global. Dengan memberikan pelatihan profesional, kami memastikan bahwa anggota dan mitra profesional kami siap untuk menyelaraskan diri dengan persyaratan perdagangan karbon, serta mahir dalam mengintegrasikan praktik-praktik berkelanjutan ke dalam operasi harian mereka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="project-top-content-area">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title"> </span>

                            <h2 class="title">
                                Kantor Pusat Kami
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-desc">
                        <p>
                            Kantor pusat kami berada di Jakarta, tetapi pekerjaan kami tidak terbatas secara geografis. Kami bermitra dengan organisasi lingkungan hidup lokal dan global untuk bertukar pengetahuan dan praktik terbaik, memastikan bahwa upaya Indonesia dalam mengurangi emisi karbon berkontribusi signifikan pada agenda iklim internasional yang lebih luas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-choose-us-section" style="background: var(--tj-color-theme-bg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two mb-3"> 
                        <h2 class="title">
                            Peran dan Kontribusi
                            <span>ACEXI</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12"> 
                    <div class="desc">
                        <p>
                            Indonesia telah memiliki <strong>Nationally Determined Contribution (NDC)</strong> yang mengikuti kerangka kerja di mana pada tahun 2060 (atau bahkan beberapa saat sebelum tahun target tersebut), Indonesia akan mencapai net zero emission, dan ACEXI hadir untuk membantu mewujudkan target tersebut.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
