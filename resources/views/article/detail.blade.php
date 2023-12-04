@extends('layouts.mainlayout')
@section('page_title','Detail Artikel')

@section('content')

<div border="1">
    <div class="row">
        <div class="col-9">{{ $articles->title }}</div>
    </div>
    <div class="row">
        <div class="col-9"><img src="{{ $articles->photo }}" width="50%" alt="..."></div>
    </div>
    <div class="row">
        <div class="col-9">{{ $articles->desc }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $articles->content }}</div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/article" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection