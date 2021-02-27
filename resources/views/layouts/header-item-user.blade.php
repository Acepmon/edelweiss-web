<div class="p-dropdown">
    <a href="{{ route('profile') }}"><i class="icon-user"></i></a>
    <div class="p-dropdown-content">
        @if (Auth::check())
            <div class="widget-myaccount">
                <div class="d-block">
                    <img class="avatar avatar-lg" src="/images/team/6.jpg">
                </div>
                <span>Juna Doe</span>
                <p class="text-muted">Professional developer</p>
                <ul class="text-center">
                    <li><a href="{{ route('profile') }}"><i class="icon-user"></i>My profile</a></li>
                    <li><a href="{{ route('profile') }}"><i class="icon-mail"></i>Messages</a></li>
                    <li><a href="{{ route('profile') }}"><i class="icon-settings"></i>Settings</a></li>
                    <li><a href="{{ route('logout') }}"><i class="icon-log-out"></i>Sing Out</a>
                    </li>
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