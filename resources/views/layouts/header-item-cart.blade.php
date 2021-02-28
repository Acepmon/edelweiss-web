<!--shopping cart-->
<div id="shopping-cart" class="p-dropdown">
    <a href="{{ route('payment.cart') }}"><span class="shopping-cart-items">8</span><i class="fa fa-shopping-cart"></i></a>
    <div class="p-dropdown-content ">
        <div class="widget-mycart">
            <a href="{{ route('payment.cart') }}"><h4>My Cart</h4></a>
            <div class="cart-item">
                <div class="cart-image"> <a href="#"><img src="/images/shop/products/10.jpg"></a></div>
                <div class="cart-product-meta">
                    <a href="#">Bolt Sweatshirt</a>
                    <span>3 x 28$</span>
                </div>
                <div class="cart-item-remove">
                    <a href="#"><i class="icon-x"></i></a></div>
            </div>
            <div class="cart-item">
                <div class="cart-image"> <a href="#"><img src="/images/shop/products/11.jpg"></a></div>
                <div class="cart-product-meta">
                    <a href="#">Yellow Sweatshirt</a>
                    <span>1 x 18$</span>
                </div>
                <div class="cart-item-remove">
                    <a href="#"><i class="icon-x"></i></a></div>
            </div>
            <hr>
            <div class="cart-total">
                <div class="cart-total-labels">
                    <span>Subtotal</span>
                    <span>Taxes</span>
                    <span><strong>Total</strong></span>
                </div>
                <div class="cart-total-prices">
                    <span>320$</span>
                    <span>8%</span>
                    <span><strong>385$</strong></span>
                </div>

            </div>
            <div class="cart-buttons text-right">
                <button class="btn btn-xs">Checkout</button>

            </div>
        </div>
    </div>
</div>
<!--end: shopping cart-->