@extends('layouts.default')

@section('content')

    @include('pages.page-title', ['page' => $page])

    @if ($page->collection_id != null && !empty($page->collection))
        @include('pages.collection-content', ['collection' => $page->collection])
    @endif
@endsection