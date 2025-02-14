@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tentang Aplikasi</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid default-dashboard">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card text-start">
                    <div class="card-body">
                        <form action="{{ route('admin-tentang-aplikasi-update') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation custom-input">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="col-form-label" for="name">Nama Aplikasi</label>
                                <input class="form-control" name="name" id="name" type="text" required value="{{ old('name', $data->name ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="facebook">Facebook</label>
                                <input class="form-control" name="facebook" id="facebook" type="text" value="{{ old('facebook', $data->facebook ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="x">X</label>
                                <input class="form-control" name="x" id="x" type="text" value="{{ old('x', $data->x ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="whatsapp">WhatsApp</label>
                                <input class="form-control" name="whatsapp" id="whatsapp" type="text" value="{{ old('whatsapp', $data->whatsapp ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="linkedin">LinkedIn</label>
                                <input class="form-control" name="linkedin" id="linkedin" type="text" value="{{ old('linkedin', $data->linkedin ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="instagram">Instagram</label>
                                <input class="form-control" name="instagram" id="instagram" type="text" value="{{ old('instagram', $data->instagram ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required value="{{ old('email', $data->email ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="address">Alamat</label>
                                <textarea class="form-control" name="address" id="address" rows="3" required>{{ old('address', $data->address ?? '') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="col-form-label" for="tel">Telepon</label>
                                <input class="form-control" name="tel" id="tel" type="text" required value="{{ old('tel', $data->tel ?? '') }}">
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
