@extends('layouts.guest')

@section('content')
  
<section class="breadcrumb-wrapper pb-0 bg-success" style=" background-size: auto;">
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
    <div class="contact-bottom-shape">
        <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
    </div>
</section>

    <section class="tj-project-section-two pb-5 mb-5">
        <div class="container">
            <div class="tj-price-item">
                <span class="save">Save 50%</span>  
                <div class="price-percent">
                    <span class="price-number text-secondary"><s>Rp. 500.000</s></span> <span class="price-number">Rp. 250.000</span>/year
                </div>
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
                 
                <p> 
                    Ikuti petunjuk cara menjadi anggota <a href="{{ route('anggota.cara') }}" class="text-primary">disini.</a>
                </p>
            </div>
        </div>
    </section>
@endsection
