<!--Navigation-->
<div id="mainMenu" class="menu-center menu-lowercase">
    <div class="container">
        <nav>
            <ul>

                @foreach ($menus as $menu)
                <li class="dropdown mega-menu-item"><a href="{{ $menu->url ? $menu->url : '#' }}" class="text-uppercase">{{ $menu->name }}</a>

                    @if ($menu->hasChildren())
                    <ul class="dropdown-menu">

                        <li class="mega-menu-content">
                            <div class="row">
                                @foreach ($menu->children as $subMenu)
                                    <div class="col-lg-4 my-2">
                                        <ul>
                                            <li class="mega-menu-title">{{ $subMenu->name }}</li>
                                            @foreach ($subMenu->children as $subSubMenu)
                                            <li><a href="{{ $subSubMenu->url ? $subSubMenu->url : '#' }}">{{ $subSubMenu->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>

                        </li>

                    </ul>
                    @endif

                </li>
                @endforeach

            </ul>
        </nav>
    </div>
</div>
<!--end: Navigation-->