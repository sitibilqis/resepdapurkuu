<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>

.wrapper {
    width: 1300px;
    margin: auto;
    position: relative;
}

h2 {
  line-height: 100px;
}

</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="wrapper">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</nav>

<div class="wrapper"> 
    @yield('content')
</div>

</body>
</html>