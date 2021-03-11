<div class="p-dropdown">
    <a href="{{ route('profile') }}"><i class="icon-user"></i></a>
    <div class="p-dropdown-content">
        @if (Auth::check())
            <div class="widget-myaccount">
                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                <p class="text-muted">{{ Auth::user()->email }}</p>
                <ul class="text-left">
                    <li><a href="{{ route('profile') }}" class="text-dark"><i class="icon-user"></i>{{ __('My Profile') }}</a></li>
                    <li><a href="{{ route('settings') }}" class="text-dark"><i class="icon-settings"></i>{{ __('Settings') }}</a></li>
                    <li><a href="{{ route('logout') }}" class="text-dark"><i class="icon-log-out"></i>{{ __('Sign out') }}</a></li>
                </ul>
            </div>
        @else
            <ul class="text-left">
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
            </ul>
        @endif
    </div>
</div>