<section>
    <div class="container">
        <div class="row m-b-20">
            <div class="col-lg-12 p-t-10 m-b-20">
                <h3 class="m-b-20">Search results for "{{ $query }}"</h3>
                <span class="text-muted">{{ number_format($products->total()) }} results</span>
            </div>
        </div>
        <!--Product list-->
        <div class="shop">
            <div class="grid-layout grid-4-columns grid-loaded" data-item="grid-item" style="margin: 0px -20px -20px 0px; position: relative; height: 956.438px;">
                @foreach ($products as $product)
                    <div class="grid-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                        @include('product.search.results-item', ['product' => $product])
                    </div>
                @endforeach
            <div class="grid-loader"></div></div>
            <hr>
            
            {{ $products->links() }}
        </div>
    </div>
</section>