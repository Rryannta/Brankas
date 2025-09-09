<nav>
    <ul class="navbar-list">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fa-solid fa-house"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('history') }}" class="nav-link {{ request()->routeIs('history') ? 'active' : '' }}">
                <i class="fa-solid fa-clock-rotate-left"></i>
                History
            </a>
        </li>
        @include('components.navbar.finance')
        <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}">
                <i class="fa-solid fa-user"></i>
                Profile
            </a>
        </li>
    </ul>
</nav>