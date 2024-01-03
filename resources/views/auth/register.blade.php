@php
    $title = 'Register';
@endphp
@extends('layouts.auth')

@section('content')
    <h2 class="card-title text-center">Daftar</h2><br>
    <h6 class="card-subtitle text-muted mb-5 fw-bold text-center">Daftarkan akun anda</h6>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        required autofocus />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone_number" class="form-label"> No Telepon</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number"
                        value="{{ old('phone_number') }}" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya setuju dengan ketentuan</label>
                </div>
            </div>
            <div class="d-grid mt-6">
                <button type="submit" class="btn btn-danger btn-login">Daftar</button>
            </div>
            <div class="mt-3 text-center">
                <label>atau masuk menggunakan <a href="#" class="link"></a></label>
            </div>
            <div class="col-md-7 text-md-end text-center pt-2 pb-2">
                <a href="https://www.instagram.com/accounts/login/" style="text-decoration: none">
                    <img src="{{ asset('assets/img/icons8-instagram-48.png') }}" class="ms-2 mt-4" style="width: 25px" />
                </a>
                <a href="https://web.facebook.com/campaign/landing.php?campaign_id=1654852700&extra_1=s%7Cc%7C318683836297%7Ce%7Cfacebook%20login%7C&placement&creative=318683836297&keyword=facebook%20login&partner_id=googlesem&extra_2=campaignid%3D1654852700%26adgroupid%3D63261960853%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1409285535%26loc_physical_ms%3D1007700%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiA04arBhAkEiwAuNOsIsjTn7-COdl9vCV-a1-vzD2tCrpTBAgvHliMmkVVdIFfDxZ_qxznUxoCYmEQAvD_BwE&_rdc=1&_rdr"
                    style="text-decoration: none">
                    <img src="{{ asset('assets/img/icons8-facebook-f-48.png') }}" class="ms-2 mt-4" style="width: 25px" />
                </a>
            </div>
            <div class="mt-3 text-center">
                <label>
                    Telah memiliki akun? <a href="{{ route('login') }}" class="link">Klik disini untuk masuk.</a>
                </label>
            </div>
    </form>
@endsection
