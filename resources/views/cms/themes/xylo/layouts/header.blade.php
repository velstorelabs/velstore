<header>
    <!-- Top Bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12 col-md-4">
                    <div class="numbers-top d-inline-flex">
                        <a href="tel:{{ getWebConfig('phone_number') }}" title="Call Now">
                            <span class="phone-icon"><i class="fas fa-phone"></i></span>
                            @php /*<img src="assets/images/phone-top.png" alt="Phone Icon">*/ @endphp Call Now:
                            <strong>{{ getWebConfig('phone_number') }}</strong>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <ul class="top-links">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Store Locator</a></li>
                        <li><a href="#">Free Shipping</a></li>
                    </ul>
                </div>
                @php /*
                <div class="col-12 col-md-4">
                    <div class="social-top d-flex justify-content-end">
                        {{ __('xylo.header.social_media') }}
                        <a href="https://facebook.com"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://twitter.com"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div> */
                @endphp
                <div class="col-12 col-md-4">
                    <div class="social-top d-flex justify-content-end">
                        <form action="{{ route('change.currency') }}" method="POST" class="currency-form">
                            @csrf
                            <select class="me-3 language-drop w-auto" name="currency_code" onchange="this.form.submit()">
                                @foreach (\App\Models\Currency::all() as $currency)
                                    <option value="{{ $currency->code }}" {{ session('currency', 'USD') == $currency->code ? 'selected' : '' }}>
                                        {{ $currency->code }} ({{ $currency->symbol }})
                                    </option>
                                @endforeach
                            </select>
                        </form>
                        <form action="{{ route('change.store.language') }}" method="POST" class="language-form">
                            @csrf
                            <select name="lang" class="me-3 language-drop w-auto" onchange="this.form.submit()">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                                <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>FR</option>
                                <option value="es" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>ES</option>
                                <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>DE</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Mobile Navigation -->
        <nav class="navbar d-block d-md-none pb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/images/logo-main.png" alt="Logo" style="width: 200px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#fullScreenNav" aria-controls="fullScreenNav" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>

        <!-- Desktop Navigation -->
        <div class="d-md-flex justify-content-between align-items-center pt-4 pb-4 d-none">
            <a href="#" class="logo"><img src="assets/images/logo-main.png" alt="Logo"></a>
            <div class="header-categories ms-auto">
                <div class="input-group">
                    <form class="d-flex" id="search-form" action="{{ url('/search') }}" method="GET">
                        <div class="position-relative w-100">
                            <input type="text" class="form-control" name="q" id="search-input" placeholder="Search your product..." autocomplete="off">
                            <div id="search-suggestions" class="dropdown-menu show w-100 mt-1 d-none"></div>
                        </div>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="maccount d-flex align-items-center gap-3">
                <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                <div class="account-dropdown position-relative">
                    <a href="#" class="account-toggle dropdown-toggle" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i> My Account
                    </a>
                    <ul class="account-menu dropdown-menu position-absolute bg-white shadow rounded p-2" aria-labelledby="accountDropdown" style="right: 0; left: auto; min-width: 200px;">
                        @guest
                            <li><a class="dropdown-item" href="{{ route('login') }}">Sign In</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Sign Up</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('orders') }}">Orders</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="navigation d-md-flex justify-content-between d-none">
            <nav>
                @if ($headerMenu && $headerMenu->menuItems->count())
                    <ul>
                        @foreach ($headerMenu->menuItems as $menuItem)
                            <li>
                                <a href="{{ url($menuItem->slug) }}">
                                    {{ $menuItem->translation->title ?? 'No Translation' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </nav>
            @php
            /*
            <a href="{{ route('cart.view') }}" class="cat-item cart-info">
                <i class="fa fa-shopping-bag"></i>
                <span id="cart-count" class="count">{{ session('cart') ? collect(session('cart'))->sum('quantity') : 0 }}</span>
            </a>
            */
            @endphp
            <button class="cat-item cart-info">
                <a href="{{ route('cart.view') }}" class="cart-view">
                My Cart
                <i class="fa fa-shopping-bag"></i>
                <span id="cart-count" class="count">{{ session('cart') ? collect(session('cart'))->sum('quantity') : 0 }}</span></a>
            </button>
        </div>

        <!-- Mobile Fullscreen Menu -->
        <div class="offcanvas offcanvas-top bg-dark text-white" tabindex="-1" id="fullScreenNav" aria-labelledby="fullScreenNavLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title mt-4" id="fullScreenNavLabel"><img src="assets/images/footer-logo.png" alt="Footer Logo"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link text-white fs-5" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white fs-5" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link text-white fs-5" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link text-white fs-5" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link text-white fs-5" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
