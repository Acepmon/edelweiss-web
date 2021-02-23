@extends('layouts.default')

@section('content')

    @include('pages.page-title', ['page' => $page])

    @include('pages.collection-content')
@endsection