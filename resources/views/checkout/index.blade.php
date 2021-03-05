@extends('layouts.default')

@section('content')

    {{-- @include('checkout.page-title') --}}

    {{-- @include('checkout.completed') --}}

    @include('checkout.wizard')

    <!-- SHOP CHECKOUT -->
    <section id="shop-checkout">
        <div class="container">
            @include('checkout.alert-success')

            @include('checkout.alert-error')

            @include('checkout.alert-info')

            <div class="shop-cart">
                <form action="{{ route('checkout.store') }}" method="POST" class="sep-top-md">
                    @csrf

                    <div class="row">
                        <div class="col-lg-8">
                            @include('checkout.shipping')
                        </div>
                        <div class="col-lg-4">
                            @include('checkout.order')

                            <div class="table-responsive">
                                @include('checkout.total')
                            </div>

                            @include('checkout.method')

                            <a href="{{ route('cart') }}" class="btn btn-light float-left">
                                <i class="icon-arrow-left mr-2"></i>
                                Буцах
                            </a>
                            <button type="submit" class="btn icon-left float-right"><span>Төлбөр төлөх</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end: SHOP CHECKOUT -->
    
@endsection