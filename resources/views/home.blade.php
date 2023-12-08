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

    <h1 class="fs-4 mt-5" style="text-align:center; font-family: Montserrat;">All product</h1>
    @extends('layout.proccess')
    @section('content')
    @foreach ($homes as $hom)
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/storage/images/'. $hom->fotoProduk)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$hom->namaProduk}}</h5>
                <p class="card-text">{{$hom->variasi}}</p>
                <p class="card-text">{{$hom->harga}}</p>
                <a href="{{route('cart',['id'=>$hom->id])}}" class="btn btn-primary">Add a cart</a>
                {{-- <a href="{{route('cart', ['id'=>$hom->id])}}" class="btn btn-primary">Add a cart</a> --}}
            </div>
        </div>
    @endforeach

    <a type="button" class="btn btn-primary" href="{{route('form')}}">Add item</a>
    <footer>
        <p class="text-light" style="text-align:center; bottom:0;">2023, SHOOSH</p>
    </footer>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
