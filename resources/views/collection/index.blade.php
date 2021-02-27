@extends('layouts.default')

@section('content')
    @if ($page->ui_show_page_title)
        @include('collection.page-title', ['page' => $page])
    @endif

    <section id="page-content">
        <div class="{{ $collection->ui_grid_layout }}">
            @include('collection.collection', ['collection' => $collection])

            @include('collection.product-list', ['products' => $products])
        </div>
    </section>
@endsection