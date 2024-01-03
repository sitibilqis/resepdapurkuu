@extends('layouts.mainlayout')
@section('page_title','Edit Artikel')

@section('content')
    <h3>Edit Data Artikel</h3>
    <div class="mt-5 col-12 m-auto">
        <form action="/review/{{ $reviews->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-1">
                    <label for="rating" class="col-form-label">Nilai</label>
                </div>
                <div class="col-8">
                    <input type="text" id="rating" class="form-control" name="rating" value="{{  old('rating', $reviews->rating) }}">
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
                    <label for="comment" class="col-form-label">Komentar</label>
                </div>
                <div class="col-8">
                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" value="{{  old('comment', $reviews->comment) }}"></textarea>
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
