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
                                    <h3>Шинээр бүртгүүлэх</h3>
                                    <p>
                                        Доорх мэдээллийг оруулсанаар профайл үүсгэх. 
                                        Хэрэв та буцаж ирсэн үйлчлүүлэгч бол хуудасны 
                                        дээд хэсэгт нэвтрэх боломжтой.
                                    </p>
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

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Нэр</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Нэр" class="form-control @error('first_name') is-invalid @enderror">

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Овог</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Овог" class="form-control @error('last_name') is-invalid @enderror">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Имэйл <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Имэйл хаяг" class="form-control @error('email') is-invalid @enderror" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Нууц үг</label>
                                    <input type="password" name="password" value="" placeholder="Нууц үг" class="form-control @error('password') is-invalid @enderror" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Нууц үг давтах</label>
                                    <input type="password" name="password_confirmation" value="" placeholder="Нууц үг давтах" class="form-control @error('password_confirmation') is-invalid @enderror" required>

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-12 form-group">
                                    <span class="text-muted small">
                                        Та бүртгүүлсэнээр Edelweiss-н <a href="{{ route('terms-conditions') }}">Үйлчилгээний нөхцөл</a> болон <a href="{{ route('privacy-policy') }}">Нууцлалын бодлогыг</a> хүлээн зөвшөөрч буй болно.
                                    </span>
                                </div>

                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="submit">Бүртгүүлэх</button>
                                    <a href="{{ route('index') }}" class="btn btn-light m-l-10">Цуцлах</a>
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