<!--Product list-->
<div class="shop">
    <div class="grid-layout {{ $collection->ui_grid_columns }} grid-loaded" data-item="grid-item" style="margin: 0px -20px -20px 0px; position: relative; height: 1200.88px;">
        @foreach ($products as $product)
            <div class="grid-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                @include('collection.product-item', ['product' => $product])
            </div>
        @endforeach
    <div class="grid-loader"></div></div>
    <hr>

    @include('collection.pagination')
</div>
<!--End: Product list-->