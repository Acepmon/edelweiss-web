@if (!empty($product))
<div class="product">
    <div class="product-image">
        <a href="{{ route('product.index', $product) }}"><img src="{{ $product->thumbnail }}" alt="Shop product image!">
        </a>
    </div>
    <div class="product-description">
        <div class="product-category">{{ $product->category->name }}</div>
        <div class="product-title">
            <h3><a href="{{ route('product.index', $product) }}">{{ $product->product_title }}</a></h3>
        </div>
        <div class="product-price"><ins>{{ number_format($product->product_price) }} MNT</ins>
        </div>
    </div>
</div>
@endif