@extends('layouts.default')

@section('content')

    <section class="py-3">
        <div class="container-fluid">
            <a href="javascript:window.history.back()" class="btn btn-dark btn-outline btn-sm product-back-btn">
                <i class="fa fa-chevron-left mr-2"></i>
                {{ __('Back') }}
            </a>
        </div>
    </section>

    @include('product.product')

    @include('product.related')

    @include('product.delivery')

@endsection