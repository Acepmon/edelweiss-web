@extends('layouts.default')

@section('content')
    
    {{-- @include('cart.page-title') --}}

    @include('payment.wizard')

    <!-- SHOP CART -->
    <section id="shop-cart">
        <div class="container">
            @include('payment.alert-success')

            @include('payment.alert-error')

            @include('payment.alert-info')

            <div class="shop-cart">
                @include('payment.completed')

                @include('payment.bank')

                @include('payment.qrcode')
            </div>
        </div>
    </section>
    <!-- end: SHOP CART -->

@endsection