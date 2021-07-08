<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Ernest Cates</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::currentRouteName() !== 'home' ? 'active' : '' }}" href="#" id="navbar-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        @if (Auth::user())
                            <li><a href="#" class="dropdown-item disabled text-primary" tabindex="-1" aria-disabled="true">{{ Auth::user()->name }}</a></li>
                            <li class="dropdown-divider"></li>
                            @if (Auth::user()->role === env('HIGHEST_USER_PRIVILEGE'))
                                <li><a href="{{ route('view.messages') }}" class="dropdown-item">Messages</a></li>
                                <li><a href="{{ route('view.users') }}" class="dropdown-item">Users</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    <button class="dropdown-item btn btn-outline-secondary" type="submit">Logout</button>
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>