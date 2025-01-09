@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/manfaat_menjadi_anggota.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title" style="font-size: 60px">Manfaat menjadi anggota</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-project-section-two pb-5 mb-5">
        <div class="container">
            <div class="tj-price-item">
                <h5>Biaya Investasi</h5>
                <span class="save">Save 50%</span>
                <div class="price-percent">
                    <span class="price-number text-secondary"><s>Rp. 500.000</s></span> <span class="price-number">Rp. 250.000</span>/year
                </div>
                <hr>
                <div class="price-list my-5">
                    <ul class="dot-style">
                        <li class="style-1">
                            <i class="fa-light fa-check"></i> Ikut berkontribusi nyata dan signifikan dalam upaya mitigasi dan adaptasi perubahan iklim.
                        </li>
                        <li class="style-1">
                            <i class="fa-light fa-check"></i> Pengakuan formal atas keterlibatan dalam bidang pengelolaan emisi karbon, yang dapat memperkuat reputasi dan kredibilitas profesional anggota.
                        </li>
                        <li class="style-1"><i class="fa-light fa-check"></i>
                            Akses terhadap kegiatan sertifikasi di bidang emisi karbon yang khusus untuk anggota maupun umum yang diselenggarakan oleh asosiasi.
                        </li>
                        <li class="style-1"><i class="fa-light fa-check"></i>
                            Akses kepada kegiatan peningkatan kapasitas dan pengetahuan di bidang emisi karbon, mitigasi perubahan iklim, teknologi dan kebijakan terkait, dan lain sebagainya melalui pelatihan, seminar, workshop, dan kegiatan lainnya.
                        </li>
                        <li class="style-1"><i class="fa-light fa-check"></i>
                            Akses kepada jejaring anggota yang luas, yang mencakup pembuat kebijakan, profesional, akademisi, maupun pemerhati di bidang perubahan iklim terutama di bidang emisi karbon.
                        </li>
                        <li class="style-1"><i class="fa-light fa-check"></i>
                            Kesempatan atau ikut berpartisipasi dalam kegiatan advokasi untuk mendorong aspirasi anggota dalam pembentukan kebijakan terkait perubahan iklim terutama emisi karbon.
                        </li>
                        <li class="style-1"><i class="fa-light fa-check"></i>
                            Akses terhadap peluang kolaborasi dalam proyek-proyek, penelitian, atau inisiatif yang mendukung implementasi ekonomi rendah karbon.
                        </li>
                        <li class="style-1"><i class="fa-light fa-check"></i>
                            Akses kepada informasi eksklusif terkait perkembangan terbaru dalam pengelolaan emisi karbon, teknologi hijau, dan kebijakan iklim.
                        </li>
                    </ul>
                </div>
                <a href="https://form.jotform.com/233527511017448" class="btn btn-lg btn-success rounded-0">Daftar Sekarang</a>
                <hr class="mt-5">
                <h5>Belum tahu cara menjadi anggota? </h5>
                <a href="{{ route('anggota.cara') }}" class="btn btn-lg btn-outline-success rounded-0">Ikuti petunjuk disini</a>
            </div>
        </div>
    </section>
@endsection
