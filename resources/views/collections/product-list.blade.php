<!--Product list-->
<div class="shop">
    <div class="grid-layout grid-5-columns grid-loaded" data-item="grid-item" style="margin: 0px -20px -20px 0px; position: relative; height: 1200.88px;">
        @foreach ($products as $product)
            <div class="grid-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                @include('collections.product-item', ['product' => $product])
            </div>
        @endforeach
    <div class="grid-loader"></div></div>
    <hr>

    @include('collections.pagination')
</div>
<!--End: Product list-->