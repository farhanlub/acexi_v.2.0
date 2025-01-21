@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('storage/assets/images/banner/hubungi_kami.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Hubungi Kami</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Beranda</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Hubungi Kami</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tj-contact-section tj-contact-page pb-5">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="contact-left-content">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title">Untuk Dunia Baru</span>
                            <h2 class="title">
                                Mari Membuat
                                <span>Perubahan</span>
                            </h2>
                            <div class="desc">
                                <p>
                                    Kasus-kasus ini sangat sederhana dan mudah untuk dibedakan. Dalam waktu senggang, hindari hal-hal yang tidak perlu.
                                </p>
                            </div>
                            <div class="contact-map">
                                <iframe src="https://maps.google.com/maps?q=manhattan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border: 0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="text" id="nameOne" name="name" placeholder="Nama Anda..." required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="text" id="phone" name="phone" placeholder="Telepon..." required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="email" id="emailTwo" name="email" placeholder="Masukkan Email Anda" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="text" id="site" name="website" placeholder="Masukkan Situs Web Anda" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input">
                                    <textarea id="message" name="message" placeholder="Tulis Pesan Anda..."></textarea>
                                </div>
                            </div>
                            <div class="tj-contact-button">
                                <button class="tj-primary-btn2 btn" type="submit" value="submit">
                                    Hubungi Kami <i class="flaticon-right-arrow"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
