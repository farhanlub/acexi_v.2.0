@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Kategori Kumpulan Berita</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts -->
    <div class="container-fluid datatable-init">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin-kategori-kumpulan-berita-create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="table-responsive custom-scrollbar">
                    <table class="display table-striped border basic-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key  => $category)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $category->name }}</td> 
                                    <td>{{ $category->desc }}</td> 
                                    <td>
                                        
                                        <ul class="action">
                                            <li class="edit">
                                                <a href="{{ route('admin-kategori-kumpulan-berita-edit', $category->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                            </li>
                                            <li class="delete">
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $category->id }}" data-name="{{ $category->title }}">
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
                    Apakah Anda yakin ingin menghapus kategori <strong id="modalItemName"></strong> secara permanen?
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
        $(".basic-1").DataTable({
            "order": []
        });

        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = document.getElementById('deleteModal');
            deleteModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const deleteForm = document.getElementById('deleteForm');

                document.getElementById('modalItemName').textContent = name;
                deleteForm.action = `/admin/kategori-kumpulan-berita/destroy/${id}`;
            });
        });
    </script>
@endsection
