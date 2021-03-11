@extends('layouts.default')

@section('content')
    
    @include('sitemap.page-title')

    <section class="site-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3>{{ __('Collections') }}</h3>
                    <ul class="list">
                        @each('sitemap.collection-item', $collections, 'collection')
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>{{ __('Products') }}</h3>
                    <ul class="list">
                        @each('sitemap.product-item', $products, 'product')
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>{{ __('Pages') }}</h3>
                    <ul class="list">
                        @each('sitemap.page-item', $pages, 'page')
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>{{ __('Others') }}</h3>
                    <ul class="list">
                        <li><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                        <li><a href="{{ route('about-us') }}">{{ __('About Us') }}</a></li>
                        <li><a href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a></li>
                        <li><a href="{{ route('terms-conditions') }}">{{ __('Terms & Conditions') }}</a></li>
                        <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="seperator"></div>
        </div>
    </section>

@endsection