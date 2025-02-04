@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Edit Data Mitra</h3>
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
                        <img id="preview-image" class="rounded" 
                             src="{{ $mitra->image_url ? asset($mitra->image_url) : '#' }}" 
                             alt="Preview" 
                             style="max-width: 100%; display: {{ $mitra->image_url ? 'block' : 'none' }}; margin-top: 10px;" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin-data-mitra-update', $mitra->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation">
                            @csrf
                            @method('PUT')
                            
                            <div class="col-12">
                                <label class="col-form-label" for="name">Nama Mitra</label>
                                <input class="form-control" name="name" id="name" type="text" required value="{{ old('name', $mitra->name) }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="email">Email Mitra</label>
                                <input class="form-control" name="email" id="email" type="email" required value="{{ old('email', $mitra->email) }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="description">Deskripsi</label>
                                <textarea class="form-control" name="description" id="description" rows="4" required>{{ old('description', $mitra->description) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="website_url">Website URL</label>
                                <input class="form-control" name="website_url" id="website_url" type="url" value="{{ old('website_url', $mitra->website_url) }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label">Upload Gambar</label>
                                <input type="file" class="form-control" name="image_url" id="image_url" accept="image/*">
                            </div>

                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-data-mitra'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("image_url").addEventListener("change", function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById("preview-image");
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@endsection