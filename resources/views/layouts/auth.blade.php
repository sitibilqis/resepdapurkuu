<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }} | ResepDapurku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>
<style>
    html {
        font-family: "Montserrat", sans-serif;
        font-size: 12px;
        background-color: #fff;
        height: 100%;
        font-weight: 600;
    }

    .container {
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;
    }

    .login-form {
        height: 500px;
        width: 430px;
        padding: 0 35px;
        background-color: #fff;
        border: none;
    }

    input[type="email"],
    input[type="password"] {
        border-radius: 5px;
    }

    .btn-login {
        height: 35px;
        width: 200px;
        border-radius: 5px;
        font-weight: 600;
        margin: 0 50px;
    }

    .link {
        color: #f70000;
        text-decoration: none;
    }

    .img-google {
        height: 20px;
        width: 20px;
    }

    .form-check-input {
        color: #198754;
    }

    .forgot {
        color: #000000;
    }

    .card-body {
        margin-top: 130px;
    }

    .btn {
        margin-left: 65px;
    }
</style>

<body>
    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
