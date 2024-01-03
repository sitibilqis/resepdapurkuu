@extends('layouts.mainlayout')
@section('page_title','Hapus Artikel')

@section('content')
<div class="mt-5 col-12 m-auto">
    <div class="px-3 pt-3 d-flex align-items-center justify-content-center">
        <h3>Hapus Resep</h3>
    </div>
    <form method="post" action="{{ route('recipe.delete', $recipe->id) }}">
        @csrf
        @method('delete')
        <div class="px-3 pt-3 d-flex align-items-center justify-content-center">
            <h6>Apakah Anda yakin akan menghapus resep <b>{{ $recipes->title }}</b>? </h6>
        </div>
        <div class="px-3 pt-3 d-flex align-items-center justify-content-center">
            <button type="submit" class="btn btn-danger mb-3 mx-1">Ya</button>
            <a href="/recipe" class="btn btn-secondary mb-3 mx-1">Tidak</a>
        </div>
    </form>
</div>
@endsection