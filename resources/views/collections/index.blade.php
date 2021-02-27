@extends('layouts.default')

@section('content')
    @include('collections.page-title', ['page' => $page])

    <section id="page-content">
        <div class="container-fluid">
            @include('collections.collection', ['collection' => $collection])

            @include('collections.product-list', ['products' => $products])
        </div>
    </section>
@endsection