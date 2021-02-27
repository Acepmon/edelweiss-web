@extends('layouts.default')

@section('content')
    @include('collection.page-title', ['page' => $page])

    <section id="page-content">
        <div class="container-fluid">
            @include('collection.collection', ['collection' => $collection])

            @include('collection.product-list', ['products' => $products])
        </div>
    </section>
@endsection