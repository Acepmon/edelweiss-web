<!-- end: SHOP CATEGORIES -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-text heading-line text-center">
                    <h4>Browser our categories </h4>
                </div>

            </div>
        </div>

        <div class="shop-category">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="images/shop/shop-category/1.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>{{ $category->name }}</h6><small>{{ $category->products->count() }} products</small>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- end: SHOP CATEGORIES -->