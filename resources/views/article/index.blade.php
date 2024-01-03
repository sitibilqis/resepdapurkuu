@extends('layouts.mainlayout')
@section('page_title','Daftar Artikel')

@section('content')

<!-- Cover -->
<div class="card text-bg-dark border-0">
    <img src="{{ asset('build/assets/img/vegetables.jpg') }}" class="card-img rounded-0" height="50%" alt="...">
    <div class="card-img-overlay">
        <h1 class="text-center fw-bold" style="font-size: 8rem; line-height: 3;">TIPS & TRIK</h1>
    </div>
</div>
<!-- Cover -->

<!-- Isi -->
@foreach ($articles as $article)
<div class="wrapper py-5">
    <div class="col-6 mx-auto justify-content-center">
        <div class="card">
          <div class="card-img">
            <img src="{{ $article->getPhoto() }}" class="card-img-top" style="object-fit: cover" height="400" alt="...">
          </div>
          <div class="card-body d-flex bg-transparent border border-1">
            <div class="card col-9 bg-transparent border-0">
              <small class="text-body-secondary my-auto"><img src="{{ asset('build/assets/img/icons8-male-user-96.png') }}" width="17" alt=""> Sugeng Yamamoto</small>
            </div>
            <div class="card col-3 bg-transparent text-end border-0">
              <small class="text-body-secondary my-auto"><img src="{{ asset('build/assets/img/icons8-calendar-7-96.png') }}" width="17" alt=""> {{ $article->created_at->format('d F Y') }}</small>
            </div>
          </div>
          <div class="card-body">
            <h2 class="card-title"><a href="/article/{{ $article->id }}" class="text-dark text-decoration-none">{{ $article->title }}</a></h2>
            <h6 class="card-text">{{ $article->desc }}</h6>
          </div>
          <div class="card-footer border-1 bg-transparent">
            <a href="/article/{{ $article->id }}">Baca Selengkapnya</a>
        </div>
        </div>
    </div>    
</div>
@endforeach

@endsection