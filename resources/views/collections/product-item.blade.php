@if (!empty($product))
<div class="product">
    <div class="product-image">
        <a href="{{ route('product.show', $product->id) }}">
            <img alt="Shop product image!" src="{{ $product->thumbnail }}">
        </a>
        <div class="product-overlay">
            <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
        </div>
    </div>
    <div class="product-description">
        <div class="product-category">{{ $product->category->name }}</div>
        <div class="product-title">
            <h3><a href="{{ route('product.show', $product->id) }}">{{ $product->product_title }}</a></h3>
        </div>
    </div>
    <div class="product-price text-muted"><ins>{{ number_format($product->product_price) }} MNT</ins></div>
</div>
@endif