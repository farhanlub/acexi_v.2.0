@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Tambah Kategori Tren Terbaru</h3>
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
                        <form action="{{ route('admin-kategori-tren-terbaru-store') }}" method="POST" class="row g-3 needs-validation">
                            @csrf
                            <div class="col-12">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                            </div>

                            <div class="col-12">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="desc" name="desc" rows="3" required>{{ old('desc') }}</textarea>
                            </div>

                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-kategori-tren-terbaru'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
