@if (!empty($product))
<div class="product">
    <div class="product-image">
        <a href="{{ route('product.index', $product) }}"><img alt="Shop product image!" src="{{ $product->thumbnail }}"></a>
    </div>
    <div class="product-description">
        @if ($product->category)
            <div class="product-category">{{ $product->category->name }}</div>
        @endif

        <div class="product-title">
            <h3><a href="{{ route('product.index', $product) }}">{{ $product->product_title }}</a></h3>
        </div>
        <div class="product-price"><ins>{{ number_format($product->product_price) }} MNT</ins></div>
    </div>
</div>
@endif