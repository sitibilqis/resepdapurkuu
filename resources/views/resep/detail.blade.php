@extends('layouts.mainlayout')
@section('page_title', 'Detail Artikel')

@section('content')

    <div border="1">
        <div class="row">
            <div class="col-9">{{ $recipe->title }}</div>
        </div>
        <div class="row">
            <div class="col-9"><img src="{{ $recipe->photo }}" width="50%" alt="..."></div>
        </div>
        <div class="row">
            <div class="col-9">{{ $recipe->desc }}</div>
        </div>
        <div class="row">
            <div class="col-9">{{ $recipe->content }}</div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="/article" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
