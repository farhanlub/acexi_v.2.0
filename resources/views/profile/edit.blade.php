@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-5" data-bg-image="https://png.pngtree.com/thumb_back/fh260/background/20210115/pngtree-original-hand-painted-spring-outing-green-public-account-cover-background-image_519746.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title m-0">Edit Profil</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-team-page">
        <div class="container">
            <div class="alert alert-info" role="alert">
                <strong>Informasi:</strong> Anda dapat mengatur data mana saja yang ingin ditampilkan di menu Anggota Terdaftar.
            </div>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tj-team-item">
                            <div class="team-image shadow-sm">
                                <!-- Preview Image -->
                                <img id="profile-image" src="{{ Auth::user()->member->image != null ? asset(Auth::user()->member->image) : 'https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg' }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="form-group mt-3">
                                <!-- Image Upload -->
                                <label for="image-upload" class="btn btn-light border"><i class="fa fa-upload me-2"></i> Unggah gambar</label>
                                <input type="file" id="image-upload" class="form-control-file" accept="image/*" name="image" style="display: none;">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shadow-sm rounded p-2">
                            @method('PUT')
                            @csrf
                            <table class="table table-striped">
                                <tr>
                                    <td></td>
                                    <td class="w-75"></td>
                                    <td>Tampilkan</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Nama</td>
                                    <td>
                                        <input type="text" class="form-control border" name="nama_lengkap" value="{{ old('nama_lengkap', Auth::user()->member->nama_lengkap) }}">
                                        @error('nama_lengkap')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="nama_lengkap_on" {{ Auth::user()->member->nama_lengkap_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Email</td>
                                    <td>
                                        <input type="email" class="form-control" readonly disabled value="{{ Auth::user()->member->email }}">
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="email_on" {{ Auth::user()->member->email_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Nomor WhatsApp</td>
                                    <td>
                                        <input type="text" class="form-control border" name="whatsapp" value="{{ old('whatsapp', Auth::user()->member->whatsapp) }}">
                                        @error('whatsapp')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="whatsapp_on" {{ Auth::user()->member->whatsapp_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">LinkedIn</td>
                                    <td>
                                        <input type="text" class="form-control border" name="linkedin" value="{{ old('linkedin', Auth::user()->member->linkedin) }}">
                                        @error('linkedin')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="linkedin_on" {{ Auth::user()->member->linkedin_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Alamat</td>
                                    <td>
                                        <input type="text" class="form-control border" name="alamat" value="{{ old('alamat', Auth::user()->member->alamat) }}">
                                        @error('alamat')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="alamat_on" {{ Auth::user()->member->alamat_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Kota</td>
                                    <td>
                                        <input type="text" class="form-control border" name="kota" value="{{ old('kota', Auth::user()->member->kota) }}">
                                        @error('kota')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="kota_on" {{ Auth::user()->member->kota_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Provinsi</td>
                                    <td>
                                        <input type="text" class="form-control border" name="provinsi" value="{{ old('provinsi', Auth::user()->member->provinsi) }}">
                                        @error('provinsi')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="provinsi_on" {{ Auth::user()->member->provinsi_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Kode Pos</td>
                                    <td>
                                        <input type="text" class="form-control border" name="kode_pos" value="{{ old('kode_pos', Auth::user()->member->kode_pos) }}">
                                        @error('kode_pos')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="kode_pos_on" {{ Auth::user()->member->kode_pos_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Negara</td>
                                    <td>
                                        <input type="text" class="form-control border" name="negara" value="{{ old('negara', Auth::user()->member->negara) }}">
                                        @error('negara')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="negara_on" {{ Auth::user()->member->negara_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Perusahaan</td>
                                    <td>
                                        <input type="text" class="form-control border" name="nama_perusahaan" value="{{ old('nama_perusahaan', Auth::user()->member->nama_perusahaan) }}">
                                        @error('nama_perusahaan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="nama_perusahaan_on" {{ Auth::user()->member->nama_perusahaan_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Posisi Jabatan</td>
                                    <td>
                                        <input type="text" class="form-control border" name="posisi_jabatan" value="{{ old('posisi_jabatan', Auth::user()->member->posisi_jabatan) }}">
                                        @error('posisi_jabatan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="posisi_jabatan_on" {{ Auth::user()->member->posisi_jabatan_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Bidang Usaha</td>
                                    <td>
                                        <input type="text" class="form-control border" name="bidang_usaha" value="{{ old('bidang_usaha', Auth::user()->member->bidang_usaha) }}">
                                        @error('bidang_usaha')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="bidang_usaha_on" {{ Auth::user()->member->bidang_usaha_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Email Perusahaan</td>
                                    <td>
                                        <input type="email" class="border form-control" name="email_perusahaan" value="{{ old('email_perusahaan', Auth::user()->member->email_perusahaan) }}">
                                        @error('email_perusahaan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="email_perusahaan_on" {{ Auth::user()->member->email_perusahaan_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Website Perusahaan</td>
                                    <td>
                                        <input type="text" class="form-control border" placeholder="https://" name="website_perusahaan" value="{{ old('website_perusahaan', Auth::user()->member->website_perusahaan) }}">
                                        @error('website_perusahaan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="website_perusahaan_on" {{ Auth::user()->member->website_perusahaan_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Asosiasi</td>
                                    <td>
                                        <input type="text" class="form-control border" name="nama_asosiasi" value="{{ old('nama_asosiasi', Auth::user()->member->nama_asosiasi) }}">
                                        @error('nama_asosiasi')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="nama_asosiasi_on" {{ Auth::user()->member->nama_asosiasi_on == 'Y' ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            </table>
                            <div class="d-flex gap-2">
                                <a href="{{ route('profile') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('js')
    <script>
        document.getElementById('image-upload').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('profile-image').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@endsection
