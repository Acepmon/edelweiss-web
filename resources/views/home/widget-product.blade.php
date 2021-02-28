<!-- SHOP WIDGET PRODUTCS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-line">
                    <h4>Top Rated</h4>
                </div>

                <div class="widget-shop">
                    @each('home.widget-product-item', $topRatedProducts, 'product')
                </div>
            </div>
            <div class="col-lg-3">
                <div class="heading-text heading-line">
                    <h4>On Sale</h4>
                </div>

                <div class="widget-shop">
                    @each('home.widget-product-item', $onSaleProducts, 'product')
                </div>
            </div>
            <div class="col-lg-3">
                <div class="heading-text heading-line">
                    <h4>Recommended</h4>
                </div>

                <div class="widget-shop">
                    @each('home.widget-product-item', $recommendedProducts, 'product')
                </div>
            </div>
            <div class="col-lg-3">
                <div class="heading-text heading-line">
                    <h4>Popular</h4>
                </div>

                <div class="widget-shop">
                    @each('home.widget-product-item', $popularProducts, 'product')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: SHOP WIDGET PRODUTCS -->