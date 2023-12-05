@extends('layouts.mainlayout')
@section('page_title','Detail Artikel')

@section('content')

<div border="1">
    <div class="row">
        <div class="col-9">{{ $recipes->title }}</div>
    </div>
    <div class="row">
        <div class="col-9"><img src="{{ $recipes->photo }}" width="50%" alt="..."></div>
    </div>
    <div class="row">
        <div class="col-9">{{ $recipes->desc }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $recipes->portion }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $recipes->est_time}}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $recipes->ingredients}}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $recipes->step }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $recipes->link }}</div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/recipe" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection