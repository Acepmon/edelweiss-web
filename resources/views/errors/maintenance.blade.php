@extends('layouts.empty')

@section('content')
<section class="fullscreen text-center">
    <div class="container container-fullscreen">
        <div class="text-middle text-center">
            <i class="fa fa-exclamation-triangle fa-5x" style="color: #ffd530;"></i>
            <h1 class="text-uppercase text-lg">{{ __('Maintenance mode') }}</h1>
            <p class="lead">{{ __("We are currently working on our website, we'll be back soon!") }}</p>
        </div>
    </div>
</section>
@endsection