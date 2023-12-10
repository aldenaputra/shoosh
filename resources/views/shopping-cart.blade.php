@extends('layouts.app')

@section('body')
    <h1 class="fs-4 mt-5 fw-bold" style="text-align:center; font-family: Montserrat;">CART PRODUCT</h1>
    <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row g-0" style="padding-top: 10px">
                        @if(session('cart'))
                        <div class="row main align-items-center">
                            <div class="col-3">
                                <img class="img-fluid" src="{{ asset($cart['image']) }}" alt="Product Image" style="border-radius: 4px">
                            </div>
                            <div class="col-3">
                                <div class="text-muted">{{$cart['shoe_category']}}</div>
                                <div>{{$cart['name']}}</div>
                            </div>
                            <div class="col-1">
                                <form action="{{ route('cart.decreaseQuantity') }}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-sm @if($cart['quantity'] <= 1) disabled @endif">-</button>
                                </form>
                            </div>
                            <div class="col-1">
                                {{$cart['quantity']}}
                            </div>
                            <div class="col-1">
                                <form action="{{ route('cart.increaseQuantity') }}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-sm">+</button>
                                </form>
                            </div>
                            <div class="col-3">{{$cart['price']}}</div>
                        </div>
                        <div class="col justify-content-end align-items-center d-flex" style="padding-top: 20px; padding-right: 10px; padding-bottom: 10px">
                            <a href="{{ route('remove') }}" class="btn btn-danger fw-bold" style="margin-right: 10px">Remove</a>
                            <a href="{{ route('checkout.index') }}" class="btn bg-primary text-light fw-bold">Checkout</a>
                        </div>
                        @else
                            <div>EMPTY</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
