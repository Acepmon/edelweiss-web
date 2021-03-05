<h4 class="upper">Захиалгын мэдээлэл</h4>
<div class="table table-sm table-striped table-responsive table table-bordered table-responsive">
    <table class="table m-b-0">
        <thead>
            <tr>
                <th class="cart-product-thumbnail">Бараа</th>
                <th class="cart-product-subtotal">Total</th>
            </tr>
        </thead>
        <tbody>
            @each('checkout.order-item', Cart::content(), 'item')
        </tbody>
    </table>
</div>