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

    <div class="pagetitle">
        <p>Product Detail</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="{{ asset($shoe->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body" style="line-height: 1.5;">
                                <p> </p>
                                <p> </p>
                                <h5 class="card-title" style="font-weight: bold; font-size: 22px;">{{ $shoe->name }}</h5>
                                <p class="card-text" style="font-weight: 500; font-size: 20px;">{{ $shoe->type }} - {{ $shoe->size_EU }}</p>
                                <p class="card-text" style="font-weight: 500; font-size: 20px;">Rp {{ $shoe->price }}</p>
                                <p class="card-text" style="font-weight: 500; font-size: 20px;">Stock: {{ $shoe->stock }}</p>
                                <div class="mt-2">
                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#returnPolicyModal">
                                        Return Policy
                                    </button>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('addtocart', $shoe->id) }}"><button type="button" class="btn btn-outline-dark">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="returnPolicyModal" tabindex="-1" aria-labelledby="returnPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="returnPolicyModalLabel">Return Policy</h5>
                </div>
                <div class="modal-body">
                    <p>Returns: Unworn items in original packaging within 30 days for a full refund. Shipping refunded for errors or defects; not for size, color, or style dissatisfaction. Holiday purchases (Nov 1 - Dec 31) accepted until Feb 1.</p>
                    <p>Exchanges: New condition, unworn shoes in original packaging. Provide upper and sole photos, receipt, and written explanation. Ship to [Retail Shop Address].</p>
                    <p>Refunds: Processed in 3-5 business days. For Rewards Points purchases, return to the store for a full pre-reward points refund or to the Distribution Center for points credit and refund difference.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
