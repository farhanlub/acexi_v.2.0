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
                <div class="table-responsive custom-scrollbar">
                    <table class="display table-striped border basic-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key  => $category)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $category->name }}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    </script>
@endsection
