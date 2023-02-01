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
                <li class="nav-item active">
                    <a href="{{ route('home') }}" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('rewards') }}" class="nav-link">Rewards</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
