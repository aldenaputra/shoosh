<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body background-color: #829B97;>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-style:italic; font-weight:bold;">SHOOSH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
          </span>
        </div>
      </nav>
    <h1 style="text-align:center;">SUMMARY</h1>
    <div class="m-5">
        <table class="table">
            <tbody>
                <tr>
                    <td>Nama:</td>
                    <td class="text-md-end">Shinobu</td>
                </tr>
                <tr>
                    <td>Alamat Tujuan:</td>
                    <td class="text-md-end">Jalan kediaman kupu-kupu</td>
                </tr>
                <tr>
                    <td>Nomor HP:</td>
                    <td class="text-md-end">08123456789</td>
                </tr>
                <tr>
                    <td>Nomor Telp:</td>
                    <td class="text-md-end">021-32884</td>
                </tr>
                <tr>
                    <td>Foto</td>
                    {{-- foto --}}
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td class="text-md-end">Rp. 0</td>
                </tr>
                <tr>
                    <td>Total Harga:</td>
                    <td class="text-md-end">Rp. 8,000,000</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-md-center">
        <button type="submit" class="btn btn-primary">Pesan sekarang</button>
    </div>
    <footer>
        <h1 style="text-align:center;">2023, SHOOSH</h1>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
