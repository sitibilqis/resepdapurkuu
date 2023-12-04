@extends('layouts.mainlayout')
@section('page_title','Daftar Artikel')

@section('content')

<div class="row justify-content-between my-3">
    <div class="col-3">
        <h2>Daftar Artikel</h2>
    </div>
    <div class="col-2">
        <a href="/add-article" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif

<table class="table" border="1">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Foto</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->title }}</td>
            <td><img src="{{ $article->photo }}" class="card-img-top" alt="..."></td>
            <td>{{ $article->desc }}</td>
            <td class="col-3 text-center">
                <a href="/article/{{ $article->id }}" class="btn btn-outline-primary btn-sm">Detail</a>
                <a href="/edit-article/{{  $article->id }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                <a href="/delete-article/{{  $article->id }}" class="btn btn-outline-primary btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection