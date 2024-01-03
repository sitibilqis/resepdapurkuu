@extends('layouts.mainlayout')
@section('page_title', 'Edit Resep')

@section('content')
    <div class="container">
        <form action="{{ route('recipe.update', $recipe->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Tambah Foto -->
            <div class="bg-recipe py-3">
                <div class="card col-5 mx-auto my-5">
                    <label for="photo" class="drop-container" id="dropcontainer">
                        <img src="{{ asset('build/assets/img/plus_1828925.png') }}" width="30" alt="">
                        <span class="drop-title">UBAH FOTO RESEP</span>
                        <p>Pilih foto jika ingin mengubahnya</p>
                        <input type="file" id="photo" accept="photo/*" name="photo">
                    </label>
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>

            <div class="card col-12 mx-auto border-0 pt-4">
                <!-- Judul -->
                <div class="form-group px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-md-8">
                        <label for="title" class="col-form-label">Judul</label>
                        <input type="text" id="title" class="form-control" name="title"
                            value="{{ $recipe->title }}">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('title')
                                <i>{{ $message }}</i>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="form-group px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-md-8">
                        <label for="desc" class="col-form-label">Deskripsi</label>
                        <input type="text" id="desc" class="form-control" name="desc"
                            value="{{ $recipe->desc }}">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('desc')
                                <i>{{ $message }}</i>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- Porsi & Est -->
                <div class="form-group row px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-4">
                        <div class="form-outline">
                            <label for="portion" class="col-form-label">Porsi</label>
                            <div class="col-12">
                                <input type="text" id="portion" class="form-control" name="portion"
                                    value="{{ $recipe->portion }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-outline">
                            <label for="est_time" class="col-form-label">Perkiraan Waktu</label>
                            <div class="col-12">
                                <input type="text" id="est_time" class="form-control" name="est_time"
                                    value="{{ $recipe->est_time }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('est_time')
                                <i>{{ $message }}</i>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- Bahan & Harga -->
                <div class="form-group row col px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="ingredients">Bahan-Bahan</label>
                            @php
                                $ingredients = explode('|', $recipe->ingredients);

                                $ingr_amount = $recipe->ingr_amount;
                                $ingr_amount_array = explode('|', $ingr_amount);
                                $ingr_unit = $recipe->ingr_unit;
                                $ingr_unit_array = explode('|', $ingr_unit);
                                $ingr_price = $recipe->ingr_price;
                                $ingr_price_array = explode('|', $ingr_price);
                            @endphp
                            @foreach ($ingredients as $key => $item)
                                <div class="row align-items-center mt-2">
                                    <div class="col-1">{{ $key + 1 }}</div>
                                    <div class="col-10">
                                        <div class="d-flex gap-2">
                                            <input type="text" id="ingr_amount" class="form-control" name="ingr_amount[]"
                                                placeholder="Jumlah"  value="{{ $ingr_amount_array[$key] }}">
                                            <input type="text" id="ingr_unit" class="form-control" name="ingr_unit[]"
                                                placeholder="Satuan" value="{{ $ingr_unit_array[$key] }}">
                                            <input type="text" id="ingredients" class="form-control" name="ingredients[]"
                                                placeholder="Bahan" value="{{ $item }}">
                                            <input type="text" id="ingr_price" class="form-control" name="ingr_price[]"
                                                placeholder="Harga Bahan" value="{{ $ingr_price_array[$key] }}">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-light" onclick="deleteIngredient(this)">Hapus</button>
                                    </div>
                                </div>
                            @endforeach
                            <div class="mt-2" id="ingredient-container"></div>
                            <button type="button" class="btn btn-danger mt-3" onclick="addIngredient()">+ Bahan</button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('description')
                                <i>{{ $message }}</i>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- Langkah-langkah -->
                <div class="form-group row col px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-8 pt-3">
                        <label for="step" class="col-form-label">Langkah Langkah</label>
                        @php
                            $steps = explode('|', $recipe->step);
                        @endphp
                        @foreach ($steps as $key => $item)
                            <div class="row align-items-center mt-2">
                                <div class="col-1">
                                    <label for="InputIngr">{{ $key + 1 }}.</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" id="step" class="form-control" name="step[]"
                                        value="{{ $item }}">
                                </div>
                                <div class="col-1">
                                    <button class="btn btn-sm btn-light" onclick="deleteStep(this)">Hapus</button>
                                </div>
                            </div>
                        @endforeach
                        <div id="step-container"></div>
                        <div class="row">
                            <div class="col pt-4">
                                <button type="button" onclick="addStep()" class="btn btn-danger">+ Langkah</button>
                            </div>
                            <div class="custom-file pt-3">
                                <input type="file" id="step_photo" name="step_img" accept="step_photo/*">
                                <span class="text-secondary">Pilih gambar jika ingin mengubahnya</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Link Video -->
                <div class="form-group row col px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-md-8 pt-3">
                        <label for="link" class="col-form-label">Link Video Tutorial</label>
                        <p>(Jika Anda memiliki video tutorial)</p>
                        <input type="url" id="link" class="form-control" name="link"
                            value="{{ $recipe->link }}">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('link')
                                <i>{{ $message }}</i>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- Button Unggah -->
                <div class="mt-5 pb-5">
                    <div class="col d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-danger btn-login mx-1">Simpan Perubahan Resep</button>
                        <a href="{{ route('recipe.index') }}" class="btn btn-secondary mx-1">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('addon-script')
    <script>
        let ingredientsIndex = {{ count($ingr_price_array) }};
        // let ingredientsIndex = {{ count($ingr_amount_array) }};
        // let ingredientsIndex = {{ count($ingr_unit_array) }};
        let stepIndex = {{ count($steps) }};

        function addIngredient() {
            let container = document.getElementById('ingredient-container');
            const newIngredient = document.createElement('div');
            newIngredient.innerHTML = `
                <div class="row align-items-center mt-2">
                    <div class="col-1">${++ingredientsIndex}</div>
                    <div class="col-10">
                        <div class="d-flex flex-nowrap gap-2">
                            <input type="text" id="ingr_amount" class="form-control" name="ingr_amount[]"
                                placeholder="Jumlah">
                            <input type="text" id="ingr_unit" class="form-control" name="ingr_unit[]"
                                placeholder="Satuan">
                            <input type="text" id="ingredients" class="form-control" name="ingredients[]"
                                placeholder="Bahan">
                            <input type="text" id="ingr_price" class="form-control" name="ingr_price[]"
                                placeholder="Harga Bahan">
                        </div>
                    </div>
                    <div class="col-1"><button class="btn btn-sm btn-light" type="button" onclick="deleteIngredient(this)">Hapus</button></div>
                </div>
            `;
            container.appendChild(newIngredient)
        }

        function deleteIngredient(btn) {
            let container = document.getElementById('ingredient-container');
            container.removeChild(btn.parentNode.parentNode.parentNode);
        }

        function addStep() {
            let container = document.getElementById('step-container');
            const newStep = document.createElement('div');
            newStep.innerHTML = `
                <div class="row align-items-center mt-2">
                    <div class="col-1">
                        <label for="InputIngr">${++stepIndex}.</label>
                    </div>
                    <div class="col-9">
                        <input type="text" id="step" class="form-control" placeholder="Langkah" name="step[]">
                    </div>
                    <div class="col-1"><button class="btn btn-sm btn-light" onclick="deleteStep(this)">Hapus</button></div>
                </div>
            `;

            container.appendChild(newStep)
        }

        function deleteStep(btn) {
            const container = document.getElementById('step-container');
            container.removeChild(btn.parentNode.parentNode.parentNode);
        }
    </script>
@endpush
