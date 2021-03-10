@extends('layouts.default')

@section('content')
    
    @if ($banners->count() > 0)
        @include('home.slider')
    @endif

    @include('home.boxes')

    @include('home.delivery')

    @include('home.featured-product')

    @include('home.widget-product')

    @if ($categories->count() > 0)
        @include('home.categories')
    @endif

@endsection