@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Edit Kategori Berita</h3>
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
                        <form action="{{ route('admin-kategori-kumpulan-berita-update', $category->id) }}" method="POST" class="row g-3 needs-validation">
                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $category->name) }}">
                            </div>

                            <div class="col-12">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="desc" name="desc" rows="3" required>{{ old('desc', $category->desc) }}</textarea>
                            </div>

                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-kategori-kumpulan-berita'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
