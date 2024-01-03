@extends('layouts.mainlayout')
@section('page_title', 'Daftar Resep')

@section('content')

    <!-- Cover -->
    <div class="card text-bg-dark border-0">
        <img src="{{ asset('build/assets/img/Makanan-Khas-Daerah-tiap-Provinsi-di-Indonesia-Serta-Daerah-Asalnya.jpg') }}"
            class="card-img rounded-0" style="filter:brightness(50%); object-fit:cover" height="500px" alt="...">
        <div class="card-img-overlay">
            <h1 class="text-center fw-bold" style="font-size: 8rem; line-height: 3;">RESEP</h1>
        </div>
    </div>
    <!-- Cover -->

    <!-- Search Bar -->
    <div class="container px-4">
        <div class="row gx-2 p-5">
            <div class="col-2 bg-danger text-center p-2 text-light rounded nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle underline" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/recipe/">Indonesia</a></li>
                    <li><a class="dropdown-item" href="#">Jepang</a></li>
                    <li><a class="dropdown-item" href="#">China</a></li>
                    <li><a class="dropdown-item" href="#">Korea</a></li>
                    <li><a class="dropdown-item" href="#">Thailand</a></li>
                    <li><a class="dropdown-item" href="#">India</a></li>
                    <li><a class="dropdown-item" href="#">Vietnam</a></li>
                    <li><a class="dropdown-item" href="#">Itali</a></li>
                    <li><a class="dropdown-item" href="#">Malaysia</a></li>
                    <li><a class="dropdown-item" href="#">Filipina</a></li>
                </ul>
            </div>
            <div class="col">
                <input type="category" class="p-2 border bg-muted rounded col-12">
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger p-2 border text-center rounded"><img src="{{ asset('build/assets/img/search.png') }}" width="20" alt=""></button>
            </div>
        </div>
    </div>
    <!-- Search Bar -->

    <div class="row row-cols-1 row-cols-md-4 g-4 mx-5 pb-1 justify-content-center">
        @foreach ($recipes as $item)
            <div class="col-md-3 p-4">
                <div class="card h-100 mb-4 position-relative">
                    @auth
                        @if (Auth::user()->id == $item->user_id)
                            <div class="d-flex gap-2 position-absolute" style="right: 10px; top: 10px;">
                                <a href="{{ route('recipe.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm text-white">Edit</a>
                                <form action="{{ route('recipe.destroy', $item->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </div>
                        @endif 
                    @endauth
                    <img src="{{ url('storage/' . $item->photo) }}" class="card-img-top" loading="lazy"
                        style="height: 200px; object-fit: cover" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title recipe">
                            <a href="{{ route('recipe.show', $item->id) }}" class="text-dark text-decoration-none">
                                {{ $item->title }}
                            </a>
                        </h5>
                        <div class="media hstack gap-1 justify-content-start">
                            <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20" alt="">
                            <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20" alt="">
                            <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20" alt="">
                            <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20" alt="">
                            <img src="{{ url('assets/img/icons8-star-grey-48.png') }}" width="20" alt="">
                        </div>
                        <p class="card-text pt-2">{{ $item->desc }}</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <p class="card-text">Dibuat oleh {{ $item->users->name }}.</p>
                    </div>
                    <div class="card-footer d-flex bg-transparent">
                        <div class="card col-6 bg-transparent border-0">
                            <small class="text-body-secondary">
                                <img src="img/icons8-opened-folder-48.png" width="17" alt="">
                                {{ $item->category }}
                            </small>
                        </div>
                        <div class="card col-6 bg-transparent border-0">
                            <small class="text-body-secondary text-end"><img src="img/icons8-clock-48.png" width="17"
                                    alt=""> {{ $item->est_time }}m</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 mx-5 pb-1 justify-content-center my-3">
        {{  $recipes->links() }}
    </div>
@endsection
