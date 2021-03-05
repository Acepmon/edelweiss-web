@if ($item)
<tr>
    <td class="cart-product-thumbnail">
        <div class="cart-product-thumbnail-name p-0">
            {{ $item->name }}
            <span class="badge badge-secondary">{{ $item->qty }}</span>
        </div>
    </td>
    <td class="cart-product-subtotal">
        <span class="amount">{{ $item->price }} ₮</span>
    </td>
</tr>
@endif