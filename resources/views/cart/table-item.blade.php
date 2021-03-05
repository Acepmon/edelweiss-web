@if ($item)
<tr>
    <td class="cart-product-remove">
        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-light btn-xs btn-icon"><i class="fa fa-times"></i></button>
        </form>
    </td>
    <td class="cart-product-thumbnail">
        <a href="{{ route('product.index', $item->id) }}">
            <img src="{{ $item->model->thumbnail }}" alt="{{ $item->model->product_title }}">
        </a>
        <div class="cart-product-thumbnail-name">{{ $item->model->product_title }}</div>
    </td>
    <td class="cart-product-price">
        <span class="amount">{{ $item->price }} ₮</span>
    </td>
    <td class="cart-product-quantity">
        <div class="quantity">
            <form action="{{ route('cart.update', $item->rowId) }}" method="POST">
                @csrf
                @method('PUT')

                <button type="submit" name="qty" value="{{ $item->qty - 1 }}" class="minus" {{ $item->qty == 1 ? 'disabled' : '' }}>-</button>
                <input type="text" class="qty" value="{{ $item->qty }}" name="quantity" readonly>
                <button type="submit" name="qty" value="{{ $item->qty + 1 }}" class="plus">+</button>
            </form>
        </div>
    </td>
    <td class="cart-product-subtotal">
        <span class="amount">{{ $item->total }} ₮</span>
    </td>
</tr>
@endif