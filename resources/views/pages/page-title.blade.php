<!-- Page title -->
<section id="page-title" data-bg-parallax="{{ $page->cover }}"><div class="parallax-container img-loaded" data-bg="{{ $page->cover }}" data-velocity="-.140" style="background: url(&quot;{{ $page->cover }}&quot;) 0px;" data-ll-status="loaded"></div>
    <div class="container">
        <div class="page-title">
            <h1>{{ $page->title }}</h1>
            <span>{{ $page->subtitle }}</span>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active"><a href="#">{{ $page->title }}</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end: Page title -->