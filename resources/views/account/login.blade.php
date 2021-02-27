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
                        <form>
                            <div class="form-group">
                                <label class="sr-only">Username or Email</label>
                                <input type="text" class="form-control" placeholder="Username or Email">
                            </div>
                            <div class="form-group m-b-5">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group form-inline text-left">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                    </label>
                                </div>
                            </div>
                            <div class="text-left form-group">
                                <button type="button" class="btn">Login</button>
                            </div>
                        </form>
                        <p class="small">Don't have an account yet? <a href="#">Register New Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->
@endsection