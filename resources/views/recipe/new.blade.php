@extends('layouts.mainlayout')
@section('page_title','Tambah Resep')

@section('content')
    <h3>Tambah Data Resep</h3>
    <div class="mt-5 col-12 m-auto">
        <form action="/recipe" method="post">
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
                    <label for="portion" class="col-form-label">Porsi</label>
                </div>
                <div class="col-8">
                    <input type="text" id="portion" class="form-control" name="portion" value="{{  old('portion') }}">
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
                    <label for="est_time" class="col-form-label">Perkiraan Waktu</label>
                </div>
                <div class="col-8">
                    <input type="text" id="est_time" class="form-control" name="est_time" value="{{  old('est_time') }}">
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
                    <label for="ingredients" class="col-form-label">Bahan Bahan</label>
                </div>
                <div class="col-8">
                    <input type="text" id="ingredients" class="form-control" name="ingredients" value="{{  old('ingredients') }}">
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
                    <label for="step" class="col-form-label">Langkah Langkah</label>
                </div>
                <div class="col-8">
                    <input type="text" id="step" class="form-control" name="step" value="{{  old('step') }}">
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
                    <label for="link" class="col-form-label">Link</label>
                </div>
                <div class="col-8">
                    <input type="text" id="link" class="form-control" name="link" value="{{  old('link') }}">
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
                    <a href="/recipe" class="btn btn-secondary mb-3">Kembali</a>
                </div>
            </div>
        </form>
    </div>
@endsection