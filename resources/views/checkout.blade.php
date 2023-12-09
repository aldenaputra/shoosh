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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Checkout</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-family: 'Nunito', sans-serif;
            }

            #overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }

            .loader {
                border: 8px solid #f3f3f3;
                border-top: 8px solid #3498db;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

        </style>
    </head>
    <body class="antialiased">
        <!-- Modal untuk Select voucher-->
        <div class="modal fade" id="select_voucher" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="select_voucher_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="select_voucher_label">Voucher Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('processingRequest') }}" method="POST" id="validateVoucher">
                        @csrf
                        <input type="hidden" name="action" value="validateVoucher">
                        @forelse ($voucher_code as $voucher)
                            <div class="voucher-ticket" style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px">
                                <div class="row">
                                    <div class="p-3 col-6" style="font-size: 14px">
                                        Voucher ID: {{ $voucher['id'] }}
                                    </div>
                                    <div class="p-3 col-4" style="font-size: 14px">
                                        Discount:   {{ $voucher['discount'] }}%
                                    </div>
                                    <div class="p-3 col-2" style="font-size: 14px">
                                        <input type="radio" name="selectedVoucher" value="{{ $voucher['id'] }}">
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="p-3 col-12" style="font-size: 14px">No Voucher available!</div>
                        @endforelse
                        <button type="submit" class="btn btn-primary" id="validateVoucherBtn">Apply Voucher</button>
                    </form>
                </div>
            </div>
            </div>
        </div>

        <!--Loader-->
        <div id="overlay">
            <div class="loader"></div>
        </div>


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h2>Order Summary</h2>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg d-flex justify-content-center align-items-center">
                    <form action="{{ route('processingRequest') }}" method="POST" class="col-11" id="changeAddress">
                        @csrf
                        <input type="hidden" name="action" value="changeAddress">
                        <div class="form-group mb-3 mt-4">
                            <label for="nama">Customer Name</label>
                            <input type="text" class="form-control disabled" id="nama" name="nama" value={{ $user->nama }} disabled readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label for="alamat">Customer Address</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="3">{{ $user->alamat }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-4" reset-alert-message id="changeAddressBtn">Update Address</button>
                    </form>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="p-4">
                            <!--Buat nampilin list dalam bentuk table-->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="py-4 col-3 text-center">Product Image</th>
                                        <th class="py-4 col-4 text-center">Product's Name</th>
                                        <th class="py-4 col-2 text-center">Unit Price</th>
                                        <th class="py-4 col-1 text-center">Quantity</th>
                                        <th class="py-4 col-2 text-center">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_price = 0;
                                    @endphp
                                    @forelse ($products as $product)
                                        @if ($product->payment_status == false)
                                            <tr>
                                                <td class="py-4 col-3 text-center mt-5">
                                                    <img src="{{ $product->image }}" alt="img">
                                                </td>
                                                <td class="py-4 col-4 text-center mt-5">{{ $product->nama_barang }}</td>
                                                <td class="py-4 col-2 text-center mt-5">{{ $product->harga_barang }}</td>
                                                <td class="py-4 col-1 text-center mt-5">{{ $product->quantity }}</td>
                                                <td class="py-4 col-2 text-center mt-5">{{ ($product->quantity * $product->harga_barang) }}</td>
                                            </tr>
                                            @php
                                                $total_price += ($product->quantity * $product->harga_barang);
                                            @endphp
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center">No Data!</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg d-flex justify-content-center align-items-center">
                    <div class="p-3 col-3" style="font-size: 14px">
                        Voucher Code
                    </div>
                    <div class="p-3 col-4" style="font-size: 14px; margin-left: 32%">
                        <button class="btn btn-primary" style="font-size: 11px" data-bs-toggle="modal" data-bs-target="#select_voucher">
                            @if(session('selected_voucher'))
                                {{ session('selected_voucher')['id'] }}
                            @else
                                Select Voucher Code
                            @endif
                        </button>
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg d-flex justify-content-center align-items-center">
                    <div class="p-3 col-3" style="font-size: 14px">
                        Payment Method
                    </div>
                    <div class="p-3 col-4" style="font-size: 14px; margin-left: 30%">
                        <button class="btn btn-primary" style="font-size: 11px" data-bs-toggle="modal" data-bs-target="#select_payment_method">
                            @if(session('selected_payment_method'))
                                {{ session('selected_payment_method') }}
                            @else
                                Select Payment Method
                            @endif
                        </button>
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <p class="mb-2 mt-3">Payment Details</p>
                        <p class="mt-3" style="font-size: 12px">Total Product Price:</p>
                        <p style="font-size: 12px">Service Fee:</p>
                        @if(session('selected_voucher'))
                            <p class="mb-3" style="font-size: 12px">Discount:</p>
                        @endif
                    </div>
                    <div class="col-5">
                        <p class="mb-2 mt-3" style="color: white">-</p>
                        <p class="mt-3" style="font-size: 12px">{{ $total_price }}</p>
                        <p style="font-size: 12px">{{ 1000 }}</p>
                        @if(session('selected_voucher'))
                            <p class="mb-3" style="font-size: 12px">{{ session('selected_voucher')['discount'] }}% from total price</p>
                        @endif
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        @php
                            $total_payment = 0;
                        @endphp
                        @if (session('selected_voucher'))
                            @php
                                $total_payment = ($total_price * (100 - session('selected_voucher')['discount']) / 100) + 1000;
                            @endphp
                            <p>Total Payment:  <span id="total_price">{{ $total_payment }}</span></p>
                        @else
                            @php
                                $total_payment = $total_price + 1000
                            @endphp
                            <p>Total Payment:  <span id="total_price">{{ $total_payment}}</span></p>
                        @endif
                    </div>
                    <!--Button buat pindah ke pay-->
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                       <button class="btn btn-primary" style="margin-right: 7px" data-bs-toggle="modal" data-bs-target="#confirmation">Pay</button>
                    </div>
                </div>

                 <!-- Modal untuk Select Payment Method-->
                <div class="modal fade" id="select_payment_method" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="select_payment_method_label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="select_payment_method_label">Payment Method</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('processingRequest') }}" method="POST" id="validatePaymentMethod">
                                @csrf
                                <input type="hidden" name="action" value="validatePaymentMethod">
                                <input type="hidden" name="total_payment" value="{{ $total_payment }}">
                                @forelse ($payment_method as $payment_method)
                                    <div class="voucher-ticket" style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px">
                                        <div class="row">
                                            <div class="p-3 col-6" style="font-size: 14px">
                                                {{ $payment_method->nama_payment_method }}
                                            </div>
                                            <div class="p-3 col-4" style="font-size: 14px">
                                                @if($payment_method->total_saldo != -1)
                                                    Total Balance:   {{ $payment_method->total_saldo }}
                                                @endif
                                            </div>
                                            <div class="p-3 col-2" style="font-size: 14px">
                                                <input type="radio" name="payment_method" value="{{ $payment_method }}">
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="p-3 col-12" style="font-size: 14px">No Payment Method available!</div>
                                @endforelse
                                <button type="submit" class="btn btn-primary" id="validatePaymentMethodBtn">Use Payment Method</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Modal Konfirmasi pembayaran-->
                <div class="modal fade" id="confirmation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmation_label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="confirmation_label">Payment Method</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('processingRequest') }}" method="POST" id="validateConfirmation">
                                @csrf
                                <input type="hidden" name="action" value="pay">
                                <input type="hidden" name="total_payment" value="{{ $total_payment }}">
                                <input type="hidden" name="selected_payment_method" value="{{ session('selected_payment_method') }}">
                                <div class="mb-3">
                                    Are you sure to pay all the items?
                                </div>
                                <button type="submit" class="btn btn-primary" id="validateConfirmationBtn">Yes</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

                <!--notif kalo misalkan statusnya success-->
                @if($message = Session::get('success'))
                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                            <strong class="me-auto">System Notification</strong>
                            <small>Now</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body alert alert-success">
                                {{ $message }}
                            </div>
                        </div>
                    </div>
                @endif
                <!--notif kalo misalkan statusnya gagal/error-->
                @if($message = Session::get('error'))
                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                            <strong class="me-auto">System Notification</strong>
                            <small>Now</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body alert alert-danger">
                                {{ $message }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var toast = new bootstrap.Toast(document.getElementById('liveToast'));
                toast.show();
            });

            document.addEventListener('DOMContentLoaded', function () {
                const spinner = document.getElementById('overlay');
                const changeAddress = document.getElementById('changeAddress');
                const changeAddressBtn = document.getElementById('changeAddressBtn');

                changeAddress.addEventListener('submit', function () {
                    spinner.style.display = 'flex';
                    changeAddressBtn.setAttribute('disabled', 'true');
                });

                const validateVoucher = document.getElementById('validateVoucher');
                const validateVoucherBtn = document.getElementById('validateVoucherBtn');

                validateVoucher.addEventListener('submit', function () {
                    spinner.style.display = 'flex';
                    validateVoucherBtn.setAttribute('disabled', 'true');
                });

                const validatePaymentMethod = document.getElementById('validatePaymentMethod');
                const validatePaymentMethodBtn = document.getElementById('validatePaymentMethodBtn');

                validatePaymentMethod.addEventListener('submit', function () {
                    spinner.style.display = 'flex';
                    validatePaymentMethodBtn.setAttribute('disabled', 'true');
                });

                const validateConfirmation = document.getElementById('validateConfirmation');
                const validateConfirmationBtn = document.getElementById('validateConfirmationBtn');

                validateConfirmation.addEventListener('submit', function () {
                    spinner.style.display = 'flex';
                    validateConfirmationBtn.setAttribute('disabled', 'true');
                });
            });
        </script>
    </body>
</html>
