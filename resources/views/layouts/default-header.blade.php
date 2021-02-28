<!-- Header -->
<header id="header" data-fullwidth="true" class="header-large header-alternative header-logo-center header-disable-fixed dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            @include('layouts.logo')
        </div>
    </div>
</header>
<header id="header" data-fullwidth="true" class="header-alternative dark">
    <div class="header-inner" style="border-bottom: 2px solid #fff">
        <div class="container">
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="{{ route('product.search') }}" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <a id="btn-search" href="#"><i class="icon-search"></i></a>
                    </li>
                    <li class="d-none d-sm-block">
                        @include('layouts.header-item-cart')
                    </li>
                    <li class="d-none d-sm-block">
                        @include('layouts.header-item-user')
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>
            <!--end: Navigation Resposnive Trigger-->
            
            @include('layouts.navigation-mega')
        </div>
    </div>
</header>
<!-- end: Header -->