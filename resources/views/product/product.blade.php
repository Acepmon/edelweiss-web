<!-- SHOP PRODUCT PAGE -->
<section id="product-page" class="product-page p-b-0 pt-0">
    <div class="container-fluid">
        <div class="product">
            <div class="row m-b-40">
                <div class="col-lg-6">
                    <div class="product-image">
                        <!-- Carousel slider -->
                        <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                            @foreach ($product->medias as $media)
                            <a href="{{ $media }}" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="{{ $media }}">
                            </a>
                            @endforeach
                        </div>
                        <!-- Carousel slider -->
                    </div>
                </div>
                <div class="col-lg-6">
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
                            <p>Tags: {{ $product->tags }}
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
                            {{-- <h6>Select quantity</h6>
                            <div class="cart-product-quantity">
                                <div class="quantity m-l-5">
                                    <input type="button" class="minus" value="-">
                                    <input type="text" class="qty" value="1">
                                    <input type="button" class="plus" value="+">
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->product_title }}">
                                <input type="hidden" name="price" value="{{ $product->product_price }}">

                                <button type="submit" class="btn btn-primary">
                                    <i class="icon-shopping-cart mr-2"></i> Сагсанд нэмэх
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @include('product.info')
                </div>
                <div class="col-lg-6">
                    @include('product.details')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: SHOP PRODUCT PAGE -->