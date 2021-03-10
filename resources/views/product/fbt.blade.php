<h4>
  Frequently bought together
</h4>

<div class="d-flex">
  <div class="d-flex flex-row" style="flex: 1">
    @each('product.fbt-item', $product->fbt, 'product')
  </div>
  <div class="flex-2">
    <span>Total price: <strong>{{ number_format($product->fbt->sum('product_price')) }} ₮</strong></span>
    <form action="{{ route('cart.store.batch') }}">
      <button class="btn btn-dark btn-sm" type="submit">Add all products to cart</button>
    </form>
  </div>
</div>