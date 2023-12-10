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
                                    <a href=""><button type="button" class="btn btn-outline-dark">Add to Cart</button></a>
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
                    <li>Returns: You may return unworn merchandise in the original box/package within 30 days of receipt of your shipment for a full refund. We'll even refund the shipping cost if the return is a result of our error or a manufacturer's defect. If we shipped the correct merchandise but you are dissatisfied with the size, color, style, or fit, we will not reimburse shipping charges. For holiday shoppers, returns purchased between November 1 and December 31 will be accepted until February 1.</li>
                    <li>Exchanges: All exchanges require a photo of the upper and sole of the shoe sent to [email address], along with a photo of your receipt and a written explanation for the return. Exchanges are accepted if the shoe is in new condition (not worn even once) and in the original packaging. The original packaging must be placed inside a shipping box and secured properly to ship back to [Retail Shop Address].</li>
                    <li>Refunds: Refunds typically take 3-5 business days. If Rewards Points were used with the purchase, you have the option to return the item(s) in the store and get the full pre-reward points price refunded, or return the item(s) to our Distribution Center, where we will credit your reward points back to your account and refund the difference.</li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
