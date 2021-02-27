<section id="page-content">
    <div class="container-fluid">
        <div class="row m-b-20">
            <div class="col-lg-6 p-t-10 m-b-20">
                <h3 class="m-b-20">{{ $collection->coll_title }}</h3>
                <p>{{ $collection->coll_desc }}</p>
            </div>
            <div class="col-lg-3">
                <div class="order-select">
                    <h6>Sort by</h6>
                    <p>Showing 1–12 of 25 results</p>
                    <form method="get">
                        <select class="form-control">
                            <option value="order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="order-select">
                    <h6>Sort by Price</h6>
                    <p>From 0 - 190$</p>
                    <form method="get">
                        <select class="form-control">
                            <option value="" selected="selected">0$ - 50$</option>
                            <option value="">51$ - 90$</option>
                            <option value="">91$ - 120$</option>
                            <option value="">121$ - 200$</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <!--Product list-->
        <div class="shop">
            <div class="grid-layout grid-5-columns grid-loaded" data-item="grid-item" style="margin: 0px -20px -20px 0px; position: relative; height: 1200.88px;">
                @foreach ($collection->products as $product)
                    <div class="grid-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                        @include('pages.collection-item', ['product' => $product])
                    </div>
                @endforeach
            <div class="grid-loader"></div></div>
            <hr>
            <!-- Pagination -->
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            <!-- end: Pagination -->
        </div>
        <!--End: Product list-->
    </div>
</section>