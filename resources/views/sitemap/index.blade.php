@extends('layouts.default')

@section('content')
    
    @include('sitemap.page-title')

    <section class="site-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3>Collections</h3>
                    <ul class="list">
                        @each('sitemap.collection-item', $collections, 'collection')
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Products</h3>
                    <ul class="list">
                        @each('sitemap.product-item', $products, 'product')
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Pages</h3>
                    <ul class="list">
                        @each('sitemap.page-item', $pages, 'page')
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Others</h3>
                    <ul class="list">
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        <li><a href="{{ route('terms-conditions') }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="seperator"></div>
        </div>
    </section>

@endsection