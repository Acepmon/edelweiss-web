<h4>
  Хамт худалдаж авдаг бараа
</h4>

<form action="{{ route('cart.store.batch') }}" method="POST">
  <div class="row">
    @csrf

    <div class="col-sm-8">
      <div class="d-flex flex-row flex-wrap">
        <input type="hidden" name="product_id[]" value="{{ $product->id }}">
        @include('product.fbt-item', ['product' => $product])

        @foreach ($product->fbt as $index => $fbtProduct)
          <div class="p-2 d-flex align-items-center" style="height: 120px"><i class="icon-plus"></i></div>
          <input type="hidden" name="product_id[]" value="{{ $fbtProduct->id }}">
          @include('product.fbt-item', ['product' => $fbtProduct])
        @endforeach
      </div>
    </div>

    <div class="col-sm-4">
      <p>Нийт дүн: <strong>{{ number_format($product->product_price + $product->fbt->sum('product_price')) }} ₮</strong></p>
      <button type="submit" class="btn btn-dark btn-sm">Бүгдийг сагсанд нэмэх</button>
    </div>
  </div>
</form>