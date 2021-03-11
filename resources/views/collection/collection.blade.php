<div class="row m-b-20">
    <div class="col-lg-10 p-t-10 m-b-20">
        <h3 class="m-b-20">{{ $collection->title }}</h3>
        <p>{!! $collection->desc !!}</p>
    </div>

    {{-- <div class="col-lg-3">
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
    </div> --}}
</div>