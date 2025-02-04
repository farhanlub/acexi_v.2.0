@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Struktur Pengurus </h3>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin-struktur-pengurus-create') }}" class="btn btn-success float-sm-end"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid datatable-init">
        @foreach ($kategori_pengurus as $item)
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0">{{ $item->name }}</h5>
                    </div>
                </div>
                <div class="card-body">
                    @if ($item->bidang && count($item->bidang) > 0)
                        @if ($item->pengurus && count($item->pengurus) > 0)
                            <div class="table-responsive custom-scrollbar">
                                <table class="display table-striped border basic-1">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item->pengurus as $pengurus)
                                            <tr>
                                                <td>{{ $pengurus->team->name }}</td>
                                                <td>{{ $pengurus->role == '' ? 'Pendiri' : $pengurus->role }}</td>
                                                <td>{{ $pengurus->team->email == null ? '-' : $pengurus->team->email }}</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="delete">
                                                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $pengurus->id }}" data-name="{{ $pengurus->team->name }}">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <hr>

                        <div class="row g-3">
                            @foreach ($item->bidang as $bidang)
                                <div class="col-xl-4">
                                    <a href="{{ route('admin-struktur-bidang-pengurus', $bidang->slug) }}">
                                        <div class="card widget-1 h-100">
                                            <div class="card-body">
                                                <div class="widget-content">
                                                    <div>
                                                        <h4><span>{{ $bidang->name }}</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="table-responsive custom-scrollbar">
                            <table class="display table-striped border basic-1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($item->pengurus && count($item->pengurus) > 0)
                                        @foreach ($item->pengurus as $pengurus)
                                            <tr>
                                                <td>{{ $pengurus->team->name }}</td>
                                                <td>{{ $pengurus->role == '' ? 'Pendiri' : $pengurus->role }}</td>
                                                <td>{{ $pengurus->team->email == null ? '-' : $pengurus->team->email }}</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="delete">
                                                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $pengurus->id }}" data-name="{{ $pengurus->team->name }}">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data struktur <strong id="modalItemName"></strong> secara permanen?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(".basic-1").each(function() {
            $(this).DataTable({
                "order": []
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = document.getElementById('deleteModal');
            const modalItemName = document.getElementById('modalItemName');
            const deleteForm = document.getElementById('deleteForm');

            deleteModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const itemId = button.getAttribute('data-id');
                const itemName = button.getAttribute('data-name');

                modalItemName.textContent = itemName;
                deleteForm.action = `/admin/hapus-struktur-pengurus/${itemId}`;
            });
        });
    </script>
@endsection
