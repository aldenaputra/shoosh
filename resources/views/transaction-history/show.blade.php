@extends('layouts.app')

@section('body')
<style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
        }
    }
</style>
<!-- rating.js file -->
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>
    body {
        font-family: 'Montserrat';
        /* background-color: #829b97;
        color: #4E5359;
        font-style: italic; */
    }

    .main-title {
        font-weight: 1000;
        font-style: italic;
    }

    .modal {
        border-color: #4E5359;
    }

    .modal-body {
        border-color: #4E5359;
        background-color: #D9D9D9;
    }

    .modal-header {
        border-bottom: 1px solid #4E5359;
    }

    .modal-title {
        border-color: #4E5359;
        font-weight: 1000;
    }

    .modal-content {
        border-color: #4E5359;
        background-color: #D9D9D9;
    }

    .shoesname{
        font-size: 15px;
        padding-top: 0.6vh;
    }

    .form-control {
        border-color: #4E5359;
        /* background-color: #D9D9D9; */
    }

    label[for='form-title'] {
        font-size: 16px;
        font-weight: 1000;
        font-style: italic;
    }

    label[for='label-name'] {
        font-size: 14px;
    }

    .seperator {
        color: #4E5359;
    }

    .rating {
        margin-top: 20px;
    }

    .rating-form {
        margin: 1rem 0;
        text-align: left;
        display: flex;
        flex-wrap: wrap;
    }

    .legend {
        font-size: 14px;
        width: 15%;
        float: left;
        padding: 1.5rem 0;
        margin-right: 10px;
    }

    .ratingContainer {
        display: flex;
    }

    .ratingContainer label {
        text-align: center;
        margin: 0 1rem;
    }

    .ratingContainer .ReviewOptionItem {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .ratingReviewForm input[type='radio'] {
        visibility: visible;
        min-width: 1.5rem;
        min-height: 1.5rem;
        margin-top: 5px;
        direction: rtl;
        accent-color: #767677;
    }

    .ratioStar {
        border-radius: 50%;
        border: 2px solid #767677;
    }
</style>
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
                        {{-- <p style="font-size:18px">{{$transaction->user->address}}</p> --}}
                        @if ($transaction->user)
                            <p style="font-size:18px">{{ $transaction->user->address }}</p>
                        @else
                            <p style="font-size:18px">N/A</p>
                        @endif

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
              {{-- <a href="{{ route('viewReview', ['id' => $transaction->id])}}" class="btn btn-outline-primary mb-3 w-100">Send Feedback</a> --}}
              <button class="btn btn-outline-primary mb-3 w-100" data-bs-toggle="modal"
                data-bs-target="#reviewing">Review</button>
            </div>
            <div class="col">
                {{-- <a href="#" class="btn btn-outline-primary mb-3 w-100">Return</a> --}}
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    <button class="btn btn-outline-primary mb-3 w-100" data-bs-toggle="modal"
                        data-bs-target="#returning">Return</button>
                </div>
            </div>
          </div>
    </div>

    {{-- <body class="antialiased"> --}}
        <div class="modal fade" id="reviewing" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="review_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h3 class="main-title fw-bolder">WRITE YOUR OWN REVIEW</h3>
                            <h5 class="modal-title d-flex" id="review_label">You are Reviewing: <div class="shoesname fw-normal ml-1">
                                    {{ $transaction->name }} </div>
                            </h5>
                        </div>


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('createReview', $transaction->id) }}" method="POST" class="ratingReviewForm">
                            @csrf
                            <div class="form-group mb-3">
                                <label for='form-title'>A Little Something About You*</label><br>
                                <label for='label-name' class="pb-2 pt-2">What is your nickname:</label>
                                <input type="text" class="form-control @error('nickname') is-invalid @enderror"
                                    id="nickname" name="nickname">
                                @error('nickname')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr class="seperator">

                            <div class="rating">
                                <label for='form-title'>Give it a rating*</label><br>
                                <fieldset class="rating-form">
                                    <legend class="legend" for="quality">Quality</legend>
                                    <div class="ratingContainer">
                                        <div class="ReviewOptionItem">
                                            <label for="5">5</label>
                                            <input type="radio"  name="quality" title="Awesome"
                                                class="ratioStar" value="5">
                                        </div>
                                        <div class="ReviewOptionItem">
                                            <label for="4">4</label>
                                            <input type="radio"  name="quality" title="Good"
                                                class="ratioStar" value="4">
                                        </div>
                                        <div class="ReviewOptionItem"><label for="3">3</label><input type="radio"
                                                 name="quality" title="Average" class="ratioStar"
                                                value="3"></div>
                                        <div class="ReviewOptionItem"><label for="2">2</label><input type="radio"
                                                name="quality" title="Bad" class="ratioStar"
                                                value="2"></div>
                                        <div class="ReviewOptionItem"><label for="1">1</label><input type="radio"
                                                 name="quality" title="Awful" class="ratioStar"
                                                value="1"></div>
                                    </div>
                                    @error('quality')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </fieldset>
                                <fieldset class="rating-form">
                                    <legend class="legend" for="value">Value</legend>
                                    <div class="ratingContainer">
                                        <div class="ReviewOptionItem"><label for="5">5</label><input type="radio"
                                                name="value" title="Awesome" class="ratioStar"
                                                value="5"></div>
                                        <div class="ReviewOptionItem"><label for="4">4</label><input
                                                type="radio" name="value" title="Good"
                                                class="ratioStar" value="4"></div>
                                        <div class="ReviewOptionItem"><label for="3">3</label><input
                                                type="radio" name="value" title="Average"
                                                class="ratioStar" value="3"></div>
                                        <div class="ReviewOptionItem"><label for="2">2</label><input
                                                type="radio" name="value" title="Bad"
                                                class="ratioStar" value="2"></div>
                                        <div class="ReviewOptionItem"><label for="1">1</label><input
                                                type="radio" name="value" title="Awful"
                                                class="ratioStar" value="1"></div>
                                    </div>
                                    @error('value')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </fieldset>
                                <fieldset class="rating-form">
                                    <legend class="legend" for="price">Price</legend>
                                    <div class="ratingContainer">
                                        <div class="ReviewOptionItem"><label for="5">5</label><input
                                                type="radio" name="price" title="Awesome"
                                                class="ratioStar" value="5"></div>
                                        <div class="ReviewOptionItem"><label for="4">4</label><input
                                                type="radio" name="price" title="Good"
                                                class="ratioStar" value="4"></div>
                                        <div class="ReviewOptionItem"><label for="3">3</label><input
                                                type="radio" name="price" title="Average"
                                                class="ratioStar" value="3"></div>
                                        <div class="ReviewOptionItem"><label for="2">2</label><input
                                                type="radio" name="price" title="Bad"
                                                class="ratioStar" value="2"></div>
                                        <div class="ReviewOptionItem"><label for="1">1</label><input
                                                type="radio" name="price" title="Awful"
                                                class="ratioStar" value="1"></div>
                                    </div>
                                    @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </fieldset>
                            </div>

                            <hr class="seperator">

                            <div class="form-group mb-3">
                                <label for='form-title'>Tell Us What You Think*</label><br>
                                <label for='label-name' class="pb-2 pt-2">Review Title:</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for='label-name' class="pb-2">Review:</label>
                                <textarea class="form-control" name="description" id="description" cols="20" rows="3"></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr class="seperator">
                            <div class="d-flex justify-content-end">
                                <form method="post" action="{{ route('createReview', $transaction->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" style="margin-right: 7px">Submit</button>
                                </form>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="returning" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="return_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h3 class="main-title fw-bolder">RETURN YOUR ITEM</h3>
                        <h5 class="modal-title d-flex" id="return_label">You are Returning: <div
                                class="shoesname fw-normal ml-1">
                                {{ $transaction->name }} </div>
                        </h5>
                    </div>


                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updateStock', $transaction->id) }}" method="POST">
                        @csrf
                        <label for='titlePolicy'>Return Policy</label><br>
                        <label for='policy' class="pb-2 pt-2">
                            <p><strong>Effective Date:</strong> 30 days after purchasing</p>
                            <p>Thank you for shopping with SHOOSH. We strive to provide you with the best
                                footwear, and your satisfaction is our priority. If you are not entirely satisfied with
                                your purchase, we're here to help.</p>
                        </label>

                        <label for='title'>Return and Exchange Conditions:</label><br>
                        <label for='policy' class="pb-2 pt-2">
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
                        </label>

                        <label for='title'>Policy Updates:</label><br>
                        <label for='policy' class="pb-2 pt-2">
                            <p>We reserve the right to update or modify this return policy at any time without prior
                                notice. Please check our website for the most current version.</p>

                            <p>By making a purchase from SHOOSH, you agree to and acknowledge our return
                                policy.</p>

                            <p>Thank you for choosing SHOOSH!</p>
                        </label>

                        <hr class="seperator_2">

                    </form>

                    <div class="d-flex justify-content-end">
                        <form method="post" action="{{ route('return.update', $transaction->shoeid) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary" style="margin-right: 7px">Yes, return</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
