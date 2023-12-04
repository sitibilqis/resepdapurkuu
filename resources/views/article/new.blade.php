@extends('layouts.mainlayout')
@section('page_title','Daftar Kategori')

@section('content')

    <div class="mt-5 col-12 m-auto">
        <form action="/article" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-1">
                    <label for="title" class="col-form-label">Judul</label>
                </div>
                <div class="col-8">
                    <input type="text" id="title" class="form-control" name="title" value="{{  old('title') }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="photo" class="col-form-label">Foto</label>
                </div>
                <div class="col-8">
                    <input type="text" id="photo" class="form-control" name="photo" value="{{  old('photo') }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="desc" class="col-form-label">Deskripsi</label>
                </div>
                <div class="col-8">
                    <input type="text" id="desc" class="form-control" name="desc" value="{{  old('desc') }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="content" class="col-form-label">Konten</label>
                </div>
                <div class="col-8">
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" value="{{  old('content') }}"></textarea>
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                        <button type="submit" class="btn btn-success mb-3">Perbarui</button>
                    <a href="/article" class="btn btn-secondary mb-3">Kembali</a>
                </div>
            </div>
        </form>
    </div>
@endsection