@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-5" data-bg-image="https://png.pngtree.com/thumb_back/fh260/background/20210115/pngtree-original-hand-painted-spring-outing-green-public-account-cover-background-image_519746.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title m-0">Profil Anggota</h1>
                            <!-- Logout Form -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fa fa-arrow-left me-2"></i> Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-team-page">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <strong>Berhasil!</strong> {{ session('status') }}
                </div>
            @endif
            @if (Auth::user()->role == 'pengurus' || Auth::user()->role == 'admin')
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tj-team-item">
                            <div class="team-image shadow-sm">
                                <img src="{{ Auth::user()->pengurus->image != null ? asset(Auth::user()->pengurus->image) : 'https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg' }}" alt="Image">
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="{{ route('profile.edit.kata-sandi') }}" class="btn w-100 btn-sm btn-outline-danger border"><i class="fa fa-key me-2"></i> Ganti sandi</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('profile.edit') }}" class="btn w-100 btn-sm btn-outline-success border"><i class="fa fa-edit me-2"></i> Edit profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class=" shadow-sm  rounded p-2">
                            <table class="table table-striped">
                                <tr>
                                    <td class="text-nowrap">Nama</td>
                                    <td>: {{ Auth::user()->pengurus->name }}</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Email</td>
                                    <td>: {{ Auth::user()->pengurus->email ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Facebook</td>
                                    <td>: {{ Auth::user()->pengurus->facebook ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Linkedin</td>
                                    <td>: {{ Auth::user()->pengurus->linkedin ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Twitter</td>
                                    <td>: {{ Auth::user()->pengurus->twitter ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Instagram</td>
                                    <td>: {{ Auth::user()->pengurus->instagram ?? '-' }}</td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
            @else
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tj-team-item">
                            <div class="team-image shadow-sm">
                                <img src="{{ Auth::user()->member->image != null ? asset(Auth::user()->member->image) : 'https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg' }}" alt="Image">
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="{{ route('profile.edit.kata-sandi') }}" class="btn w-100 btn-sm btn-outline-danger border"><i class="fa fa-key me-2"></i> Ganti sandi</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('profile.edit') }}" class="btn w-100 btn-sm btn-outline-success border"><i class="fa fa-edit me-2"></i> Edit profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class=" shadow-sm  rounded p-2">
                            <table class="table table-striped">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Tampilkan</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Nama</td>
                                    <td>: {{ Auth::user()->member->nama_lengkap }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->nama_lengkap_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Email</td>
                                    <td>: {{ Auth::user()->member->email }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->email_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Nomor WhatsApp</td>
                                    <td>: {{ Auth::user()->member->whatsapp }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->whatsapp_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">LinkedIn</td>
                                    <td>: {{ Auth::user()->member->linkedin }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->linkedin_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Alamat</td>
                                    <td>: {{ Auth::user()->member->alamat }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->alamat_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Kota</td>
                                    <td>: {{ Auth::user()->member->kota }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->kota_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Provinsi</td>
                                    <td>: {{ Auth::user()->member->provinsi }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->provinsi_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Kode Pos</td>
                                    <td>: {{ Auth::user()->member->kode_pos }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->kode_pos_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Negara</td>
                                    <td>: {{ Auth::user()->member->negara }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->negara_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Perusahaan</td>
                                    <td>: {{ Auth::user()->member->nama_perusahaan }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->nama_perusahaan_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Posisi Jabatan</td>
                                    <td>: {{ Auth::user()->member->posisi_jabatan }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->posisi_jabatan_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Bidang Usaha</td>
                                    <td>: {{ Auth::user()->member->bidang_usaha }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->bidang_usaha_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Email Perusahaan</td>
                                    <td>: {{ Auth::user()->member->email_perusahaan }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->email_perusahaan_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Website Perusahaan</td>
                                    <td>:
                                        <a href="{{ Str::startsWith(Auth::user()->member->website_perusahaan, 'http://') || Str::startsWith(Auth::user()->member->website_perusahaan, 'https://') ? Auth::user()->member->website_perusahaan : 'https://' . Auth::user()->member->website_perusahaan }}" target="_blank">{{ Auth::user()->member->website_perusahaan }}</a>
                                    </td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->website_perusahaan_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Asosiasi</td>
                                    <td>: {{ Auth::user()->member->nama_asosiasi_on == 'Y' && Auth::user()->member->nama_asosiasi ? Auth::user()->member->nama_asosiasi : '-' }}</td>
                                    <td class="text-center">
                                        @if (Auth::user()->member->nama_asosiasi_on == 'Y')
                                            <span class="text-success"><i class="fa fa-check-circle"></i></span>
                                        @else
                                            <span class="text-danger"><i class="fa fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection
