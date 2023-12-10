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
                                <p class="card-text" style="font-weight: 500; font-size: 20px;">{{ $shoe->type }} -
                                    {{ $shoe->size_EU }}</p>
                                <p class="card-text" style="font-weight: 500; font-size: 20px;">Rp {{ $shoe->price }}</p>
                                <p class="card-text" style="font-weight: 500; font-size: 20px;">Stock: {{ $shoe->stock }}
                                </p>
                                <div class="mt-2">
                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                        data-bs-target="#returnPolicyModal">
                                        Return Policy
                                    </button>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('addtocart', $shoe->id) }}"><button type="button"
                                            class="btn btn-outline-dark">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="returnPolicyModal" tabindex="-1" aria-labelledby="returnPolicyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="returnPolicyModalLabel">Return Policy</h5>
                </div>
                <div class="modal-body">
                    <p><strong>Effective Date:</strong> 30 days after purchasing</p>
                    <p>Thank you for shopping with SHOOSH. We strive to provide you with the best
                        footwear, and your satisfaction is our priority. If you are not entirely satisfied with
                        your purchase, we're here to help.</p>
                        <ol>
                            <li>
                                <strong>Eligibility:</strong>
                                <ul>
                                    <li>We accept returns and exchanges within 30 days of the purchase date.
                                    </li>
                                    <li>To be eligible for a return or exchange, the shoes must be unused, in the
                                        same condition as received, and in the original packaging.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Return Process:</strong>
                                <ul>
                                    <li>To initiate a return or exchange, please contact our customer service team
                                        at shoosh@gmail.com to obtain a Return Authorization (RA)
                                        number.</li>
                                    <li>Clearly mark the RA number on the outside of the package.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Return Shipping:</strong>
                                <ul>
                                    <li>Customers are responsible for return shipping costs unless the return is due
                                        to a defect or an error on our part.</li>
                                    <li>We recommend using a trackable shipping method to ensure the safe return of
                                        the shoes.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Refund or Exchange:</strong>
                                <ul>
                                    <li>Upon receiving the returned item, we will inspect it to ensure it meets the
                                        return conditions.</li>
                                    <li>If eligible, you may choose a refund to your original payment method or an
                                        exchange for another item of equal or lesser value.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Non-Returnable Items:</strong>
                                <ul>
                                    <li>Customized and personalized shoes are non-returnable unless there is a
                                        manufacturing defect.</li>
                                    <li>For hygiene reasons, we cannot accept returns on shoes that show signs of
                                        wear, have damaged packaging, or are missing original tags.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Damaged or Defective Items:</strong>
                                <ul>
                                    <li>If you receive a damaged or defective item, please contact us immediately
                                        for assistance.</li>
                                </ul>
                            </li>
                        </ol>

                        <p><strong>Policy Update:</strong></p>
                        <p>We reserve the right to update or modify this return policy at any time without prior
                            notice. Please check our website for the most current version.</p>

                        <p>By making a purchase from SHOOSH, you agree to and acknowledge our return
                            policy.</p>

                        <p>Thank you for choosing SHOOSH!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
