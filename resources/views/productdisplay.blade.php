@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
@endsection

@section('body')
    <ul class="horizontal-list" id="categoryList">
        <li class="category-item{{ !request()->has('category') ? ' active' : '' }}">
            <a href="{{ route('productdisplay') }}">All</a>
        </li>
        <li class="category-item{{ request('category') === 'men' ? ' active' : '' }}">
            <a href="{{ route('productdisplay', ['category' => 'men']) }}">Men</a>
        </li>
        <li class="category-item{{ request('category') === 'women' ? ' active' : '' }}">
            <a href="{{ route('productdisplay', ['category' => 'women']) }}">Women</a>
        </li>
        <li class="category-item{{ request('category') === 'kid' ? ' active' : '' }}">
            <a href="{{ route('productdisplay', ['category' => 'kid']) }}">Kid</a>
        </li>
    </ul>

    <div class="displaycont">
        <div class="container">
            <div class="d-flex gap-5 row justify-content-center">
                @foreach ($shoes as $sh)
                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('productdetail', ['id' => $sh->id, 'category' => request('category')]) }}" class="card-link">
                                <img src="{{ asset($sh->image) }}" class="card-img-top" alt="...">
                                <div class="card-body" style="line-height: 1;">
                                    <p class="card-title" style="font-weight: bold; font-size: 22px;">{{ $sh->name }}</p>
                                    <p class="card-text" style="font-weight: 500; font-size: 20px;">{{ $sh->type }} - {{ $sh->size_EU }}</p>
                                    <p class="card-text" style="font-weight: 500; font-size: 20px;">Rp {{ $sh->price }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
