@extends('layouts.default')

@section('content')
    
    @include('pages.page-title', ['page' => $page])

    {!! $page->body !!}

@endsection