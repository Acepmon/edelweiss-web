@extends('layouts.default')

@section('content')

    @include('payment.checkout.page-title')

    @include('payment.checkout.completed')

    <!-- SHOP CHECKOUT -->
    <section id="shop-checkout">
        <div class="container">
            <div class="shop-cart">
                <form method="post" class="sep-top-md">
                    <div class="row">
                        <div class="col-lg-6 no-padding">
                            @include('payment.checkout.billing')
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="upper"><a href="#collapseFour" data-toggle="collapse" class="collapsed" aria-expanded="false"> Ship to a different address <i class="icon-arrow-down-circle"></i></a></h4>
                                </div>
                                <div class="col-lg-12">
                                    <div style="height: 0px;" aria-expanded="false" id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>If you have shopped with us before, please enter your details in the
                                                boxes below. If you are a new customer please proceed to the Billing
                                                &amp; Shipping section.</p>
                                            <div class="sep-top-xs">
                                                @include('payment.checkout.shipping')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="seperator"><i class="fa fa-credit-card"></i>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        @include('payment.checkout.order')
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                @include('payment.checkout.total')
                            </div>
                            <div class="col-lg-12">
                                @include('payment.checkout.method')
                            </div>
                            <div class="col-lg-12">
                                <a class="btn icon-left float-right mt-3" href="#">
                                    <span>Proceed to PayPal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SHOP CHECKOUT -->
    
@endsection