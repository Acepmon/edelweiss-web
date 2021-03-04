<div class="p-dropdown">
    <a href="{{ route('profile') }}"><i class="icon-user"></i></a>
    <div class="p-dropdown-content">
        @if (Auth::check())
            <div class="widget-myaccount">
                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                <p class="text-muted">{{ Auth::user()->email }}</p>
                <ul class="text-center">
                    <li><a href="{{ route('profile') }}" class="text-dark"><i class="icon-user"></i>My profile</a></li>
                    <li><a href="{{ route('settings') }}" class="text-dark"><i class="icon-settings"></i>Settings</a></li>
                    <li><a href="{{ route('logout') }}" class="text-dark"><i class="icon-log-out"></i>Sign Out</a></li>
                </ul>
            </div>
        @else
            <ul class="text-center">
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                </li>
            </ul>
        @endif
    </div>
</div>