@extends('layouts.mainlayout')
@section('page_title', 'Tambah Resep')

@section('content')
    <div class="container">
        <form action="{{ route('recipe.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Tambah Foto -->
            <div class="bg-recipe py-3">
                <div class="card col-5 mx-auto my-5">
                    <label for="photo" class="drop-container" id="dropcontainer">
                        <img src="{{ asset('build/assets/img/plus_1828925.png') }}" width="30" alt="">
                        <span class="drop-title">TAMBAHKAN FOTO RESEP</span>
                        <p>Tunjukkan foto hasil akhir masakanmu</p>
                        <input type="file" id="photo" accept="photo/*" name="photo" required>
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
                            value="{{ old('title') }}">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('description')
                                <i>{{ $message }}</i>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- Kategori -->
                <div class="form-group px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-2">
                        <label for="category" class="col-form-label">Kategori</label>
                    </div>
                    <div class="col-6">
                        <select name="category" id="category" class="form-control">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Jepang">Jepang</option>
                            <option value="China">China</option>
                            <option value="Korea">Korea</option>
                            <option value="Thailand">Thailand</option>
                            <option value="India">India</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Itali">Itali</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Filipina">Filipina</option>
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

                <!-- Deskripsi -->
                <div class="form-group px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-md-8">
                        <label for="desc" class="col-form-label">Deskripsi</label>
                        <input type="text" id="desc" class="form-control" name="desc"
                            value="{{ old('desc') }}">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInLine" class="form-text text-danger">
                            @error('description')
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
                                    value="{{ old('portion') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-outline">
                            <label for="est_time" class="col-form-label">Perkiraan Waktu</label>
                            <div class="col-12">
                                <input type="text" id="est_time" class="form-control" name="est_time"
                                    value="{{ old('est_time') }}">
                            </div>
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

                <!-- Bahan & Harga -->
                <div class="form-group row col px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="ingredients">Bahan-Bahan</label>
                            <div class="row align-items-center mt-2">
                                <div class="col-1">1</div>
                                <div class="col-10">
                                    <div class="d-flex gap-2">
                                        <input type="text" id="ingr_amount" class="form-control" name="ingr_amount[]"
                                            placeholder="Jumlah" value="{{ old('ingr_amount') }}">
                                        <input type="text" id="ingr_unit" class="form-control" name="ingr_unit[]"
                                            placeholder="Satuan" value="{{ old('ingr_unit') }}">
                                        <input type="text" id="ingredients" class="form-control" name="ingredients[]"
                                            placeholder="Nama Bahan" value="{{ old('ingredients') }}">
                                        <input type="text" id="ingr_price" class="form-control" name="ingr_price[]"
                                            placeholder="Harga Bahan" value="{{ old('ingr_price') }}">
                                    </div>
                                </div>
                                <div class="col-1"><button class="btn btn-sm btn-light" disabled>Hapus</button></div>
                            </div>
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
                        <div class="row align-items-center">
                            <div class="col-1">
                                <label for="InputIngr">1.</label>
                            </div>
                            <div class="col-9">
                                <input type="text" id="step" class="form-control" name="step[]"
                                    value="{{ old('step') }}">
                            </div>
                            <div class="col-1"><button class="btn btn-sm btn-light" disabled>Hapus</button></div>
                        </div>
                        <div id="step-container"></div>
                        <div class="row">
                            <div class="col pt-4">
                                <button type="button" onclick="addStep()" class="btn btn-danger">+ Langkah</button>
                            </div>
                            <div class="custom-file pt-3">
                                <input type="file" id="step_photo" name="step_img" accept="step_photo/*" required>
                            </div>
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

                <!-- Link Video -->
                <div class="form-group row col px-3 pt-3 d-flex align-items-center justify-content-center">
                    <div class="col-md-8 pt-3">
                        <label for="link" class="col-form-label">Link Video Tutorial</label>
                        <p>(Jika Anda memiliki video tutorial)</p>
                        <input type="url" id="link" class="form-control" name="link"
                            value="{{ old('link') }}">
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
                        <button type="submit" class="btn btn-danger btn-login mx-1">Unggah Resep</button>
                        <a href="/recipe" class="btn btn-secondary mx-1">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('addon-script')
    <script>
        let ingredientsIndex = 1;
        let stepIndex = 1;

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
                                placeholder="Nama Bahan">
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
