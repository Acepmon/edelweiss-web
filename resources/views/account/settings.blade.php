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
                        <h3>{{ __('Reset Password') }}</h3>
                        <div class="h5 mb-4">
                            {{ __('Please fill empty fields with correct input') }}
                        </div>

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
                        
                        <form action="{{ route('profile.update.password') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="input-group show-hide-password">
                                        <input class="form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="{{ __('Enter password') }}" type="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password2">{{ __('Confirm Password') }}</label>
                                    <div class="input-group show-hide-password">
                                        <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="" placeholder="{{ __('Enter password again') }}" type="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>

                                    @error('password_confirmation')
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
                                        {{ __('Change Password') }}
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