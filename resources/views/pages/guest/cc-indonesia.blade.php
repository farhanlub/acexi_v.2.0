@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/cc-indonesia.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Climate Change 101 Indonesia</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Climate Change 101 Indonesia</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-section-two pb-5 pt-5">
        <div class="container">
            <div class="about-feature-item row gap-0">
                <div class="col-lg-4 col-md-6">
                    <div class="shadow-sm rounded feature-content flex-nowrap">
                        <div class="feature-icon">
                            <i class="fas fa-file-alt"></i> <!-- Ikon laporan dan dokumen -->
                        </div>
                        <div class="feature-text">
                            <h5 class="title"><a href="#laporan">Laporan dan Dokumen Resmi</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="shadow-sm rounded feature-content flex-nowrap">
                        <div class="feature-icon">
                            <i class="fas fa-globe-americas"></i> <!-- Ikon kebijakan dan rencana nasional -->
                        </div>
                        <div class="feature-text">
                            <h5 class="title"><a href="#kebijakan">Kebijakan dan Rencana Nasional</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="shadow-sm rounded feature-content flex-nowrap">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i> <!-- Ikon riset dan kajian akademis -->
                        </div>
                        <div class="feature-text">
                            <h5 class="title"><a href="#riset">Riset dan Kajian Akademis</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-choose-us-section pt-5 pb-5" style="background: #fafafc" id="laporan">
        <div class="container"> 
                    <div class="tj-sec-heading-two mb-0">
                        <h2 class="title">
                            Laporan dan
                            <span>Dokumen Resmi</span>
                        </h2>
                    </div> 
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-choose-us-item bg-white h-100">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="fal fa-leaf"></i> <!-- Ikon untuk NDC yang berhubungan dengan perubahan iklim -->
                            </div>
                            <div class="choose-us-text">
                                <span>01</span>
                            </div>
                        </div>
                        <h5 class="title">
                            Indonesia’s Enhanced NDC (2022)
                        </h5>

                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://unfccc.int/sites/default/files/NDC/2022-09/23.09.2022_Enhanced%20NDC%20Indonesia.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-choose-us-item bg-white h-100">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="fal fa-wind"></i> <!-- Ikon untuk strategi energi rendah karbon -->
                            </div>
                            <div class="choose-us-text">
                                <span>02</span>
                            </div>
                        </div>
                        <h5 class="title">Indonesia Long-Term Strategy for Low Carbon and Climate Resilience (LTS-LCCR) 2050</h5>

                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://unfccc.int/sites/default/files/resource/Indonesia_LTS-LCCR_2021.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-choose-us-item bg-white h-100">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="fal fa-book"></i> <!-- Ikon untuk laporan atau dokumen resmi -->
                            </div>
                            <div class="choose-us-text">
                                <span>03</span>
                            </div>
                        </div>
                        <h5 class="title">
                            First Biennial Update Report (BUR) Indonesia to UNFCCC (2016)
                        </h5>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://unfccc.int/sites/default/files/resource/IDNBUR1.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen 1</a>
                            <a href="https://www4.unfccc.int/sites/submissions/INDC/Published%20Documents/Indonesia/1/INDC_REPUBLIC%20OF%20INDONESIA.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen 2</a>
                            <a href="https://unfccc.int/sites/default/files/NDC/2022-06/First%20NDC%20Indonesia_submitted%20to%20UNFCCC%20Set_November%20%202016.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen 3</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="tj-choose-us-section pt-5 pb-5" id="kebijakan">
        <div class="container"> 
            <div class="tj-sec-heading-two mb-0">
                <h2 class="title">
                    Kebijakan dan
                    <span>Rencana Nasional</span>
                </h2>
            </div> 
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-choose-us-item h-100" style="background: #fafafc">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="fal fa-cogs"></i> <!-- Ikon untuk Peraturan Presiden -->
                            </div>
                            <div class="choose-us-text">
                                <span>01</span>
                            </div>
                        </div>
                        <h5 class="title">
                            <a href="https://jdih.maritim.go.id/cfind/source/files/perpres/salinan_perpres_nomor_98_tahun_2021.pdf">Peraturan Presiden No. 98 Tahun 2021</a>
                        </h5>
            
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://jdih.maritim.go.id/cfind/source/files/perpres/salinan_perpres_nomor_98_tahun_2021.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-choose-us-item h-100" style="background: #fafafc">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="fal fa-sun"></i> <!-- Ikon untuk strategi energi rendah karbon -->
                            </div>
                            <div class="choose-us-text">
                                <span>02</span>
                            </div>
                        </div>
                        <h5 class="title"><a href="https://www.menlhk.go.id/cadmin/uploads/renstra_full_3_1_960074a1c4.pdf">Indonesia Long-Term Strategy for Low Carbon and Climate Resilience (LTS-LCCR) 2050</a></h5>
            
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://www.menlhk.go.id/cadmin/uploads/renstra_full_3_1_960074a1c4.pdf" target="blank" class="btn btn-light btn-sm shadow-sm"><i class="fa fa-file-doc me-2"></i>Dokumen</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="tj-choose-us-section pt-5 pb-5" style="background: #fafafc" id="laporan">
        <div class="container"> 
            <div class="tj-sec-heading-two mb-0">
                <h2 class="title">
                    Riset dan
                    <span>Kajian Akademisi</span>
                </h2>
            </div> 
            <div class="about-feature-item gap-2">
                <div class="feature-content w-100">
                    <div class="feature-text">
                        <h5 class="title"><a href="https://climateactiontracker.org/documents/980/2021_10_CAT_Governance_Report_Indonesia.pdf" target="blank">Climate Action Tracker: Indonesia</a>
                        </h5>
                        <span class="sub-title">Penilaian kebijakan dan aksi mitigasi Indonesia, termasuk kritik terhadap ketergantungan pada batu bara.
                        </span>
                    </div>
                </div>
                <div class="feature-content w-100">
                    <div class="feature-text">
                        <h5 class="title"><a href="https://www.worldbank.org/en/country/indonesia/publication/indonesia-country-climate-and-development-report" target="blank">Studi Tentang Dampak Perubahan Iklim di Indonesia</a>
                        </h5>
                        <span class="sub-title">
                            Indonesia telah membuat komitmen penting dan menyambut adaptasi dan mitigasi iklim. Salah satu tantangan yang dihadapi Indonesia adalah menjaga keseimbangan antara mengurangi emisi gas rumah kaca dan memastikan pertumbuhan lintasan ekonominya untuk mewujudkan aspirasinya menjadi negara berpenghasilan tinggi.
                            <br>
                            Diagnostik Laporan Iklim dan Pembangunan Negara menunjukkan bahwa kedua tujuan dapat dicapai. Ini dimungkinkan melalui implementasi reformasi yang menggabungkan dampak lingkungan dan pembangunan jangka pendek dan dengan demikian mendukung transisi menuju pertumbuhan jangka panjang yang berkelanjutan.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
