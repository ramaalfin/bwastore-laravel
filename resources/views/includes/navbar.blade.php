<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="/images/logo.svg" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ url('rewards') }}" class="nav-link">Rewards</a>
                </li> --}}
                @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-success text-white px-4">Sign In</a>
                    </li>
                @endguest
            </ul>
            @auth
            <!-- Desktop Menu -->
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item ">
                    <div class="d-flex align-items-end">
                        <a
                            href="#"
                            class="nav-link"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <img
                                src="/images/icon-user.png"
                                alt=""
                                class="rounded-circle mr-2 profile-picture"
                            />
                        </a>
                        <div class="dropdown">
                            <p id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Hi, {{ Auth::user()->name }}</p>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                                </li>
    
                                <li>
                                    <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Settings</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                        @php
                            $carts = App\Models\Cart::where('users_id', Auth::user()->id)->count();
                        @endphp
                        @if ($carts > 0)
                            <img src="/images/icon-cart-filled.svg" alt="">
                            <div class="card-badge">{{ $carts }}</div>
                        @else
                            <img src="/images/icon-cart-empty.svg" alt="">
                        @endif
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        Hi, {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block">
                        Cart
                    </a>
                </li>
            </ul>    
        @endauth
        </div>
    </div>
</nav>
