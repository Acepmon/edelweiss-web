<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Search</h1>
            <form action="{{ route('product.search') }}" method="GET">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Type & Search..." value="{{ $query }}" name="q" aria-describedby="basic-addon1">
                </div>
            </form>
        </div>
    </div>
</section>