@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $bidang->name }}</h3>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin-struktur-pengurus-create') }}" class="btn btn-success float-sm-end"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid datatable-init">
        <div class="card text-start">
            <div class="card-body">
                <div class="col-12 position-relative">
                    <select class="form-control select2" id="division-position">
                        @foreach ($bidangs as $item)
                            <option value="{{ route('admin-struktur-bidang-pengurus', $item->slug) }}" {{ $bidang->slug == $item->slug ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('position')
                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                    @enderror
                </div>
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
                            @if ($bidang->pengurus && count($bidang->pengurus) > 0)
                                @foreach ($bidang->pengurus as $pengurus)
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
            </div>
        </div>

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

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".basic-1").each(function() {
            $(this).DataTable({
                "order": []
            });
        });
        $(document).ready(function() {
            // Initialize Select2
            $('.select2').select2();

            // Add change event handler
            $('#division-position').on('change', function() {
                const selectedUrl = $(this).val();
                if (selectedUrl) {
                    window.location.href = selectedUrl;
                }
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
