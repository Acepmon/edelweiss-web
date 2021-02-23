@extends('layouts.default')

@section('content')
    
<section class="m-t-80 p-b-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-error-404 text-center">@yield('code')</div>
            </div>
            <div class="col-lg-6">
                <div class="text-left">
                    <h1 class="text-medium">@yield('title')!</h1>
                    <p class="lead">@yield('message')</p>
                    <div class="seperator m-t-20 m-b-20"></div><button onclick="window.location.href= '/'" class="btn" type="button">Back to Home</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection