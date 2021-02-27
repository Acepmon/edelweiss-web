<!-- SHOP PRODUCT PAGE -->
<section id="product-page" class="product-page p-b-0 pt-0">
    <div class="container-fluid">
        <div class="product">
            <div class="row m-b-40">
                <div class="col-lg-8">
                    <div class="product-image">
                        <!-- Carousel slider -->
                        <div class="carousel dots-inside dots-dark arrows-visible flickity-enabled is-draggable carousel-loaded" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-lightbox="gallery">
                            
                            
                        <div class="flickity-viewport" style="height: 593.719px; touch-action: pan-y;"><div class="flickity-slider" style="left: 0px; transform: translateX(-100%);"><div class="polo-carousel-item" style="width: 100%; position: absolute; left: 200%;" aria-hidden="true"><div class="polo-carousel-item" style="width: 100%;"><a href="images/shop/products/product-large.jpg" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="/images/shop/products/1.jpg">
                            </a></div></div><div class="polo-carousel-item is-selected" style="width: 100%; position: absolute; left: 100%;"><div class="polo-carousel-item" style="width: 100%;"><a href="images/shop/products/product-large.jpg" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="/images/shop/products/2.jpg">
                            </a></div></div></div></div><button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous"><svg class="flickity-button-icon" viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path></svg></button><button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path></svg></button><ol class="flickity-page-dots"><li class="dot" aria-label="Page dot 1"></li><li class="dot is-selected" aria-label="Page dot 2" aria-current="step"></li></ol></div>
                        <!-- Carousel slider -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-description">
                        <div class="product-category">{{ $product->category->name }}</div>
                        <div class="product-title">
                            <h3><a href="#">{{ $product->product_title }}</a></h3>
                        </div>
                        <div class="product-price"><ins>{{ number_format($product->product_price) }} MNT</ins>
                        </div>
                        <div class="seperator m-b-10"></div>
                        <p>{{ $product->product_desc }}</p>
                        <div class="product-meta">
                            <p>Tags: <a href="#" rel="tag">Clothing</a>, <a rel="tag" href="#">T-shirts</a>
                            </p>
                        </div>
                        <div class="seperator m-t-20 m-b-10"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>Select the size</h6>
                            <ul class="product-size">
                                <li>
                                    <label>
                                        <input type="radio" checked="checked" value="option1" name="product-size"><span>xs</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" checked="checked" value="option1" name="product-size"><span>s</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" checked="checked" value="option1" name="product-size"><span>m</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" checked="checked" value="option1" name="product-size"><span>l</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" checked="checked" value="option1" name="product-size"><span>xl</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h6>Select the color</h6>
                            <label class="sr-only">Color</label>
                            <select style="padding:10px">
                                <option value="">Select color…</option>
                                <option value="">White</option>
                                <option value="" selected="selected">Green</option>
                                <option value="">Brown</option>
                                <option value="">Yellow</option>
                                <option value="">Pink</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h6>Select quantity</h6>
                            <div class="cart-product-quantity">
                                <div class="quantity m-l-5">
                                    <input type="button" class="minus" value="-">
                                    <input type="text" class="qty" value="1">
                                    <input type="button" class="plus" value="+">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h6>Add to Cart</h6>
                            <a class="btn" href="#"><i class="icon-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('product.product-info')
        </div>
    </div>
</section>
<!-- end: SHOP PRODUCT PAGE -->