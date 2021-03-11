@extends('layouts.default')

@section('content')
    @if ($collection->ui_show_page_title)
        @include('collection.page-title', ['collection' => $collection])
    @endif

    <section id="page-content">
        <div class="{{ $collection->ui_layout }}">
            @include('collection.collection', ['collection' => $collection])

            @include('collection.product-list', ['products' => $products])
        </div>
    </section>
@endsection