<!-- SHOP WIDGET PRODUTCS -->
<section class="p-t-0">
    <div class="container">
        <div class="heading-text heading-line text-center">
            <h4>Related Products you may be interested!</h4>
        </div>
        <div class="row">
            @foreach ($relatedProducts->chunk(3) as $chunk)
            <div class="col-lg-4">
                <div class="widget-shop">
                    @each('product.related-item', $chunk, 'product')
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end: SHOP WIDGET PRODUTCS -->