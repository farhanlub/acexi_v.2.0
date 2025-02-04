@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Berita</h3>
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
                <div class="card">
                    <div class="card-body animated-form">
                        <form action="{{ route('admin-kumpulan-berita-store') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation custom-input">
                            @csrf
                            @method('POST')

                            <div class="col-12">
                                <label class="col-form-label" for="program_kegiatan_id">Program</label>
                                <select class="form-control" name="program_kegiatan_id" id="program_kegiatan_id" required>
                                    <option value="" selected disabled>Pilih Program</option>
                                    @foreach ($program as $p)
                                        <option value="{{ $p->id }}" {{ old('program_kegiatan_id', request('slug')) == $p->slug ? 'selected' : '' }}>
                                            {{ $p->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="title">Judul</label>
                                <input class="form-control" name="title" id="title" type="text" required value="{{ old('title') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="desc">Deskripsi Singkat</label>
                                <textarea class="form-control" name="desc" id="desc" rows="3" required>{{ old('desc') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="content">Sumber</label>
                                <input class="form-control" name="content" id="content" type="url" required value="{{ old('content') }}">
                            </div>
                            <div class="col-12">
                                <label class="col-form-label" for="image">Gambar</label>
                                <input class="form-control" name="image" id="title" type="url" required value="{{ old('image') }}">
                            </div>
 

                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-kumpulan-berita'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 
