@extends('layouts.empty')

@section('content')
    <!-- Section -->
    <section class="fullscreen" style="background-image: url(/images/covers/5.jpg)">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">
                    @include('account.logo')
                </div>
                <div class="row">
                    <div class="col-lg-6 center p-40 background-white b-r-6">
                        <form class="form-transparent-grey" action="{{ route('register.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
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

                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" name="password" value="" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password Confirmation</label>
                                    <input type="password" name="password_confirmation" value="" placeholder="Confirm Password" class="form-control @error('password_confirmation') is-invalid @enderror" required>

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="submit">Register New Account </button>
                                    <a href="{{ route('index') }}" class="btn btn-light m-l-10">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->
@endsection