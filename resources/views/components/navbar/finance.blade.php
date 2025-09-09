{{-- jika admin maka tampilkan ini --}}
{{-- @if (Auth::user()->role === 'admin') --}}
    <li class="nav-item">
        <a href="{{ route('finance') }}" class="nav-link {{ request()->routeIs('finance') ? 'active' : '' }}">
            <i class="fa-solid fa-wallet"></i>
            Finance
        </a>
    </li>
{{-- @endif --}}