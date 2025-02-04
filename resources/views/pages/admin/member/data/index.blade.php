@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Data Member </h3>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin-data-member-create') }}" class="btn btn-success float-sm-end"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid datatable-init">
        <div class="card text-start">
            <div class="card-body">
                <div class="table-responsive custom-scrollbar">
                    <table class="display table-striped border basic-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $key => $member)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $member->nama_lengkap }}</td>
                                    <td>{{ $member->email == null ? '-' : $member->email }}</td>
                                    <td>{{ $member->created_at != null ? date('d-M-Y', strtotime($member->created_at)) : '-' }}</td>
                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="{{ route('admin-data-member-edit', $member->id) }}"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                            <li class="delete">
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $member->id }}" data-name="{{ $member->nama_lengkap }}">
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
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data <strong id="modalItemName"></strong> secara permanen?
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
                deleteForm.action = `/admin/hapus-data-member/${itemId}`;
            });
        });

        $(".basic-1").each(function() {
            $(this).DataTable({
                "order": []
            });
        });
    </script>
@endsection
