@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Data Pengurus</h3>
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
                        <img id="profile-preview" class="rounded" src="#" alt="Preview Photo" style="max-width: 100%; display: none; margin-top: 10px;" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body animated-form">
                        <form action="{{ route('admin-struktur-pengurus-store') }}" method="POST" class="needs-validation custom-input">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-12">
                                    <ul class="nav nav-tabs" id="management-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active txt-secondary" id="division-tab" data-bs-toggle="tab" href="#division-content" role="tab" aria-controls="division-content" aria-selected="true">
                                                <i class="icofont icofont-ui-user"></i>Bidang - Bidang
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link txt-secondary" id="board-tab" data-bs-toggle="tab" href="#board-content" role="tab" aria-controls="board-content" aria-selected="false">
                                                <i class="icofont icofont-man-in-glasses"></i>Dewan/Pengurus Inti
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-4" id="management-tab-content">
                                        <div class="tab-pane fade show active" id="division-content" role="tabpanel" aria-labelledby="division-tab">
                                            <div class="row">
                                                <div class="col-12 position-relative">
                                                    <label class="form-label" for="division">Bidang</label>
                                                    <select name="division_id" class="form-control select2" id="division" required>
                                                        <option selected disabled value="">Pilih Bidang...</option>
                                                        @foreach ($divisions as $division)
                                                            <option value="{{ $division->id }}" {{ old('division_id') == $division->id ? 'selected' : '' }}>
                                                                {{ $division->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('division_id')
                                                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12 position-relative">
                                                    <label class="form-label" for="division-position">Posisi</label>
                                                    <select name="position" class="form-control select2" id="division-position" required>
                                                        <option selected disabled value="">Pilih Posisi...</option>
                                                        <option value="Ketua">Ketua</option>
                                                        <option value="Wakil Ketua">Wakil Ketua</option>
                                                        <option value="Anggota">Anggota</option>
                                                    </select>
                                                    @error('position')
                                                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="board-content" role="tabpanel" aria-labelledby="board-tab">
                                            <div class="row">
                                                <div class="col-12 position-relative">
                                                    <label class="form-label" for="board">Dewan/Pengurus Inti</label>
                                                    <select name="board_id" class="form-control select2" id="board" required>
                                                        <option selected disabled value="">Pilih Dewan...</option>
                                                        @foreach ($boards as $board)
                                                            <option value="{{ $board->id }}" {{ old('board_id') == $board->id ? 'selected' : '' }}>
                                                                {{ $board->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('board_id')
                                                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12 position-relative">
                                                    <label class="form-label" for="board-position">Posisi</label>
                                                    <select name="board_position" class="form-control select2" id="board-position" required>
                                                        <option selected disabled value="">Pilih Posisi...</option>
                                                        <option value="Ketua">Ketua</option>
                                                        <option value="Wakil Ketua">Wakil Ketua</option>
                                                        <option value="Anggota">Anggota</option>
                                                        <option value="Sekretaris Jenderal">Sekretaris Jenderal</option>
                                                        <option value="Wakil Sekretaris Jenderal">Wakil Sekretaris Jenderal</option>
                                                        <option value="Bendahara">Bendahara</option>
                                                        <option value="Wakil Bendahara">Wakil Bendahara</option>
                                                    </select>
                                                    @error('board_position')
                                                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 position-relative">
                                    <label class="form-label" for="member">Pengurus</label>
                                    <select name="team_id" class="form-control select2" id="member" required>
                                        <option selected disabled value="">Pilih Pengurus...</option>
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>
                                                {{ $team->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('team_id')
                                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    @include('components.buttonForm', ['route' => 'admin-struktur-pengurus'])
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').each(function() {
                $(this).select2({
                    placeholder: $(this).attr('data-placeholder') || "Pilih opsi",
                    allowClear: true
                });
            });
        });
    </script>
@endsection
