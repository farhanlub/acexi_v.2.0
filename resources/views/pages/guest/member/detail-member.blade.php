@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-0 bg-success" style=" padding-top: 165px; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Profil Member</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
        </div>
    </section>

    <section class="tj-team-page">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image shadow-sm">
                            <img src="{{ $data->image != null ? asset($data->image) : 'https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg' }}" alt="Image">
                        </div>
                        <a href="{{ route('anggota.anggota-terdaftar') }}" class="btn  btn-danger"><i  class="fa fa-arrow-left me-2"></i> Kembali</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class=" shadow-sm  rounded p-2"> 
                        <table class="table table-striped">
                            <tr>
                                <td class="text-nowrap">Nama</td>
                                <td>: {{ $data->nama_lengkap_on == 'Y' && $data->nama_lengkap ? $data->nama_lengkap : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Email</td>
                                <td>: {{ $data->email_on == 'Y' && $data->email ? $data->email : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Nomor WhatsApp</td>
                                <td>: {{ $data->whatsapp_on == 'Y' && $data->whatsapp ? $data->whatsapp : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">LinkedIn</td>
                                <td>: {{ $data->linkedin_on == 'Y' && $data->linkedin ? $data->linkedin : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Alamat</td>
                                <td>: {{ $data->alamat_on == 'Y' && $data->alamat ? $data->alamat : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Kota</td>
                                <td>: {{ $data->kota_on == 'Y' && $data->kota ? $data->kota : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Provinsi</td>
                                <td>: {{ $data->provinsi_on == 'Y' && $data->provinsi ? $data->provinsi : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Kode Pos</td>
                                <td>: {{ $data->kode_pos_on == 'Y' && $data->kode_pos ? $data->kode_pos : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Negara</td>
                                <td>: {{ $data->negara_on == 'Y' && $data->negara ? $data->negara : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Perusahaan</td>
                                <td>: {{ $data->nama_perusahaan_on == 'Y' && $data->nama_perusahaan ? $data->nama_perusahaan : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Posisi Jabatan</td>
                                <td>: {{ $data->posisi_jabatan_on == 'Y' && $data->posisi_jabatan ? $data->posisi_jabatan : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Bidang Usaha</td>
                                <td>: {{ $data->bidang_usaha_on == 'Y' && $data->bidang_usaha ? $data->bidang_usaha : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Email Perusahaan</td>
                                <td>: {{ $data->email_perusahaan_on == 'Y' && $data->email_perusahaan ? $data->email_perusahaan : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Website Perusahaan</td>
                                <td>: 
                                    @if ($data->website_perusahaan_on == 'Y' && $data->website_perusahaan)
                                        <a href="{{ Str::startsWith($data->website_perusahaan, 'http://') || Str::startsWith($data->website_perusahaan, 'https://') ? $data->website_perusahaan : 'https://' . $data->website_perusahaan }}" target="_blank">{{ $data->website_perusahaan }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Asosiasi</td>
                                <td>: {{ $data->nama_asosiasi_on == 'Y' && $data->nama_asosiasi ? $data->nama_asosiasi : '-' }}</td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
