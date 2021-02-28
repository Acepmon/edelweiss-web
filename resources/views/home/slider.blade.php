<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider dots-creative" data-fade="true">
    @foreach ($banners as $banner)
    <div class="slide kenburns" data-bg-image="{{ $banner->banner }}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <!-- Captions -->
                <h1>{{ $banner->title }}</h1>
                <p>{{ $banner->description }}</p>
                <div><a href="{{ $banner->url }}" class="btn scroll-to">{{ $banner->button }}</a></div>
                </span>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--end: Inspiro Slider -->