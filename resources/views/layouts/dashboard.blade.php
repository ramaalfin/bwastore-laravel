<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="/style/main.css" />
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- SIDEBAR -->
            <div class="border-end" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/dashboard-store-logo.svg" alt="logo dashboard" class="my-4" />
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{ route('dashboard-products') }}" class="list-group-item list-group-item-action">My
                        Products</a>
                    <a href="{{ route('dashboard-transactions') }}"
                        class="list-group-item list-group-item-action">Transactions</a>
                    <a href="{{ route('dashboard-settings-store') }}"
                        class="list-group-item list-group-item-action">Store settings</a>
                    <a href="{{ route('dashboard-settings-account') }}" class="list-group-item list-group-item-action">My
                        account</a>
                    <a href="/index.html" class="list-group-item list-group-item-action">Sign Out</a>
                </div>
            </div>

            <!-- PAGE CONTENT -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none me-auto me-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Desktop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ms-lg-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link d-flex align-items-center justify-content-center" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown">
                                        <img src="/images/icon-user.png" class="rounded-circle me-2 profile-picture"
                                            alt="" />
                                        <span id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Hi, {{ Auth::user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                                        <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
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
                            <!-- Mobile Menu -->
                            <ul class="navbar-nav d-block d-lg-none mt-2">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> Hi, Lyd </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- CONTENT -->
                @yield('content')
            </div>
        </div>
    </div>

    @stack('prepend-script')
    <script src="/vendor/jquery/jquery-3.6.3.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $('#menu-toggle').click(function(e) {
            e.preventDefault();
            $('#wrapper').toggleClass('toggled');
        });
    </script>
    @stack('addon-script')
</body>

</html>
