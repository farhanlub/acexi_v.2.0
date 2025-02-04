@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Data Member</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-4"> 
                        <img id="preview-image" class="rounded" src="#" alt="Preview" style="max-width: 100%; display: none; margin-top: 10px;" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body animated-form">
                        <form action="{{ route('admin-data-member-store') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation custom-input">
                            @csrf
                            @method('POST')
                            
                            <!-- Personal Information -->
                            <h5 class="card-title">Informasi Pribadi</h5>
                            
                            <div class="col-md-6">
                                <label class="col-form-label" for="nama_lengkap">Nama Lengkap</label>
                                <input class="form-control" name="nama_lengkap" id="nama_lengkap" type="text" required value="{{ old('nama_lengkap') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="id_member">ID Member</label>
                                <input class="form-control" name="id_member" id="id_member" type="text" required value="{{ old('id_member') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir" id="tanggal_lahir" type="date" required value="{{ old('tanggal_lahir') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="email">Email</label>
                                <input class="form-control" name="email" id="email" type="email" required value="{{ old('email') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="whatsapp">WhatsApp</label>
                                <input class="form-control" name="whatsapp" id="whatsapp" type="text" required value="{{ old('whatsapp') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="linkedin">LinkedIn</label>
                                <input class="form-control" name="linkedin" id="linkedin" type="url" value="{{ old('linkedin') }}">
                            </div>

                            <!-- Address Information -->
                            <h5 class="card-title mt-4">Informasi Alamat</h5>

                            <div class="col-12">
                                <label class="col-form-label" for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" required>{{ old('alamat') }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="kota">Kota</label>
                                <input class="form-control" name="kota" id="kota" type="text" required value="{{ old('kota') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="provinsi">Provinsi</label>
                                <input class="form-control" name="provinsi" id="provinsi" type="text" required value="{{ old('provinsi') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="kode_pos">Kode Pos</label>
                                <input class="form-control" name="kode_pos" id="kode_pos" type="text" required value="{{ old('kode_pos') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="negara">Negara</label>
                                <input class="form-control" name="negara" id="negara" type="text" required value="{{ old('negara') }}">
                            </div>

                            <!-- Company Information -->
                            <h5 class="card-title mt-4">Informasi Perusahaan</h5>

                            <div class="col-md-6">
                                <label class="col-form-label" for="nama_perusahaan">Nama Perusahaan</label>
                                <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" type="text" required value="{{ old('nama_perusahaan') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="posisi_jabatan">Posisi/Jabatan</label>
                                <input class="form-control" name="posisi_jabatan" id="posisi_jabatan" type="text" required value="{{ old('posisi_jabatan') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="bidang_usaha">Bidang Usaha</label>
                                <input class="form-control" name="bidang_usaha" id="bidang_usaha" type="text" required value="{{ old('bidang_usaha') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="email_perusahaan">Email Perusahaan</label>
                                <input class="form-control" name="email_perusahaan" id="email_perusahaan" type="email" required value="{{ old('email_perusahaan') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="website_perusahaan">Website Perusahaan</label>
                                <input class="form-control" name="website_perusahaan" id="website_perusahaan" type="url" value="{{ old('website_perusahaan') }}">
                            </div>

                            <!-- Association Information -->
                            <h5 class="card-title mt-4">Informasi Asosiasi</h5>

                            <div class="col-md-6">
                                <label class="col-form-label" for="aktif_asosiasi_lain">Aktif di Asosiasi Lain?</label>
                                <select class="form-control" name="aktif_asosiasi_lain" id="aktif_asosiasi_lain" required>
                                    <option value="no" {{ old('aktif_asosiasi_lain') == 'no' ? 'selected' : '' }}>Tidak</option>
                                    <option value="yes" {{ old('aktif_asosiasi_lain') == 'yes' ? 'selected' : '' }}>Ya</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="nama_asosiasi_container" style="display: none;">
                                <label class="col-form-label" for="nama_asosiasi">Nama Asosiasi</label>
                                <input class="form-control" name="nama_asosiasi" id="nama_asosiasi" type="text" value="{{ old('nama_asosiasi') }}">
                            </div>

                            <!-- Photo Upload -->
                            <h5 class="card-title mt-4">Foto Profil</h5>

                            <div class="col-12">
                                <label class="col-form-label">Upload Foto</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                            </div>

                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-data-member'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image before upload
        document.getElementById("image").addEventListener("change", function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById("preview-image");
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Show/hide asosiasi name field based on selection
        document.getElementById("aktif_asosiasi_lain").addEventListener("change", function() {
            let container = document.getElementById("nama_asosiasi_container");
            container.style.display = this.value === 'yes' ? "block" : "none";
            let input = document.getElementById("nama_asosiasi");
            input.required = this.value === 'yes';
        });

        // Set initial state of asosiasi field on page load
        document.addEventListener("DOMContentLoaded", function() {
            let select = document.getElementById("aktif_asosiasi_lain");
            let container = document.getElementById("nama_asosiasi_container");
            container.style.display = select.value === 'yes' ? "block" : "none";
            let input = document.getElementById("nama_asosiasi");
            input.required = select.value === 'yes';
        });
    </script>
@endsection