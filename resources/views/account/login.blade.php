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
                        <h3>Нэвтрэх</h3>

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

                        <form action="{{ route('auth') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label class="sr-only">Имэйл хаяг</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Имэйл хаяг" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group m-b-5">
                                <label class="sr-only">Нууц үг</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Нууц үг" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-inline text-left">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" name="remember"><small class="m-l-10"> Намайг сана</small>
                                    </label>
                                </div>
                            </div>
                            <div class="text-left form-group">
                                <button type="submit" class="btn">Нэвтрэх</button>
                                <a href="{{ route('index') }}" class="btn btn-light m-l-10">Цуцлах</a>
                            </div>
                        </form>
                        <p class="small">Бүртгэл үүсгэгүй юу? <a href="{{ route('register') }}">Шинээр бүртгүүлэх</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->
@endsection