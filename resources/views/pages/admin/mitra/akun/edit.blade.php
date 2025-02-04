@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Edit Akun Pengurus</h3>
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

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body animated-form">
                        <form action="{{ route('admin-akun-mitra-update', $pengurus->id) }}" method="POST" class="row g-3 needs-validation custom-input">
                            @csrf
                            @method('PUT')
                            <div class="col-12 position-relative">
                                <label class="form-label" for="validationTooltip04">Mitra</label>
                                <select name="pengurus_id" class="select2 form-control" id="validationTooltip04" required="">
                                    <option selected value="{{ $pengurus->mitra->id }}">{{ $pengurus->mitra->name }}</option>
                                    @foreach ($allPengurus as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('pengurus_id')
                                    <div class="invalid-tooltip d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 position-relative">
                                <label class="col-form-label" for="inputTooltipPassword">Kata sandi baru</label>
                                <input class="form-control" name="password" id="inputTooltipPassword" type="password" placeholder="Masukkan kata sandi baru">
                                <div class="invalid-tooltip">Masukkan kata sandi baru</div>
                            </div>
                            <div class="col-lg-6 position-relative">
                                <label class="col-form-label" for="inputConfirmPassword">Konfirmasi kata sandi baru</label>
                                <input class="form-control confirmation" name="password_confirmation" id="inputConfirmPassword" type="password" placeholder="Konfirmasi kata sandi baru">
                                <div class="invalid-tooltip">Konfirmasi kata sandi baru</div>
                            </div>
                            <div class="col-12">
                                @include('components.buttonForm', ['route' => 'admin-akun-mitra'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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

                if (password && password !== confirmPassword) {
                    event.preventDefault();
                    alert('Kata sandi dan konfirmasi kata sandi tidak cocok!');
                    return false;
                }
            });
        });
    </script>
@endsection
