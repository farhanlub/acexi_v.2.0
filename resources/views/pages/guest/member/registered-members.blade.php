@extends('layouts.guest')

@section('css') 
    <link href="https://cdn.datatables.net/2.2.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
@endsection

@section('content')
    <section class="breadcrumb-wrapper pb-0" style="padding-top: 150px" data-bg-image="{{ asset('assets/images/banner/banner-visimisi.jpg') }}">
        <div class="container">
        </div>
    </section>
    <section class="tj-price-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="price-top-content mb-0">
                        <div class="tj-sec-heading-two" style="max-width: 100%">
                            <h2 class="title">
                                Anggota
                                <span><b>Terdaftar</b></span>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-nowrap">ID Member</th>
                        <th class="text-nowrap">Nama Lengkap</th>
                        <th class="text-nowrap">Nama Perusahaan</th>
                        <th class="text-nowrap">Posisi / Jabatan</th>
                        <th class="text-nowrap">Bidang Usaha</th>
                        <th class="text-nowrap">Website Perusahaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $item)
                        <tr>
                            <td>{{ $item->id_member_on == 'Y' ? $item->id_member : '-' }}</td>
                            <td> 
                                @if ($item->nama_lengkap_on == 'Y' && $item->nama_lengkap != '')
                                    <a style="text-decoration:none; color: #065cb9" href="{{ route('anggota.anggota-terdaftar.detail', $item->id_member) }}"> {{ $item->nama_lengkap }}
                                    </a> 
                                @endif
                            </td>
                            <td>{{ $item->nama_perusahaan_on == 'Y' ? $item->nama_perusahaan : '-' }}</td>
                            <td>{{ $item->posisi_jabatan_on == 'Y' ? $item->posisi_jabatan : '-' }}</td>
                            <td>{{ $item->bidang_usaha_on == 'Y' ? $item->bidang_usaha : '-' }}</td>
                            <td>
                                @if ($item->website_perusahaan_on == 'Y' && $item->website_perusahaan != '')
                                    <a class="btn btn-sm btn-light border" href="{{ Str::startsWith($item->website_perusahaan, 'http://') || Str::startsWith($item->website_perusahaan, 'https://') ? $item->website_perusahaan : 'https://' . $item->website_perusahaan }}" target="_blank">
                                        <i class="fa fa-globe"></i> Lihat Website
                                    </a> 
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('js') 
    <script src="https://cdn.datatables.net/2.2.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.0/js/dataTables.bootstrap5.js"></script> 

    <script>
        $(document).ready(function() { 
            new DataTable('#example', {
                order: []
            });
        });
    </script>

    <style>
        div.dt-container div.dt-search input {
            margin-left: 0em !important;
            border-color: #dee2e6 !important;
        }
    </style>
@endsection
