@extends('layouts.default')

@section('content')
    
    {{-- @include('cart.page-title') --}}

    @include('cart.wizard')

    @if (Cart::count() > 0)
        <!-- SHOP CART -->
        <section id="shop-cart">
            <div class="container">
                @include('cart.alert-success')

                @include('cart.alert-error')

                @include('cart.alert-info')

                <div class="shop-cart">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="d-flex flex-row">
                                <h4 style="flex: 1;">Миний сагс</h4>
                                <form action="{{ route('cart.destroy.all') }}" class="form-inline" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-light btn-sm">
                                        <i class="icon-trash-2 mr-2"></i>
                                        Сагс хоослох
                                    </button>
                                </form>
                            </div>


                            @include('cart.table')

                            @include('cart.coupon')
                        </div>
                        <div class="col-lg-4">
                            <div class="table-responsive">
                                @include('cart.subtotal')
                            </div>

                            <a href="{{ route('checkout') }}" class="btn icon-left float-right"><span>Худалдан авах</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SHOP CART -->
    @else
        @include('cart.empty')
    @endif

@endsection