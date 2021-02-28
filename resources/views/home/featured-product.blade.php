<!-- Shop products CAROUSEL -->
<section>
    <div class="container">
        <div class="heading-text heading-line text-center">
            <h4>Best Sellers</h4>
        </div>
        <div class="carousel shop-products" data-margin="20" data-dots="false">

            @each('home.featured-product-item', $featuredProducts, 'product')
            
        </div>
    </div>

</section>
<!--END: Shop products CAROUSEL -->
