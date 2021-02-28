@extends('layouts.default')

@section('content')
    <!-- Page title -->
    <section id="page-title" data-bg-parallax="/images/covers/9.jpg"><div class="parallax-container img-loaded" data-bg="/images/covers/9.jpg" data-velocity="-.140" style="background: url(&quot;/images/covers/9.jpg&quot;) 0px;" data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Collections</h1>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <section>
        <div class="container">
            <div class="row">
                @foreach ($collections as $collection)
                <div class="col-lg-6">
                    @include('collection.collection-item', ['collection' => $collection])
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection