@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <h2 class="fw-normal ">Information</h2>
                    <div class="mb-4">
                        <div class="row mb-2">
                            <div class="col-md-6 col-form-label text-md-end fw-bold">
                                Name:
                            </div>
                            <div class="col-md-5 col-form-label">
                                {{ $user->name }}
                            </div>

                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6 col-form-label text-md-end fw-bold">
                                Email:
                            </div>
                            <div class="col-md-5 col-form-label">
                                {{ $user->email }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6 col-form-label text-md-end fw-bold">
                                Address:
                            </div>
                            <div class="col-md-5 col-form-label">
                                {{ $user->address }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6 col-form-label text-md-end fw-bold">
                                Shoe Size (EU):
                            </div>
                            <div class="col-md-5 col-form-label">
                                {{ $user->shoesize }}
                            </div>
                        </div>
                    </div>

                    <h2 class="fw-normal ">Update Your Profile</h2>
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('post')
                        <input type="hidden" name="action" value="changeprofile">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name: ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address: ') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $user->address) }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="shoesize" class="col-md-4 col-form-label text-md-end">{{ __('Shoe Size (EU): ') }}</label>

                            <div class="col-md-6">
                                <input id="shoesize" type="number" class="form-control @error('shoesize') is-invalid @enderror" name="shoesize" value="{{ old('shoesize', $user->shoesize) }}" required autocomplete="shoesize" autofocus>

                                @error('shoesize')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
