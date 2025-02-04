@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Akun Member</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts -->
    <div class="container-fluid datatable-init">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0">Daftar Akun Member</h5>
                            <a href="{{ route('admin-akun-member-create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Akun</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display table-striped border" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($akun_member as $item)
                                        <tr>
                                            <td>{{ $item->member->nama_lengkap }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="{{ route('admin-akun-member-edit', $item->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $item->id }}" data-name="{{ $item->member->nama_lengkap }}">
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
                    </div>
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
                    Apakah Anda yakin ingin menghapus akun <strong id="modalItemName"></strong> secara permanen?
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
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = document.getElementById('deleteModal');
            const modalItemName = document.getElementById('modalItemName');
            const deleteForm = document.getElementById('deleteForm');

            deleteModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const itemId = button.getAttribute('data-id');
                const itemName = button.getAttribute('data-name');

                modalItemName.textContent = itemName;
                deleteForm.action = `/admin/hapus-akun-member/${itemId}`;
            });
        });
    </script>
@endsection
