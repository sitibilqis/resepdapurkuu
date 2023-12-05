@extends('layouts.mainlayout')
@section('page_title','Hapus Artikel')

@section('content')
    <h3>Hapus Ulasan</h3>
    <form method="post" action="/review/{{ $reviews->id }}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Apakah Anda yakin akan menghapus ulasan ini? </p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/review" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection