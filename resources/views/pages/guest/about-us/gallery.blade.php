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
                            <span><strong>ACEXI</strong></span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($galleries as $key => $item)
                    @php
                        // Menentukan pola untuk empat data pertama: 8, 4, 4, 8, dan seterusnya hanya 4
                        if ($key < 4) {
                            $colClass = [8, 4, 4, 8][$key]; // Menggunakan pola 8, 4, 4, 8 untuk 4 data pertama
                        } else {
                            $colClass = 4; // Kolom berikutnya hanya 4
                        }
                    @endphp
                    <div class="col-lg-{{ $colClass }}">
                        <div class="tj-project-item">
                            <div class="project-image">
                                <img src="{{ asset($item->image) }}" style="height: 263px" alt="Image" class="w-100 object-fit-cover rounded">
                                <div class="project-content">
                                    <h3 class="title"><a href="{{ route('tentang-kami.galeri-detail',$item->slug) }}">{{ $item->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
 
            </div>

        </div>
    </section>
@endsection
