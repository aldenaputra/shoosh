@extends('layouts.app')

@section('body')
    <div class="container my-3">
        <div class="row pt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Tracking Number: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">{{$transaction->id}}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Order Date: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">{{$transaction->created_at}}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Address: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">{{$transaction->user->address}}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Payment Method: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">{{$transaction->payment_method}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h4>Order Detail</h4>
        <div class="row pt-4">
            <div class="mb-3 col">
                <div class="d-flex flex-md-row flex-column mx-2 flex-wrap">
                    <div class="col-md-2 p-2">
                        <img src="{{ asset($transaction->image) }}" alt="shoos" class="img-fluid rounded-end rounded-start"/>
                    </div>

                    <div class="col m-2">
                        <p class="fw-bold" style=" font-size:18px">{{$transaction->shoe->name}}</p>
                        <p class="fw-light" style=" font-size:18px">{{$transaction->shoe->shoe_category}} {{$transaction->shoe->size_EU}}</p>
                        <p class="fw-bold" style=" font-size:18px">Sub-harga {{$transaction->shoe->price}}</p>
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
                        <p style="font-size:18px">{{$transaction->shoe->price}}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size:18px">Total: </p>
                    </div>
                    <div class="col-6 text-end">
                        <p style="font-size:18px">{{$transaction->shoe->price}}</p>
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
@endsection