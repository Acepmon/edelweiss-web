<h4 class="upper">Your Order</h4>
<div class="table table-sm table-striped table-responsive table table-bordered table-responsive">
    <table class="table m-b-0">
        <thead>
            <tr>
                <th class="cart-product-thumbnail">Product</th>
                <th class="cart-product-name">Description</th>
                <th class="cart-product-subtotal">Total</th>
            </tr>
        </thead>
        <tbody>
            @include('payment.checkout.order-item')
        </tbody>
    </table>
</div>