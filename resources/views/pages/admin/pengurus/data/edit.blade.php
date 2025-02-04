@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Edit Data Pengurus</h3>
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
            <div class="col-md-6">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-4">
                        <img id="preview-image" class="rounded" src="{{ $team->image ? asset($team->image) : '#' }}" alt="Preview" style="max-width: 100%; display: {{ $team->image ? 'block' : 'none' }}; margin-top: 10px;" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body animated-form">
                        <form action="{{ route('admin-data-pengurus-update', $team->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation custom-input">
                            @csrf
                            @method('PUT')

                            <div class="col-lg-6">
                                <label class="col-form-label" for="name">Nama Lengkap + Gelar</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="Masukkan nama" value="{{ old('name', $team->name) }}" required>
                                @error('name')
                                    <div class="invalid-tooltip d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <label class="col-form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $team->email) }}" placeholder="Masukkan email">
                                @error('email')
                                    <div class="invalid-tooltip d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="col-form-label">Upload Gambar</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                            </div>
                            <div class="col-lg-6">
                                <label class="col-form-label" for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $team->facebook) }}" placeholder="Masukkan URL Facebook">
                            </div>

                            <div class="col-lg-6">
                                <label class="col-form-label" for="linkedin">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $team->linkedin) }}" placeholder="Masukkan URL LinkedIn">
                            </div>

                            <div class="col-lg-6">
                                <label class="col-form-label" for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $team->twitter) }}" placeholder="Masukkan URL Twitter">
                            </div>

                            <div class="col-lg-6">
                                <label class="col-form-label" for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $team->instagram) }}" placeholder="Masukkan URL Instagram">
                            </div>

                            <div class="col-lg-6">
                                <input type="checkbox" id="pakar" name="pakar" value="y" {{ old('pakar', $team->pakar) == 'y' ? 'checked' : '' }}>
                                <label for="pakar">Pakar</label>
                            </div>

                            <div class="col-lg-6">
                                <input type="checkbox" id="display_in_home" name="display_in_home" value="1" {{ old('display_in_home', $team->display_in_home) == 'y' ? 'checked' : '' }}>
                                <label for="display_in_home">Tampilkan di Beranda</label>
                            </div>

                            <div class="col-12" id="expert_scope_container" style="display: {{ old('pakar', $team->pakar) == 'y' ? 'block' : 'none' }};">
                                <label class="col-form-label" for="expert_scope_id">Expert Scope</label>
                                <select name="expert_scope_id" class="form-control" id="expert_scope_id">
                                    <option selected disabled value="">Pilih...</option>
                                    @foreach ($expertScopes as $scope)
                                        <option value="{{ $scope->id }}" {{ old('expert_scope_id', $team->expert_scope_id) == $scope->id ? 'selected' : '' }}>
                                            {{ $scope->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-data-pengurus'])
                            </div>

                        </form>
                        <script>
                            document.getElementById("image").addEventListener("change", function(event) {
                                let reader = new FileReader();
                                reader.onload = function() {
                                    let output = document.getElementById("preview-image");
                                    output.src = reader.result;
                                    output.style.display = "block";
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            });

                            document.getElementById("pakar").addEventListener("change", function() {
                                let expertScopeContainer = document.getElementById("expert_scope_container");
                                expertScopeContainer.style.display = this.checked ? "block" : "none";
                            });

                            @if (old('pakar', $team->pakar) == 'y')
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.getElementById("expert_scope_container").style.display = "block";
                                });
                            @endif
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
