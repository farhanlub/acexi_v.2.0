@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper bg-success pb-3" style="padding-top: 170px">
        <div class="container">
            <div class="breadcrumb-content-area">
                <div class="breadcrumb-link">
                    <span>
                        <a href="#">
                            <span>Database Regulasi dan Kebijakan
                            </span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-page pt-5 pb-5" style="background: var(--tj-color-theme-bg);">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <form action="{{ route('regulasi-dan-kebijakan') }}" method="get">
                                <div class="row justify-content-center align-items-center g-3">
                                    <div class="col-12">
                                        <label for="" class="form-label">Jenis Peraturan</label>
                                        <select name="jenis" class="form-select select2">
                                            <option value="">Semua</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->slug }}" {{ request('jenis') == $item->slug ? 'selected' : '' }}>
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Kategori Peraturan</label>
                                        <select name="kategori" class="form-select select2">
                                            <option value="">Semua</option>
                                            @foreach ($categoryKebijakan as $item)
                                                <option value="{{ $item->slug }}" {{ request('kategori') == $item->slug ? 'selected' : '' }}>
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Tahun</label>
                                        <select name="year" class="form-select form-select-sm border rounded-end-0 border-success-subtle" id="year-select">
                                            <option value="">Semua</option>
                                            @foreach ($yearsArray as $item)
                                                <option value="{{ $item }}" {{ request('year') == $item ? 'selected' : '' }}>{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex gap-2">
                                            <button type="submit" class="btn btn-sm btn-success bg-gradient">Cari</button>
                                            <a href="{{ route('regulasi-dan-kebijakan') }}" class="btn btn-sm bg-gradient btn-danger">Reset</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    @if ($data->isEmpty())
                        <!-- Cek apakah data kosong -->
                        <div class="alert alert-primary" role="alert">
                            Tidak ada data yang ditemukan.
                        </div>
                    @else
                        <div class="row g-3">
                            @foreach ($data as $item)
                                <div class="col-12">
                                    <div class="card text-start border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="ps-1 pe-1 rounded border border-success">{{ $item->belongToKebijakanCategory->title }}</small>
                                                <button class="btn-success bg-gradient btn btn-sm">{{ $item->year }}</button>
                                            </div>
                                            <hr>
                                            <p>{{ $item->title }}</p>
                                            <a class="card-text text-primary" href="{{ $item->source }}" target="_blank">{{ $item->desc }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            {{ $data->appends(['tab' => request('tab'), 'year' => request('year')])->links('vendor.pagination.custom-bootstrap-5') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
