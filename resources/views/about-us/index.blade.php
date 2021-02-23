@extends('layouts.default')

@section('content')
    
    @include('about-us.slider')

    @include('about-us.company')

    @include('about-us.what-we-do')

    @include('about-us.team')

    {{-- <div class="seperator">
        <i class="fa fa-chevron-down"></i>
    </div> --}}

    @include('about-us.partners')

@endsection