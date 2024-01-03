@php
    $title = 'Login';
@endphp
@extends('layouts.auth')

@section('content')
    <h2 class="card-title text-center">Masuk</h2><br>
    <h6 class="card-subtitle text-muted mb-5 fw-bold text-center">Masuk untuk tetap terhubung</h6>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required
                autofocus />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" required />
        </div>
        <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
            </div>
            <div>
                <a href="#" class="forgot">Lupa kata sandi</a>
            </div>
        </div>
        <div class="d-grid mt-5">
            <button type="submit" class="btn btn-danger btn-login">Masuk</button>
        </div>
        <div class="mt-3 text-center">
            <label>atau masuk menggunakan <a href="#" class="link"></a></label>
        </div>
        <div class="col-md-8 text-md-end text-center pt-2 pb-2">
            <a href="https://accounts.google.com/v3/signin/identifier?hl=in&ifkv=ASKXGp3CQVZWKGWF889H8cCe1cjS2AzcfMZJVaFRJ9KlaXHxk_kWwhHj4yMP-YNs7C5MHZoES-70&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1810920256%3A1700908777048758&theme=glif"
                style="text-decoration: none">
                <img src="{{ url('assets/img/google.png') }}" class="ms-2 mt-4" style="width: 25px" />
            </a>
            <a href="https://www.instagram.com/accounts/login/" style="text-decoration: none">
                <img src="{{ url('assets/img/icons8-instagram-48.png') }}" class="ms-2 mt-4" style="width: 25px" />
            </a>
            <a href="https://web.facebook.com/campaign/landing.php?campaign_id=1654852700&extra_1=s%7Cc%7C318683836297%7Ce%7Cfacebook%20login%7C&placement&creative=318683836297&keyword=facebook%20login&partner_id=googlesem&extra_2=campaignid%3D1654852700%26adgroupid%3D63261960853%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1409285535%26loc_physical_ms%3D1007700%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiA04arBhAkEiwAuNOsIsjTn7-COdl9vCV-a1-vzD2tCrpTBAgvHliMmkVVdIFfDxZ_qxznUxoCYmEQAvD_BwE&_rdc=1&_rdr"
                style="text-decoration: none">
                <img src="{{ url('assets/img/icons8-facebook-f-48.png') }}" class="ms-2 mt-4" style="width: 25px" />
            </a>
        </div>
        <div class="mt-3 text-center">
            <label>Tidak punya akun? <a href="{{ route('register') }}" class="link">Klik disini untuk
                    daftar.</a></label>
        </div>
    </form>
@endsection
