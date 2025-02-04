@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Edit Berita Program</h3>
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
                        <img id="preview-image" class="rounded" src="{{ asset($news->image) }}" alt="Preview" style="max-width: 100%; margin-top: 10px;" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body animated-form">
                        <form action="{{ route('admin-program-update', $news->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation custom-input">
                            @csrf
                            @method('PUT') 
                            <div class="col-12">
                                <label class="col-form-label" for="program_kegiatan_id">Program</label>
                                <select class="form-control" name="program_kegiatan_id" id="program_kegiatan_id" required>
                                    <option value="" disabled>Pilih Program</option>
                                    @foreach ($program as $p)
                                        <option value="{{ $p->id }}" {{ $news->program_kegiatan_id == $p->id ? 'selected' : '' }}>
                                            {{ $p->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="title">Judul</label>
                                <input class="form-control" name="title" id="title" type="text" required value="{{ old('title', $news->title) }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="desc">Deskripsi Singkat</label>
                                <textarea class="form-control" name="desc" id="desc" rows="3" required>{{ old('desc', $news->desc) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="content">Konten</label>
                                <textarea class="form-control" name="content" id="summernote" rows="6" required>{{ old('content', $news->content) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label">Upload Gambar Baru (Opsional)</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
                            </div>

                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-program'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('js')
    <!-- jQuery first (required for Summernote) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        // Preview image script
        document.getElementById("image").addEventListener("change", function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById("preview-image");
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Initialize Summernote
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Tulis konten di sini...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'italic', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection