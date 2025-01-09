@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-5" data-bg-image="https://png.pngtree.com/thumb_back/fh260/background/20210115/pngtree-original-hand-painted-spring-outing-green-public-account-cover-background-image_519746.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title m-0">Ganti Kata Sandi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tj-team-page">
        <div class="container">
            <form action="{{ route('profile.update.kata-sandi') }}" method="POST" enctype="multipart/form-data" id="password-form">
                @csrf
                @method('PUT')
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="shadow-sm rounded p-2">
                            <table class="table">
                                <tr>
                                    <td class="text-nowrap">Kata Sandi Lama</td>
                                    <td>
                                        <input type="password" class="form-control border" name="current_password" id="current-password" required>
                                        @error('current_password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Kata Sandi Baru</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="password" class="form-control border" name="new_password" id="new-password" required>
                                            <span toggle="#new-password" class="fa fa-fw fa-eye field-icon toggle-password" onclick="togglePasswordVisibility('new-password')"></span>
                                        </div>
                                        @error('new_password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">Konfirmasi Kata Sandi Baru</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="password" class="form-control border" name="new_password_confirmation" id="new-password-confirmation" required>
                                            <span toggle="#new-password-confirmation" class="fa fa-fw fa-eye field-icon toggle-password" onclick="togglePasswordVisibility('new-password-confirmation')"></span>
                                        </div>
                                        @error('new_password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                </tr>
                            </table>
                            <div class="d-flex gap-2">
                                <a href="{{ route('profile') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary" id="submit-btn" disabled>Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('js')
    <script>
        function togglePasswordVisibility(passwordId) {
            var passwordField = document.getElementById(passwordId);
            var toggleIcon = passwordField.nextElementSibling;
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }

        // Check if new password and confirmation password match
        document.getElementById('new-password').addEventListener('input', checkPasswordsMatch);
        document.getElementById('new-password-confirmation').addEventListener('input', checkPasswordsMatch);

        function checkPasswordsMatch() {
            var newPassword = document.getElementById('new-password').value;
            var confirmPassword = document.getElementById('new-password-confirmation').value;
            var submitButton = document.getElementById('submit-btn');

            if (newPassword === confirmPassword && newPassword.length > 0 && confirmPassword.length > 0) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }
    </script>
@endsection

@section('css')
    <style>
        .input-group {
            position: relative;
        }

        .field-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
@endsection
