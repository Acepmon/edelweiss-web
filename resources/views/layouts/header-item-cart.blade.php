<!--shopping cart-->
<div id="shopping-cart" class="p-dropdown">
    <a href="{{ route('cart') }}">
        @if (Cart::count() > 0)
            <span class="shopping-cart-items bg-warning text-dark">{{ Cart::count() }}</span>
        @endif

        <i class="fa fa-shopping-cart"></i>
    </a>
    <div class="p-dropdown-content ">
        <div class="widget-mycart">
            <a href="{{ route('cart') }}"><h4>Миний сагс</h4></a>
            @foreach (Cart::content() as $item)
                <div class="cart-item">
                    <div class="cart-image"> <a href="{{ route('product.index', $item->id) }}"><img src="{{ $item->model->thumbnail }}"></a></div>
                    <div class="cart-product-meta">
                        <a href="{{ route('product.index', $item->id) }}">{{ $item->name }}</a>
                        <span>{{ $item->qty }} x {{ $item->price }} ₮</span>
                    </div>
                    <div class="cart-item-remove">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- <a href="#"><i class="icon-x"></i></a> --}}
                            <button type="submit" class="btn btn-light btn-xs btn-icon"><i class="icon-x"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
            <hr>
            <div class="cart-total">
                <div class="cart-total-labels">
                    <span>Нийт</span>
                    <span>НӨАТ</span>
                    <span><strong>Төлөх дүн</strong></span>
                </div>
                <div class="cart-total-prices">
                    <span>{{ Cart::subtotal() }} ₮</span>
                    <span>{{ Cart::tax() }} ₮</span>
                    <span><strong>{{ Cart::total() }} ₮</strong></span>
                </div>

            </div>
            <div class="cart-buttons text-right">
                <a href="{{ route('checkout') }}" class="btn btn-xs">Худалдан авах</a>
            </div>
        </div>
    </div>
</div>
<!--end: shopping cart-->