@extends('layouts.mainlayout')
@section('page_title', 'Daftar Resep')

@section('content')
    <!-- Header -->
    <div class="card border-0">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card text-bg-dark border-0">
                  <img src="{{ asset('assets/img/1.png') }}" class="card-img rounded-0" alt="...">
                  <div class="card-img-overlay border border-0">
                    <h1 class="text-center fw-bold" style="font-size: 7rem; line-height: 1; padding-top: 10%;">GYOZA</h1>
                    <div class="d-flex justify-content-center">
                        <a href="/recipe/9" class="btn btn-danger center btn-md">Masak Sekarang</a> 
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="card text-bg-dark border-0">
                  <img src="{{ asset('assets/img/2.png') }}" class="card-img rounded-0" alt="...">
                  <div class="card-img-overlay">
                    <h1 class="text-center fw-bold" style="font-size: 7rem; line-height: 1; padding-top: 10%;">PIZZA</h1>
                    <div class="d-flex justify-content-center">
                        <a href="/recipe/10" class="btn btn-danger center btn-md">Masak Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
          
              <div class="carousel-item">
                <div class="card text-bg-dark border-0">
                  <img src="{{ asset('assets/img/3.png') }}" class="card-img rounded-0" alt="...">
                  <div class="card-img-overlay">
                    <h1 class="text-center fw-bold" style="font-size: 7rem; line-height: 1; padding-top: 10%;">SPRING ROLL</h1>
                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-danger center btn-md">Masak Sekarang</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
  
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- End Header -->

        <!-- Hitungan -->
        <section>
            <div class="container">
                <div class="row justify-content-center gap-5 py-5">
                    <div class="col-sm-3 mb-3 mb-sm-0 py-5">
                        <div class="text-center">
                            <div class="card-body">
                                <h5 class="card-title fs-1 fw-bold text-danger">378</h5>
                                <p class="card-text fs-5">RESEP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 py-5">
                        <div class="text-center">
                            <div class="card-body">
                                <h5 class="card-title fs-1 fw-bold text-danger">1827</h5>
                                <p class="card-text fs-5">MENGUNJUNGI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 py-5">
                        <div class="text-center">
                            <div class="card-body">
                                <h5 class="card-title fs-1 fw-bold text-danger">126</h5>
                                <p class="card-text fs-5">PENGGUNA AKTIF</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- Kategori Resep -->
        <section class="bg-recipe pt-5">
            <div id="carouselCategory" class="carousel slide">
                <div class="carousel-inner">
                    <h2 class="text-center py-5">KATEGORI RESEP</h2>
                    <div class="carousel-item active">
                        <div class="media hstack gap-5 justify-content-center pb-5 ">
                            <div class="img-hover">
                                <a href="#">
                                    <img src="{{ url('assets/img/rendanggg.jpeg') }}" class="mr-3 rounded-circle"
                                        height="180" width="180" alt="Sample Image" loading="lazy">
                                </a>
                                <h5 class="text-center py-4">Indonesian</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#">
                                    <img src="{{ url('assets/img/sushii.jpg') }}" class="mr-3 rounded-circle" height="180"
                                        width="180" alt="Sample Image" loading="lazy">
                                </a>
                                <h5 class="text-center py-4">Japanese</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#">
                                    <img src="{{ url('assets/img/mapotofu.jpeg') }}" class="mr-3 rounded-circle"
                                        height="180" width="180" alt="Sample Image" loading="lazy">
                                </a>
                                <h5 class="text-center py-4">Chinese</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#">
                                    <img src="{{ url('assets/img/tteok.jpg') }}" class="mr-3 rounded-circle" height="180"
                                        width="180" alt="Sample Image" loading="lazy">
                                </a>
                                <h5 class="text-center py-4">Korean</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#">
                                    <img src="{{ url('assets/img/tomyum.jpg') }}" class="mr-3 rounded-circle" height="180"
                                        width="180" alt="Sample Image" loading="lazy">
                                </a>
                                <h5 class="text-center py-4">Thailand</h5>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="media hstack gap-5 justify-content-center pb-5 ">
                            <div class="img-hover">
                                <a href="#"><img src="{{ url('assets/img/indocurry.jpg') }}" class="mr-3 rounded-circle"
                                        height="180" width="180" alt="Sample Image" loading="lazy"></a>
                                <h5 class="text-center py-4">Indian</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#"><img src="{{ url('assets/img/pho.jpg') }}" class="mr-3 rounded-circle" height="180"
                                        width="180" alt="Sample Image" loading="lazy"></a>
                                <h5 class="text-center py-4">Vietnamese</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#"><img src="{{ url('assets/img/spaghetti.jpg') }}" class="mr-3 rounded-circle"
                                        height="180" width="180" alt="Sample Image" loading="lazy"></a>
                                <h5 class="text-center py-4">Italian</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#"><img src="{{ url('assets/img/asamlaksa.jpg') }}" class="mr-3 rounded-circle"
                                        height="180" width="180" alt="Sample Image" loading="lazy"></a>
                                <h5 class="text-center py-4">Malaysian</h5>
                            </div>
                            <div class="img-hover">
                                <a href="#"><img src="{{ url('assets/img/chickenadobo.jpeg') }}" class="mr-3 rounded-circle"
                                        height="180" width="180" alt="Sample Image" loading="lazy"></a>
                                <h5 class="text-center py-4">Filipina</h5>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategory"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategory"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- Resep terbaru -->
        <section>
            <div class="container">
                <h2 class="text-center pt-5 pb-3">RESEP TERBARU</h2>
                <div class="row row-cols-1 row-cols-md-4 g-4 mx-5 pb-5 justify-content-center">
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
                                        <a href="{{ route('recipe.show', $item->id) }}"
                                            class="text-dark text-decoration-none">
                                            {{ $item->title }}
                                        </a>
                                    </h5>
                                    <div class="media hstack gap-1 justify-content-start">
                                        <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20"
                                            alt="">
                                        <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20"
                                            alt="">
                                        <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20"
                                            alt="">
                                        <img src="{{ url('assets/img/icons8-star-48.png') }}" width="20"
                                            alt="">
                                        <img src="{{ url('assets/img/icons8-star-grey-48.png') }}" width="20"
                                            alt="">
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
                                        <small class="text-body-secondary text-end"><img src="img/icons8-clock-48.png"
                                                width="17" alt=""> {{ $item->est_time }}m</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center pb-5">
                    <a href="{{ route('recipe.index') }}" class="btn btn-outline-danger center">Lihat Semua</a>
                </div>
            </div>
        </section>
    </main>
@endsection
