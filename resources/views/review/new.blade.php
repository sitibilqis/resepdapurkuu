@extends('layouts.mainlayout')
@section('page_title','Edit Artikel')

@section('content')
    <div class="mt-5 col-12 m-auto">
        <form action="/review" method="post">
            @csrf
            <input type="hidden" name="recipe_id" value="{{ $recipe_id }}"/>
            <div class="px-3 pt-3 d-flex align-items-center justify-content-center">
                <h3>Tambah ulasan</h3>
            </div>
            <div class="form-group px-3 pt-3 d-flex align-items-center justify-content-center">
                <div class="col-1">
                    <label for="rating" class="col-form-label">Nilai</label>
                </div>
                <div class="col-7">
                    <select name="rating" id="rating" class="form-control">
                        <option value="" disabled selected>Pilih Nilai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group px-3 pt-3 d-flex align-items-center justify-content-center">
                <div class="col-1">
                    <label for="comment" class="col-form-label">Komentar</label>
                </div>
                <div class="col-7">
                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" value="{{  old('comment') }}"></textarea>
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
                <!-- Button Unggah -->
            <div class="mt-5 pb-5">
                <div class="col d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-danger btn-login mx-1">Unggah Ulasan</button>
                    <a href="/review" class="btn btn-secondary mx-1">Kembali</a>
                </div>
            </div>
        </form>
    </div>
@endsection
