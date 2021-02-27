@extends('layouts.empty')

@section('content')
    <!-- Section -->
    <section class="fullscreen" data-bg-parallax="/images/covers/5.jpg"><div class="parallax-container img-loaded" data-bg="/images/covers/5.jpg" data-velocity="-.140" style="background: url(&quot;/images/covers/5.jpg&quot;);" data-ll-status="loaded"></div>
        <div class="container">
            <div>
                <div class="text-center m-b-30">
                    @include('account.logo')
                </div>
                <div class="row">
                    <div class="col-lg-5 center p-50 background-white b-r-6">
                        <h3>Login to your Account</h3>
                        <form action="{{ route('auth') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group m-b-5">
                                <label class="sr-only">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group form-inline text-left">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                    </label>
                                </div>
                            </div>
                            <div class="text-left form-group">
                                <button type="submit" class="btn">Login</button>
                                <a href="{{ route('index') }}" class="btn btn-light m-l-10">Cancel</a>
                            </div>
                        </form>
                        <p class="small">Don't have an account yet? <a href="{{ route('register') }}">Register New Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->
@endsection