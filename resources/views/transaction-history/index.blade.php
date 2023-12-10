@extends('layouts.app')

@section('body')
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
@endsection