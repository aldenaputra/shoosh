<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="row pt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Tracking Number: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">1</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Order Date: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">Oct 12, 2023</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Address: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">Kemanggisan No. 123</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Payment Method: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">Virtual BCA</p>
                    </div>
                </div>
            </div>                
        </div>
        <hr>
        <h4>Order Detail</h4>
        <div class="row pt-4">
            <div class="mb-3 col">
                <div class="d-flex flex-md-row flex-column mx-2 flex-wrap">
                    <div class="col-md-2">
                        <img src="{{ asset('images/men1 5.png') }}" alt="shoos" class="img-fluid rounded-end rounded-start"/>
                    </div>
                
                    <div class="col">
                        <p class="fw-bold" style=" font-size:18px">Naik Water Force</p>
                        <p class="fw-light" style=" font-size:18px">Men 42</p>
                        <p class="fw-bold" style=" font-size:18px">Sub-harga Rp. 4.477.000</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h4>Payment Detail</h4>
        <div class="row pt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Sub-total: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">Rp. 4.477.000</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Discon: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">Rp. 0</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Total: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">Rp. 4.477.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
              <a href="#" class="btn btn-outline-primary mb-3 w-100">Send Feedback</a>
            </div>
            <div class="col">
                <a href="#" class="btn btn-outline-primary mb-3 w-100">Return</a>
    
            </div>
          </div>
    </div>
</body>
</html>