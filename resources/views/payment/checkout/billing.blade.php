<div class="row">
    <div class="col-lg-12">
        <h4 class="upper">Billing &amp; Shipping Address</h4>
    </div>
    <div class="col-lg-12 form-group">
        <label class="sr-only">Country</label>
        @include('payment.checkout.select-country')
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">First Name</label>
        <input type="text" class="form-control" placeholder="First Name" value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" value="">
    </div>
    <div class="col-lg-12 form-group">
        <label class="sr-only">Company Name</label>
        <input type="text" class="form-control" placeholder="Company Name" value="">
    </div>
    <div class="col-lg-12 form-group">
        <label class="sr-only">Address</label>
        <input type="text" class="form-control" placeholder="Address" value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">Apartment, suite, unit etc.</label>
        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc." value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">Town / City</label>
        <input type="text" class="form-control" placeholder="Town / City" value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">State / County</label>
        <input type="text" class="form-control" placeholder="State / County" value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">Postcode / Zip</label>
        <input type="text" class="form-control" placeholder="Postcode / Zip" value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">Email</label>
        <input type="text" class="form-control" placeholder="Email" value="">
    </div>
    <div class="col-lg-6 form-group">
        <label class="sr-only">Phone</label>
        <input type="text" class="form-control" placeholder="Phone" value="">
    </div>
    <div class="col-lg-12 form-group">
        <div class="panel panel-naked">
            <div class="panel-heading"><a href="#collapseThree" class="btn btn-outline btn-sm" data-toggle="collapse" aria-expanded="false">Create an account?</a>
            </div>
            <div class="panel-collapse collapse" id="collapseThree" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <p>Create an account by entering the information below. If you are a
                        returning customer please login at the top of the page.</p>
                    <div class="form-group sep-top-xs">
                        <label class="sr-only">Password</label>
                        <input type="password" class="form-control" placeholder="Password" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>