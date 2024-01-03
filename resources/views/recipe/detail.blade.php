@extends('layouts.mainlayout')
@section('page_title', 'Resep')
@section('content')
    <!-- Cover -->
    <div class="card text-bg-dark border-0">
        <img src="{{ url('storage/' . $recipe->photo) }}" class="card-img rounded-0"
            style="filter:brightness(50%); object-fit: cover;" height="500px" alt="{{ $recipe->title }}">
        <div class="card-img-overlay p-5 m-5">
            <h1 class="text pt-5 mt-5 fw-bold text-uppercase" style="font-size: 4rem; line-height: 1; max-width: 50%;">
                {{ $recipe->title }}
            </h1>
            <div class="media hstack gap-1 justify-content-start">
                <img src="{{ asset('assets/img/icons8-star-48.png') }}" width="25" alt="">
                <img src="{{ asset('assets/img/icons8-star-48.png') }}" width="25" alt="">
                <img src="{{ asset('assets/img/icons8-star-48.png') }}" width="25" alt="">
                <img src="{{ asset('assets/img/icons8-star-48.png') }}" width="25" alt="">
                <img src="{{ asset('assets/img/icons8-star-48.png') }}" width="25" alt="">
                <p class="mt-3">(13)</p>
            </div>
        </div>
    </div>
    <!-- Cover -->

    <!-- Est Waktu -->
    <div class="row align-items-start p-4 m-5" style="background-color: #F1F0EC;">
        <div class="col-6 d-flex">
            <div>
                <img src="{{ asset('assets/img/cutlery_6540250.png') }}" width="45" alt="">
            </div>
            <div class="card-body px-2 pt-1">
                <h6 class="card-title">Porsi</h6>
                <p class="card-text text-secondary">{{ $recipe->portion }}</p>
            </div>
        </div>
        <div class="col-2 d-flex">
            <div>
              <img src="{{ asset('assets/img/icons8-geography-100.png') }}" width="45" alt="">
            </div>
            <div class="card-body px-2 pt-1">
              <h6 class="card-title">Asal Negara</h6>
              <p class="card-text text-secondary">{{ $recipe->category }}</p>
            </div>
          </div>
          <div class="col-2 d-flex">
              <div>
                <img src="{{ asset('assets/img/icons8-price-tag-usd-100.png') }}" width="45" alt="">
              </div>
              <div class="card-body px-2 pt-1">
                <h6 class="card-title">Estimasi Harga</h6>
                @php
                    $ingr_price = explode('|', $recipe->ingr_price);
                    $totalPrice = 0;
                    foreach ($ingr_price as $price) {
                        $totalPrice += (float)$price;
                    }
                @endphp
                <p class="card-text text-secondary">{{ $totalPrice }}</p>
              </div>
          </div>
          <div class="col-2 d-flex">
            <div>
                <img src="{{ asset('assets/img/icons8-clock-48.png') }}" width="45" alt="">
            </div>
            <div class="card-body px-2 pt-1">
                <h6 class="card-title">Estimasi Waktu</h6>
                <p class="card-text text-secondary">{{ $recipe->est_time }} Menit</p>
            </div>
        </div>
    </div>
    <!-- Est Waktu -->

    <!-- Bahan & Step -->
    <div class="row m-5">
        <hr width="90%">
        <div class="col-sm-8 p-2">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h3 class="card-title">Bahan Utama</h3>
                    <div class="row">
                        <ol class="card-text fs-6 text-decoration col-sm-auto">
                            @php
                                $ingr_amount = explode('|', $recipe->ingr_amount);
                            @endphp
                            @foreach ($ingr_amount as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                        <ol class="card-text fs-6 text-decoration col-sm-auto" style="list-style: none">
                            @php
                                $ingr_unit = explode('|', $recipe->ingr_unit);
                            @endphp
                            @foreach ($ingr_unit as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                        <ol class="card-text fs-6 text-decoration col-sm-auto" style="list-style: none">
                            @php
                                $ingredients = explode('|', $recipe->ingredients);
                            @endphp
                            @foreach ($ingredients as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                        <ul class="card-text fs-6 col-sm-auto" style="list-style: none">
                            @php
                                $ingr_price = explode('|', $recipe->ingr_price);
                            @endphp
                            @foreach ($ingr_price as $item)
                                <li>({{ $item }})</li>
                            @endforeach
                        </ul>
                    </div>  
                    <h3 class="card-title mt-4">Cara Membuat</h3>
                    <div class="row">
                        <ol class="card-text fs-6">
                            @php
                                $steps = explode('|', $recipe->step);
                            @endphp
                            @foreach ($steps as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 p-2">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h3 class="card-title">Langkah-Langkah</h3>
                    <div class="d-flex">
                        <img src="{{ url('storage/' . $recipe->step_img) }}" class="w-100" alt="Step" />
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-4" width="90%">
    </div>

    {{-- ULASAN --}}
    <div class="container">
        <div class="swiper ulasan-swiper mb-5">
            <div class="swiper-wrapper">
                @foreach ($reviews as $review)
                    <div class="swiper-slide">
                        <div class="card h-100 p-1">
                            <div class="card-body">
                                <p class="fs-6">
                                    <img src="{{ asset('assets/img/icons8-male-user-96.png') }}"
                                        class="mx-2 rounded-circle" height="50" width="50" alt="">{{ $review->user->name }}
                                </p>
                                <div class="media hstack gap-1 justify-content-start">
                                    @for ($i = 1; $i <= $review->rating; $i++)
                                        <img src="{{ asset('assets/img/icons8-star-48.png') }}" width="10" alt="">
                                    @endfor
                                    @for ($i = 1; $i <= 5 - $review->rating; $i++)
                                        <img src="{{ asset('assets/img/icons8-star-grey-48.png') }}" width="10"alt="">
                                    @endfor
                                </div>
                                <p class="card-text mt-2">{{ $review->comment }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="col d-flex align-items-center justify-content-center">
            <a href="/add-review/{{ $recipe->id }}" class="btn btn-outline-danger mx-1 mb-5">+ Tambah Ulasan</a>
        </div>
    </div>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.ulasan-swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
