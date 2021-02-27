<h4>Calculate Shipping</h4>
<form class="row">
    <div class="col-lg-12 m-b-20">
        @include('payment.cart.select-country')
    </div>
    <div class="col-lg-6 form-group">
        <input type="text" placeholder="State / County" class="form-control">
    </div>
    <div class="col-lg-6  form-group">
        <input type="text" class="form-control" placeholder="Post Code / Zip">
    </div>
</form>