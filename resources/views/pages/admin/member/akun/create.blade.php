@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Akun Pengurus </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($members->count() > 0)
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body animated-form">
                            <form action="{{ route('admin-akun-member-store') }}" method="POST" class="row g-3 needs-validation custom-input">
                                @csrf
                                @method('POST')
                                <div class="col-12 position-relative">
                                    <label class="form-label" for="validationTooltip04">Pengurus</label>
                                    <select name="pengurus_id" class="select2 form-control" id="validationTooltip04" required="">
                                        <option selected="" disabled="" value="">Pilih...</option>
                                        @foreach ($members as $item)
                                            <option value="{{ $item->id }}" {{ old('pengurus_id') == $item->id ? 'selected' : '' }}>{{ $item->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                    @error('pengurus_id')
                                        <div class="invalid-tooltip d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 position-relative">
                                    <label class="col-form-label" for="inputTooltipPassword">Kata sandi</label>
                                    <input class="form-control required" name="password" id="inputTooltipPassword" type="password" placeholder="Enter your password" required="">
                                    <div class="invalid-tooltip">Masukan kata sandi</div>
                                </div>
                                <div class="col-lg-6 position-relative">
                                    <label class="col-form-label" for="inputConfirmPassword">Konfirmasi kata sandi</label>
                                    <input class="form-control required confirmation" name="password_confirmation" id="inputConfirmPassword" type="password" placeholder="Enter your confirm password" required="">
                                    <div class="invalid-tooltip">Konfirmasi kata sandi</div>
                                </div>
                                <div class="col-12">
                                    @include('components.buttonForm', ['route' => 'admin-akun-member'])
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @section('css')
                <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            @endsection
            @section('js')
                <script src="{{ asset('assets/admin/assets/js/form-validation-custom.js') }}"></script>
                <script src="{{ asset('assets/admin/assets/js/height-equal.js') }}"></script>
                <script src="{{ asset('assets/admin/assets/js/custom-animated-form.js') }}"></script>
                <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.select2').select2(); 
                        // Validasi kata sandi harus sama dengan konfirmasinya
                        $('form').on('submit', function(event) {
                            const password = $('#inputTooltipPassword').val();
                            const confirmPassword = $('#inputConfirmPassword').val();

                            if (password !== confirmPassword) {
                                event.preventDefault();
                                alert('Kata sandi dan konfirmasi kata sandi tidak cocok!');
                                return false;
                            }
                        });
                    });
                </script>
            @endsection
        @else
            <div class="alert alert-danger">
                <p>Belum ada pengurus yang terdaftar atau pengurus yang memiliki alamat email. Silahkan tambahkan pengurus atau alamat email terlebih dahulu.</p>
            </div>
            <a href="{{ route('admin-data-pengurus') }}" class="btn btn-primary">Lihat data pengurus</a>
        @endif 
    </div>
@endsection
