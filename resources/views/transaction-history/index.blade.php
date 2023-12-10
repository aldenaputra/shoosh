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
        <h1>My History</h1>
        @foreach ($transactionbyuser as $history)
        <a href="{{ route('transaction-history.show', ['id' => $history->id]) }}" style="text-decoration: none;">
        {{-- <a href="transaction-history/show" style="text-decoration: none"> --}}
            <div class="row pt-4">
                <div class="mb-3 col">
                    <div class="d-flex flex-md-row">
                        <div class="col-md-2">
                            <img src="{{ asset($history->image) }}" alt="shoos" class="img-fluid rounded-end rounded-start"/>
                        </div>
                        <div class="col">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <p style="font-size:18px; color:black">OrderID: </p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p style="font-size:18px; color:black">{{ $history->id }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <p style="font-size:18px; color:black">Date: </p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p style="font-size:18px; color:black">{{ $history->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <p style="font-size:18px; color:black">Item Qty: </p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p style="font-size:18px; color:black">{{ $history->quantity }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <p style="font-size:18px; color:black">Total: </p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p style="font-size:18px; color:black">Rp. {{ $history->total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
            <hr>
        @endforeach
</body>
</html>
