@extends('layouts.default')

@section('content')
    
    @include('faq.page-title')

    <section>
        <div class="container">
            @foreach ($rows as $index => $cols)
                <div class="row {{ $index != 0 ? 'm-t-40' : '' }}">
                    @foreach ($cols as $col => $faqs)
                        <div class="col-lg-6">
                            @include('faq.faq-' . $col, ['faqs' => $faqs])
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

@endsection