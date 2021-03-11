<div class="card">
    <div class="card-body">
        <h4 class="mb-0">{{ Auth::user()->name }}</h4>
        <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('profile') }}" class="list-group-item list-group-item-action border-top {{ request()->routeIs('profile') ? 'active' : '' }}">
            <i class="icon-user mr-2"></i>
            {{ __('My Profile') }}
        </a>
        <a href="{{ route('settings') }}" class="list-group-item list-group-item-action {{ request()->routeIs('settings') ? 'active' : '' }}">
            <i class="icon-settings mr-2"></i>
            {{ __('Settings') }}
        </a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">
            <i class="icon-log-out mr-2"></i>
            {{ __('Sign out') }}
        </a>
    </div>
</div>