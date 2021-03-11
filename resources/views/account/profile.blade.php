@extends('layouts.default')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-4">
                @include('account.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ __('Account Information') }}</h3>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">Нэр</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ Auth::user()->first_name }}" placeholder="Enter first name">

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Овог</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ Auth::user()->last_name }}" placeholder="Enter last name">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" placeholder="Enter your email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share
                                        your email with anyone else.</small>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
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