<!-- Search -->
<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
    <form class="search-form" action="{{ route('product.search') }}" method="get">
        <input class="form-control" name="q" type="text" placeholder="{{ __('edelweiss.search.input_placeholder') }}" />
        <span class="text-muted">
            {{ __('edelweiss.search.input_help') }}
        </span>
    </form>
</div>
<!-- end: search -->