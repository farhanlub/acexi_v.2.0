@extends('layouts.guest')

@section('content')
    <section class="tj-slider-section">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner1.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">ACEXI</h1>
                            <h2 class="slider-sub-title">ASSOCIATION OF CARBON EMISSION EXPERTS <span>INDONESIA</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Driving AMBITIONS to ACTION
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="{{ route('tentang-kami.profil') }}">
                                        Selenggkapnya <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('storage/assets/images/banner/banner2.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Berita terkini</h1>
                            <h2 class="slider-sub-title">Carbon Emission & <span>Isu Lingkungan</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Dapatkan informasi terbaru seputar emisi karbon, keberlanjutan, dan isu lingkungan lainnya hanya di sini
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="contact.html">
                                        Selengkapnya <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image" data-bg-image="{{ asset('assets/images/banner/banner3.jpg') }}"></div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Harnessing The Wind</h1>
                            <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered form, passage.
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="contact.html">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="slider-sec-shape">
            <img src="assets/images/shape/hero-shape.svg" alt="Shape" />
        </div>
        <div class="tj-service-item">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href=""><img style="height: 200px;" src="https://awsimages.detik.net.id/visual/2022/01/20/ptijk-2022_169.jpeg?w=400&q=90" class="object-fit-cover" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="">Taksonomi Hijau adalah Masa Depan Indonesia! Kok Bisa?</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href=""><img style="height: 200px;" src="https://ppid.menlhk.go.id/media/articles/5/6DyB_WhatsApp%20Image%202023-10-11%20at%2015.18.06%20(1).jpeg" class="object-fit-cover" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Nov 12, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="">Perdagangan Karbon untuk Pencapaian Target NDC, Kontribusi Indonesia bagi Agenda Perubahan Iklim Global</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-blog-item-two">
                        <div class="blog-image">
                            <a href=""><img style="height: 200px;" src="https://ppid.menlhk.go.id/media/articles/5/Ksq6_IMG-20240506-WA0021.jpg" class="object-fit-cover" alt="Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Feb 22, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <h5 class="title">
                                <a href="">Menteri LHK : Perdagangan Karbon Diatur dengan Pondasi Governance dan Kedaulatan Negara</a>
                            </h5>
                            <div class="tj-blog-button d-flex">
                                <a class="tj-secondary-btn btn" href="">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="tj-testimonial-section-two pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumb-content-area">
                        <div class="active-image">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial_active_img @if ($loop->first) active @endif">
                                    <img src="{{ asset($testimonial->image_large) }}" alt="Image">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper thumb-testimonial-slider">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide @if ($loop->first) swiper-slide-active @endif">
                                        <div class="thumb-image">
                                            <img src="{{ asset($testimonial->image_small) }}" alt="Image">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content-area">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title">Testimonials</span>
                            <h2 class="title">Review from <span>Experts</span></h2>
                        </div>
                    </div>
                    <div class="swiper thumb-slider2">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide @if ($loop->first) swiper-slide-active @endif">
                                    <div class="testimonial-slider-item">
                                        <div class="desc">
                                            <p>{{ $testimonial->testimonial_text }}</p>
                                        </div>
                                        <div class="testimonial-auother">
                                            <div class="quote-icon">
                                                <img src="assets/images/icon/quote.svg" alt="Icon">
                                            </div>
                                            <div class="testimonial-text">
                                                <h3 class="title">{{ $testimonial->name }} <span>{{ $testimonial->last_name }}</span></h3>
                                                <span class="sub-title">{{ $testimonial->role }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-service-section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two">
                        <span class="sub-title">Our programs and activities</span>
                        <h2 class="title">
                            Program dan Kegiatan
                            <span>ACEXI</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper tj-service-slider">
                        <div class="swiper-wrapper">
                            @foreach ($programKegiatan as $program)
                                <div class="swiper-slide">
                                    <div class="tj-service-item-three">
                                        <div class="service-image">
                                            <img src="{{ asset($program->image) }}" alt="Image">
                                            <div class="service-icon">
                                                <i><img src="{{ asset('assets/images/logos/logo.png') }}" alt=""></i> <!-- Ganti dengan ikon sesuai kebutuhan -->
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h5 class="title">
                                                <a href="{{ route('program-kegiatan-kategori', $program->slug) }}">{{ $program->title }}</a>
                                            </h5>
                                            <div class="desc">
                                                <p>{{ $program->description }}</p>
                                            </div>
                                            <div class="read-more">
                                                <a class="read-btn" href="{{ route('program-kegiatan-kategori', $program->slug) }}">See More <i class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Swiper Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Swiper Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== Counter Section Start =========-->
    <section class="tj-counter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="counter-content-area">
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-experience"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="48">0</span>+</div>
                                <span class="sub-title">Jumlah Pakar</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-completed-task"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="239">0</span>+</div>
                                <span class="sub-title">Jumlah Pengurus</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="230">0</span>+</div>
                                <span class="sub-title">Jumlah Anggota</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-timeline"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="20">0</span>+</div>
                                <span class="sub-title">Jumlah Mitra</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="counter-wrapper">
                        <img src="{{ asset('assets/images/banner/our-team-banner.jpg') }}" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Counter Section End =========-->

    <!--=========== Process Section Start =========-->
    <section class="tj-process-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Lingkup Kepakaran</span>
                        <h2 class="sec-title">
                            ACEXI Memiliki Lingkup Kepakaran yang Luas
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($expertScopes as $scope)
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="tj-process-item">
                                <img src="{{ asset($scope->image) }}" alt="Image" />
                                <div class="process-content">
                                    <div class="process-icon">
                                        <i class="{{ $scope->icon }}"></i>
                                    </div>
                                    <div class="process-title">
                                        <h5 class="title">{{ $scope->title }}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========== Process Section End =========-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content-area">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Pakar</span>
                            <h2 class="sec-title">
                                Kolaborasi, Dedikasi, dan Aksi
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($pakars as $member)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tj-team-item">
                            <div class="team-image">
                                <img src="{{ asset($member->image) }}" alt="Image" />
                            </div>
                            <div class="team-content">
                                <div class="team-auother">
                                    <h5 class="title">{{ $member->name }}</h5>
                                    <span class="sub-title">{{ $member->title }}</span>
                                </div>
                                <div class="team-share">
                                    <ul class="dot-style team-social">
                                        <li>
                                            <i class="fa-regular fa-share-nodes"></i>
                                            <ul class="dot-style team-social-icon">
                                                <li><a href="{{ $member->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="{{ $member->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="{{ $member->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="{{ $member->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="service-button">
                <a class="tj-primary-btn btn" href="#"> See More <i class="flaticon-right-arrow"></i> </a>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->

    <!--=========== Faq Section Start =========-->
    <section class="tj-faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-four text-center">
                        <span class="sub-title">FAQ</span>
                        <h2 class="sec-title">Pertanyaan yang Sering<span>Diajukan</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="ItemOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa yang dimaksud dengan Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>Ahli Emisi Karbon Expert Indonesia adalah profesional yang memiliki pengetahuan mendalam tentang emisi karbon, praktik keberlanjutan, dan solusi untuk mengurangi dampak lingkungan. Mereka membantu perusahaan dan organisasi untuk mengelola dan mengurangi jejak karbon mereka.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa saja layanan yang dapat diberikan oleh Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>Ahli Emisi Karbon Expert Indonesia menyediakan berbagai layanan, termasuk penilaian emisi karbon, konsultasi keberlanjutan, dan pengembangan strategi hijau untuk membantu klien mengurangi dampak lingkungan mereka.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah Ahli Emisi Karbon Expert Indonesia juga memberikan pelatihan atau workshop?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>Ya, Ahli Emisi Karbon Expert Indonesia menyelenggarakan pelatihan dan workshop untuk membantu individu dan organisasi memahami praktik keberlanjutan, mengukur emisi karbon, dan mengembangkan solusi berkelanjutan.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="ItemTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Bagaimana caranya untuk bergabung menjadi anggota ACEXI?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>Anda bisa mendaftar dengan mengisi formulir yang sudah kami sediakan di halaman Anggota, atau bisa melalui link berikut</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana saya dapat menjadi Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>Untuk menjadi Ahli Emisi Karbon Expert Indonesia, Anda perlu memiliki pendidikan dan pengalaman yang relevan dalam bidang keberlanjutan, emisi karbon, atau disiplin ilmu terkait. Selain itu, sertifikasi atau pelatihan tambahan dapat menjadi nilai tambah.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Bagaimana perusahaan atau organisasi dapat bekerja sama dengan Ahli Emisi Karbon Expert Indonesia?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>Perusahaan atau organisasi yang ingin bekerja sama dengan Ahli Emisi Karbon Expert Indonesia dapat menghubungi kami melalui formulir kontak di situs web atau melalui email. Kami akan segera merespons permintaan Anda.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
