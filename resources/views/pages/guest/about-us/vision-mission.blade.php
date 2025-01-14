@extends('layouts.guest')
 
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/visi_misi.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">Visi dan Misi</h1>
                    </div>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="/">
                                <span>Beranda</span>
                            </a>
                        </span>
                        <i class="fa-light fa-angle-right"></i>
                        <span>
                            <span>Visi dan Misi</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-value-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading-two text-center">
                    <span class="sub-title">Nilai Kami</span>
                    <h2 class="title">
                        Sumber Energi yang Lebih Baik untuk <br>
                        <span><strong>Masa Depan yang Lebih Berkelanjutan</strong></span>
                    </h2>
                    
                    
                    <div class="desc">
                    <p class="text-white">
                        ACEXI beranggotakan tim ahli karbon yang berdedikasi dalam berkolaborasi dengan organisasi lokal dan organisasi internasional, pemerintah Indonesia, dan sektor swasta untuk mendorong inovasi dan solusi secara nyata. ACEXI bukan hanya peserta dalam percakapan iklim - kami juga merupakan bagian penting dari gerakan keberlanjutan di Indonesia.
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="tj-value-item">
                    <div class="value-top-content">
                        <div class="value-icon">
                            <i class="flaticon-targeting"></i>
                        </div>
                        <div class="value-number">
                            <span class="number">01</span>
                        </div>
                    </div>
                    <h3 class="title">Visi Kami</h3>
                    <div class="desc">
                        <p>
                            Kami membantu membangun ekosistem perdagangan karbon dan mencapai target pengurangan emisi Indonesia, terutama dalam membangun komunitas pelaku yang berkontribusi dalam mengurangi emisi karbon di Indonesia dan global.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="tj-value-item">
                    <div class="value-top-content">
                        <div class="value-icon">
                            <i class="flaticon-leadership"></i>
                        </div>
                        <div class="value-number">
                            <span class="number">02</span>
                        </div>
                    </div>
                    <h3 class="title">Misi Kami</h3>
                    <div class="desc">
                        <p>
                            Kami membantu mengarahkan Indonesia menuju masa depan yang lebih hijau dan berkelanjutan, serta berkontribusi secara signifikan terhadap upaya global untuk memerangi perubahan iklim.
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
@endsection