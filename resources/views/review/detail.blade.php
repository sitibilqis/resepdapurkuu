@extends('layouts.mainlayout')
@section('page_title','Detail Artikel')

@section('content')

<div border="1">
    <div class="row">
        <div class="col-9">{{ $reviews->rating }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $reviews->comment }}</div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/review" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection