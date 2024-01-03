<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ResepDapurku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap">
    @stack('addon-style')
</head>
<style>
    * {
        font-family: 'Jost', sans-serif;
    }

    .navbar .navbar-brand {
        color: #ffffff;
    }

    .navbar .nav-link {
        color: #ffffff;
    }

    .navbar .navbar-text {
        color: #ffffff;
    }

    .nav-item .nav-link.active {
        color: #ffffff;
    }

    .nav-item .nav-link:hover {
        text-decoration: underline;
        color: #ffffff;
    }

    p {
        font-size: small;
    }

    .bg-recipe {
        background-color: #F1F0EC;
    }

    .dropdown-menu {
        color: #ffffff;
    }

    article {
        background: white;
        width: 1500px;
        padding: 30px;
        position: relative;
    }

    article::after {
        content: "";
        position: absolute;
        top: 100%;
        height: 20px;
        width: 100%;
        left: 0;
        background: url(img/rip.svg) bottom;
        background-size: 100%;
    }

    #carouselExample .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23E31F1F' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
    }

    #carouselExample .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23E31F1F' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
    }

    #carouselCategory .carousel-control-next,
    #carouselCategory .carousel-control-prev

    /*, .carousel-indicators */
        {
        filter: invert(100%);
    }

    .recipe:hover {
        text-decoration: underline;
    }

    .img-hover img {
        -webkit-transition: all .3s ease;
        /* Safari and Chrome */
        -moz-transition: all .3s ease;
        /* Firefox */
        -o-transition: all .3s ease;
        /* IE 9 */
        -ms-transition: all .3s ease;
        /* Opera */
        transition: all .3s ease;
        position: relative;
    }

    .img-hover img:hover {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateZ(0) scale(1.20);
        /* Safari and Chrome */
        -moz-transform: scale(1.20);
        /* Firefox */
        -ms-transform: scale(1.20);
        /* IE 9 */
        -o-transform: translatZ(0) scale(1.20);
        /* Opera */
        transform: translatZ(0) scale(1.20);
    }

    .img-hover:hover:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 25px;
        height: 25px;
    }

    .grayscale {
        -webkit-filter: brightness(1.10) grayscale(100%) contrast(90%);
        -moz-filter: brightness(1.10) grayscale(100%) contrast(90%);
        filter: brightness(1.10) grayscale(100%);
    }

    .btn-danger {
        background-color: #E31F1F;
    }

    .text-danger {
        color: #E31F1F;
    }

    .dropdown-menu {
        color: #ffffff;
    }

    .dropdown-menu.active {
        color: #F1F0EC;
    }

    .form-control {
        border-radius: 10px;
    }

    .drop-container {
        position: relative;
        display: flex;
        gap: 10px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 250px;
        border-radius: 10px;
        border: 2px dashed #555;
        color: #444;
        cursor: pointer;
    }

    .drop-container:hover {
        background: #eee;
        border-color: #111;
    }

    .drop-container:hover .drop-title {
        color: #222;
    }

    .drop-title {
        color: #444;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        transition: color .2s ease-in-out;
    }

    input[type=file]::file-selector-button {
        margin-right: 20px;
        border: none;
        background: #E31F1F;
        padding: 8px 20px;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
        transition: background .2s ease-in-out;
    }

    input[type=file]::file-selector-button:hover {
        background: #E31F1F;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #E31F1F;">
        <div class="container-fluid">
            <img src="{{ url('assets/img/resepdapurku.png') }}" class="mx-4" width="20" alt="">
            <a class="navbar-brand ml-1" href="#">ResepDapurku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse data-bs-light" id="navbarNavDropdown">
                <ul class="navbar-nav mx-3">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="/resepdapurku">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/recipe">Indonesia</a></li>
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
                    </li>
                    @auth
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('recipe.create') }}">Unggah Resep</a>
                        </li>
                    @endauth
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/article">Tips & Trik</a>
                    </li>
                </ul>
            </div>
            <div class="ms-auto">
                <ul class="navbar-nav flex-row mx-5">
                    <li class="nav-item mx-2 my-auto">
                        <a href="#">
                            <img src="{{ url('assets/img/search.png') }}" width="25" height="25" alt="Search">
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link">Selamat Datang {{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="nav-link" type="submit"
                                    onclick="return confirm('Kamu yakin ingin logout?')">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Masuk / Daftar</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="wrapper">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 max text-dark">
                    <h6>TENTANG KAMI</h6>
                    <p class="m-0 col-6">Kami menyediakan resep yang dibuat dengan bahan-bahan segar dan berkualitas
                        tinggi.</p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-end">
                    <h6>KONTAK KAMI</h6>
                    <p class="m-0">Telepon: +6285162994566</p>
                    <p class="m-0">Email: resepdapurku@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-5 mb-1 mb-md-0">
                    <div>
                        <a href="https://facebook.com">
                            <img src="{{ url('assets/img/icons8-facebook-f-48.png') }}" height="20"
                                alt="Facebook">
                        </a>
                        <a href="https://instagram.com">
                            <img src="{{ url('assets/img/icons8-instagram-48.png') }}" height="20"
                                alt="Instagram">
                        </a>
                        <a href="https://twitter.com">
                            <img src="{{ url('assets/img/icons8-twitter-64.png') }}" height="20" alt="Twitter">
                        </a>
                        <a href="https://youtube.com">
                            <img src="{{ url('assets/img/icons8-youtube-60.png') }}" height="20" alt="YouTube">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 mb-4 mb-md-0">
                    <div class="text-start">
                        © 2023,
                        <a class="fs-6" style="color:#E31F1F" href="#">ResepDapurku</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ url('assets/script.js') }}"></script>
    <script src="{{ url('assets/scriptt.js') }}"></script>
    @stack('addon-script')
</body>

</html>
