@extends('layouts.default')

@section('content')
    
    @include('contact-us.map')

    @include('contact-us.contact')

@endsection

@push('scripts')
<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key={{ $apiKey }}'></script>
<script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
<script type="text/javascript" src="plugins/gmap3/map-styles.js"></script>
@endpush