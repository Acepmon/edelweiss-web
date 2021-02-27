<!--Navigation-->
<div id="mainMenu" class="menu-center menu-lowercase">
    <div class="container">
        <nav>
            <ul>

                @foreach ($menus as $menu)
                <li class="dropdown"><a href="{{ $menu->url ? $menu->url : '#' }}" class="text-uppercase">{{ $menu->name }}</a>

                    @if ($menu->hasChildren())
                    <ul class="dropdown-menu">

                        @foreach ($menu->children as $subMenu)
                        <li class="{{ $subMenu->hasChildren() ? 'dropdown-submenu' : '' }}"><a href="{{ $subMenu->url ? $subMenu->url : '#' }}">{{ $subMenu->name }}</a>

                            @if ($menu->hasChildren())
                            <ul class="dropdown-menu">
                                @foreach ($subMenu->children as $subSubMenu)
                                <li><a href="{{ $subSubMenu->url ? $subSubMenu->url : '#' }}">{{ $subSubMenu->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif

                        </li>
                        @endforeach

                    </ul>
                    @endif

                </li>
                @endforeach

            </ul>
        </nav>
    </div>
</div>
<!--end: Navigation-->