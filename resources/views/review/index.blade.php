@extends('layouts.mainlayout')
@section('page_title','Daftar Review')

@section('content')

<div class="row justify-content-between my-3">
    <div class="col-3">
        <h2>Daftar Review</h2>
    </div>
    <div class="col-2">
        <a href="/add-review" class="btn btn-primary">Tambah Data</a>
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
            <th>Nilai</th>
            <th>Komentar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reviews as $review)
        <tr>
            <td>{{ $review->rating }}</td>
            <td>{{ $review->comment }}</td>
            <td class="col-3 text-center">
                <a href="/review/{{ $review->id }}" class="btn btn-outline-primary btn-sm">Detail</a>
                <a href="/edit-review/{{  $review->id }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                <a href="/delete-review/{{  $review->id }}" class="btn btn-outline-primary btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
