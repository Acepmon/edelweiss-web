<div class="table table-sm table-striped table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="cart-product-remove"></th>
                <th class="cart-product-thumbnail">Product</th>
                <th class="cart-product-name">Description</th>
                <th class="cart-product-price">Unit Price</th>
                <th class="cart-product-quantity">Quantity</th>
                <th class="cart-product-subtotal">Total</th>
            </tr>
        </thead>
        <tbody>
            @include('payment.cart.table-item')
        </tbody>
    </table>
</div>