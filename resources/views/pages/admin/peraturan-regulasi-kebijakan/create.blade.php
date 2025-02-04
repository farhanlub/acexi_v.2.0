@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Regulasi</h3>
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
                            <form action="{{ route('admin-peraturan-regulasi-kebijakan-store') }}" method="POST" class="row g-3 needs-validation">
                                @csrf
                                <div class="col-12">
                                    <label for="title" class="form-label">Judul Regulasi</label>
                                    <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
                                </div>

                                <div class="col-12">
                                    <label for="desc" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="desc" name="desc" rows="3" required>{{ old('desc') }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label for="source" class="form-label">Sumber</label>
                                    <input type="text" class="form-control" id="source" name="source" required value="{{ old('source') }}">
                                </div>

                                <div class="col-12">
                                    <label for="year" class="form-label">Tahun</label>
                                    <input type="number" class="form-control" id="year" name="year" required value="{{ old('year') }}">
                                </div>

                                <div class="col-12">
                                    <label for="category_id" class="form-label">Kategori Regulasi</label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        <option value="" selected disabled>Pilih Kategori</option>
                                        @foreach ($regulationCat as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="regulation_categories_id" class="form-label">Hierarki Regulasi</label>
                                    <select class="form-control" id="regulation_categories_id" name="regulation_categories_id" required>
                                        <option value="" selected disabled>Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ Request('slug') == $category->slug ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    @include('components.buttonForm', ['route' => 'admin-peraturan-regulasi-kebijakan'])
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
