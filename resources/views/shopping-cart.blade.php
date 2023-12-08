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
    <h1 class="fs-4 mt-5" style="text-align:center; font-family: Montserrat;">CART PRODUCT</h1>
    <form class="m-5" method="POST" action="{{route('store', ['id' => $home->id])}}" enctype="">
        {{method_field('post')}}
        @csrf
        <table class="table">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">Picture</th>
                    <th scope="col">Produk Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">SubTotal Price</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align: center;">
                    <td scope="row" name="fotoProduk"><img src="{{ asset('storage/images') }}/{{ $home->fotoProduk}}" alt="Sepatu" style= "width: 8vw; height: 8vw"></td>
                    <td name="namaProduk">{{$home->namaProduk}}<br>
                        <p name="variasi">{{$home->variasi}}</p>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <input type="number" class="form-control" id="quantity" name="quantity" style="width: 70px;" placeholder="12">
                        </div>
                    </td>
                    <td name="harga">Rp{{$home->harga}},00</td>
                    <td>Rp<span id="totalHarga" name="totalHarga"></span>,00</td>

                        {{-- <button type="submit" name="action" value="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus Data</button> --}}
                            <!-- Hidden input untuk menyimpan ID yang akan dihapus -->
                        {{-- <input type="hidden" name="delete_id" value="{{ $home->id }}">

                        <!-- Tombol untuk menghapus data -->
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirmAndDelete()">Hapus Data</button> --}}
                        {{-- <button type="submit" class="btn btn-outline-danger" name="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus Data</button> --}}


                    <script>
                        const hargaProduk = {{ $home->harga }};
                        const inputKuantitas = document.getElementById('quantity');
                        const getTotalHarga = document.getElementById('totalHarga');
                        inputKuantitas.addEventListener('input', function() {
                            const kuantitas = parseInt(inputKuantitas.value);
                            const totalHarga = hargaProduk * kuantitas;
                            getTotalHarga.textContent = totalHarga;
                        });
                    </script>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-md-center gap-3">
            <button type="submit" class="btn btn-success" href="">Checkout</button>
            <a href="{{route('home')}}" class="btn btn-dark">Cancel</a>
        </div>
    </form>
    <form class="m-5 d-flex justify-content-center" method="POST" action="{{route('delete', ['id' => $home->id])}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><img src="{{asset("storage/images/trash.svg")}} " alt="Remove" ></button>
    </form>
    <footer>
        <p class="text-light" style="text-align:center; bottom:0;">2023, SHOOSH</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

                    {{-- @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['harga'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ asset('storage/images') }}/{{ $details['fotoProduk'] }}" width="100" height="100" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['namaProduk'] }}</h4>
                                    </div>
                                </div>
                            </td>

                            <td data-th="Price">${{ $details['harga'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" id="quantity" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                            </td>
                            <td data-th="Subtotal" id="subtotal" class="text-center"></td>
                            <script>
                                const hargaBarang = {{ $details['harga'] }};
                                const inputKuantitas = document.getElementById('quantity');
                                const getTotalHarga = document.getElementById('subtotal');

                                inputKuantitas.addEventListener('input', function() {
                                    const kuantitas = parseInt(inputKuantitas.value);
                                    const totalHarga = hargaBarang * kuantitas;
                                    getTotalHarga.textContent = totalHarga;
                                });
                            </script>

                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                            </td>

                        </tr>
                    @endforeach
                @endif

            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                        <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
                    </td>
                </tr>
            </tfoot>
        </table> --}}
    {{-- @section('scripts')
    <script type="text/javascript">

        $(".cart_remove").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('delete') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
    @endsection --}}
