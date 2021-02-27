@extends('layouts.default')

@section('content')

    @if ($page->ui_show_page_title)
        @include('pages.page-title', ['page' => $page])
    @endif

    <section>
        <div class="{{ $page->ui_layout }}">
            {!! $page->body !!}
        </div>
    </section>

@endsection