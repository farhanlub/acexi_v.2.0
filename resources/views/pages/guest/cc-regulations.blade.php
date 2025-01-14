@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper bg-success pb-3" style="padding-top: 170px">
        <div class="container">
            <div class="breadcrumb-content-area">
                <div class="breadcrumb-link">
                    <span>
                        <a href="#">
                            <span>Database Peraturan Climate Change</span>
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
                            <h4 class="card-title">Kategori Peraturan</h4>
                            <div class="row g-2 mt-3">
                                @foreach ($categories as $key => $item)
                                    <a href="?tab={{ $item->slug }}" class="btn btn-light border w-100 text-start {{ request('tab') == $item->slug ? 'bg-success-subtle' : '' }} {{ request('tab') == '' && $key == 0 ? 'bg-success-subtle' : '' }}">{{ $item->title }} <small>[{{ count($item->regulationsCC) }}]</small>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-end">
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <select name="year" class="form-select form-select-sm border rounded-end-0 border-success-subtle" id="year-select">
                                    <option value="semua">Semua</option>
                                    @foreach ($yearsArray as $item)
                                        <option value="{{ $item }}" {{ request('year') == $item ? 'selected' : '' }}>{{ $item }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-success btn-sm ps-3 rounded-start-0 pe-3" type="button" id="search-button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div> 
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
                                                <small class="border border-success-subtle text-sm border ps-2 pe-2 rounded">{{ $item->belongToBy->name }}</small>
                                                <button class="btn-secondary btn btn-sm">{{ $item->year }}</button>
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
    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            var selectedYear = document.getElementById('year-select').value;
            var currentUrl = new URL(window.location.href);

            // Jika memilih "Semua", jangan tambahkan parameter 'year' ke URL
            if (selectedYear !== 'semua') {
                currentUrl.searchParams.set('year', selectedYear); // Menambahkan parameter 'year' jika tidak "Semua"
            } else {
                // Jika "Semua" dipilih, hapus parameter 'year' jika ada
                currentUrl.searchParams.delete('year');
            }

            // Menambahkan parameter 'tab' jika ada
            var tab = new URLSearchParams(window.location.search).get('tab');
            if (tab) {
                currentUrl.searchParams.set('tab', tab);
            }

            // Mengarahkan ke URL yang telah diperbarui
            window.location.href = currentUrl.toString();
        });
    </script>
@endsection
