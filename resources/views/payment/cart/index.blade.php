@extends('layouts.default')

@section('content')
    
    @include('payment.cart.page-title')

    @include('payment.cart.empty')

    <!-- SHOP CART -->
    <section id="shop-cart">
        <div class="container">
            <div class="shop-cart">
                @include('payment.cart.table')

                <div class="row">
                    <div class="col-lg-4">
                        @include('payment.cart.coupon')
                    </div>
                    <div class="col-lg-8 text-right">
                        <button type="button" class="btn">Update Card</button>
                    </div>
                </div>

                <div class="row">
                    <hr class="space">
                    <div class="col-lg-6">
                        @include('payment.cart.shipping')
                    </div>
                    <div class="col-lg-6 p-r-10 ">
                        <div class="table-responsive">
                            @include('payment.cart.subtotal')
                        </div>
                        <a href="#" class="btn icon-left float-right"><span>Proceed to Checkout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SHOP CART -->

@endsection