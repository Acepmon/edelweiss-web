<div class="shop-promo-box text-right text-white m-2" style="background-image: url({{ $collection->image }});">
    <h2>{{ $collection->title }}</h2>
    <p>
        {!! $collection->desc !!}
    </p>
    <a class="btn btn-dark" href="{{ route('collection.show', $collection) }}">View Collection</a>
</div>