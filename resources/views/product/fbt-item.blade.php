@if (!empty($product))
<div class="product mx-2" style="max-width: 200px; flex: 1;">
  <div class="product-image">
    <a href="{{ route('product.index', $product) }}"><img src="{{ $product->thumbnail }}" alt="Shop product image!">
    </a>
  </div>
  <div class="product-description">
    <div class="product-title">
      <h6><a href="{{ route('product.index', $product) }}">{{ $product->product_title }}</a></h6>
    </div>
    <div class="product-price"><ins>{{ number_format($product->product_price) }} MNT</ins></div>
  </div>
</div>
@endif