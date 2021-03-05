<h4>Захиалгын мэдээлэл</h4>
<table class="table">
    <tbody>
        <tr>
            <td class="cart-product-name">
                <strong>Нийт</strong>
            </td>
            <td class="cart-product-name text-right">
                <span class="amount">{{ Cart::subtotal() }} ₮</span>
            </td>
        </tr>
        <tr>
            <td class="cart-product-name">
                <strong>НӨАТ</strong>
            </td>
            <td class="cart-product-name  text-right">
                <span class="amount">{{ Cart::tax() }} ₮</span>
            </td>
        </tr>
        <tr>
            <td class="cart-product-name">
                <strong>Хөнгөлөлт</strong>
            </td>
            <td class="cart-product-name  text-right">
                <span class="amount">0%</span>
            </td>
        </tr>
        <tr>
            <td class="cart-product-name">
                <strong>Төлөх дүн</strong>
            </td>
            <td class="cart-product-name text-right">
                <span class="amount color lead"><strong>{{ Cart::total() }} ₮</strong></span>
            </td>
        </tr>
    </tbody>
</table>