@extends('layouts.app')

@section('body')
    @if(session('cart'))
        <h1 class="fs-4 mt-5 fw-bold" style="text-align:center; font-family: Montserrat;">CART PRODUCT</h1>

        <tr>
            <td>{{ $cart['name'] }}</td>
            <div>{{$cart['type']}}</div>
            <div>{{$cart['shoe_category']}}</div>
            <div>{{$cart['price']}}</div>
            <div>{{$cart['quantity']}}</div>
            <td><img src="{{ asset($cart['image']) }}" alt="{{ $cart['name'] }}" style="max-width: 50px;"></td>
            <td>Rp. {{ $cart['price'] }}</td>
            <td>
                <form action="{{ route('cart.increaseQuantity') }}" method="get">
                    @csrf
                    <button type="submit">+</button>
                </form>
                <form action="{{ route('cart.decreaseQuantity') }}" method="get">
                    @csrf
                    <button type="submit" @if($cart['quantity'] <= 1) disabled @endif>-</button>
                </form>
            </td>
        </tr>

        <div class="md-10">
            <a href="{{ route('remove') }}" class="btn btn-danger fw-bold">Remove</a>
        </div>

        <div class="md-10">
            <a href="{{ route('checkout.index') }}" class="btn bg-primary text-light fw-bold">Checkout</a>
        </div>
    @else
        <div>EMPTY</div>
    @endif

@endsection
