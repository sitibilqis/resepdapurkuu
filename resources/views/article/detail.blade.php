@extends('layouts.mainlayout')
@section('page_title','Resep')

@section('content')

<!-- Cover -->
<div class="card text-bg-dark border-0">
    <img src="{{ $articles->photo }}" class="card-img rounded-0" style="filter:brightness(50%); object-fit:cover" height="500px" alt="...">
    <div class="card-img-overlay p-3 m-5">
        <h1 class="text pt-5 mt-5 fw-bold text-uppercase" style="font-size: 4rem; line-height: 1; max-width: 50%;">{{ $articles->title }}</h1>
        <small class="text-white">oleh Sugeng Yamamoto / </small>
        <small class="text-white"> {{ $articles->created_at->format('d F Y') }} </small>
    </div>
</div>
<!-- Cover -->

<!-- Isi -->
<div class="wrapper py-5 px-5">
    <div class="col-10">
        <div class="card">
          <div class="card-body">
            <h5 class="card-text">{{ $articles->desc }}</h5>
            <h6>{!! $articles->content !!}</h6>
          </div>
        </div>
    </div>    
</div>
<!-- Isi -->

@endsection