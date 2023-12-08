
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping cart</title>

    {{-- Import link css dari internet --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Import file css external --}}
    <link href="bootstrap/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Import file css internal --}}
    {{-- <link href="resources/css/style.css" rel="stylesheet"> --}}
</head>
  <body style="background-color: #829B97;" >
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#" style="font-style:italic; font-weight:bold;">SHOOSH</a>
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <span>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Login</a>
                    </li>
                </ul>
            </div>
          </span>
        </div>
      </nav>
    <h1 class="fs-4 mt-5" style="text-align:center; font-family: Montserrat;">Create product</h1>
    <form class="m-5" method="POST" action="{{route('storeHome')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Foto Barang</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="fotoProduk">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="namaProduk">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Variasi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="variasi">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Harga</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="harga">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <footer>
        <p class="text-light" style="text-align:center; bottom:0;">2023, SHOOSH</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
