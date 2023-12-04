@extends('layouts.mainlayout')
@section('page_title','Daftar Resep')

@section('content')

<div class="row justify-content-between my-3">
    <div class="col-3">
        <h2>Daftar Resep</h2>
    </div>
    <div class="col-2">
        <a href="/add-recipe" class="btn btn-primary">Tambah Data</a>
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
            <th>Porsi</th>
            <th>Perkiraan Waktu</th>
            <th>Bahan</th>
            <th>Langkah Langkah</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recipes as $recipe)
        <tr>
            <td>{{ $recipe->title }}</td>
            <td><img src="{{ $recipe->photo }}" class="card-img-top" alt="..."></td>
            <td>{{ $recipe->desc }}</td>
            <td>{{ $recipe->photo }}</td>
            <td>{{ $recipe->desc }}</td>
            <td>{{ $recipe->portion }}</td>
            <td>{{ $recipe->est_time }}</td>
            <td>{{ $recipe->ingredients }}</td>
            <td>{{ $recipe->step }}</td>
            <td>{{ $recipe->link }}</td>
            <td class="col-3 text-center">
                <a href="/recipe/{{ $recipe->id }}" class="btn btn-outline-primary btn-sm">Detail</a>
                <a href="/edit-recipe/{{  $recipe->id }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                <a href="/delete-recipe/{{  $recipe->id }}" class="btn btn-outline-primary btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection