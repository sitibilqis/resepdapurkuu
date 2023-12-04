@extends('layouts.mainlayout')
@section('page_title','Hapus Artikel')

@section('content')
    <h3>Hapus Artikel</h3>
    <form method="post" action="/article/{{ $articles->id }}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Apakah Anda yakin akan menghapus artikel <b>{{ $articles->title }}</b>? </p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/article" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection