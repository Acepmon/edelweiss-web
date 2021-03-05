<div class="table table-sm table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="cart-product-remove"></th>
                <th class="cart-product-thumbnail">Бараа</th>
                <th class="cart-product-price">Нэгж үнэ</th>
                <th class="cart-product-quantity">Ширхэг</th>
                <th class="cart-product-subtotal">Нийт дүн</th>
            </tr>
        </thead>
        <tbody>
            @each('cart.table-item', Cart::content(), 'item')
        </tbody>
    </table>
</div>