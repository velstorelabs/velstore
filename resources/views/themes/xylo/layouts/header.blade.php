<header>

     {{--  Wishlist Count --}}
    @php
        $wishlistCount = 0;
        if (auth('customer')->check()) {
            $wishlistCount = auth('customer')->user()->wishlistProducts()->count();
        }
    @endphp

    <div class="top-bar w-100 bg-light py-1 header-top-bar">
        <div class="text-center small">
            {{ __('store.header.top_bar_message') }} 
        </div>
    </div>  

    <div class="container py-3">
        <!-- Row 2: Logo Left / Search Right -->
        <div class="row align-items-center">
            <div class="col-md-4 col-6">
                <a href="{{ route('xylo.home') }}" class="navbar-brand">
                    <img src="https://i.ibb.co/dHx2ZR3/velstore.png" width="80" alt="Logo" />
                </a>
            </div>
            <div class="col-md-8 col-6 text-end">
                <form class="d-flex justify-content-end" action="{{ url('/search') }}" method="GET">
                    <div class="input-group search-input-width">
                        <input type="text" class="form-control" id="search-input"  name="q" placeholder="{{ __('store.header.search_placeholder') }}">
                        <button type="submit" class="btn btn-outline-secondary search-style"><i class="fa fa-search"></i></button>
                        <div id="search-suggestions" class="dropdown-menu show w-100 mt-5 d-none"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <!-- Row 3: Menu Left / Actions Right -->
        <div class="row align-items-center">
            <div class="col-md-8">
                <nav>
                    <ul class="nav">
                        @if ($headerMenu && $headerMenu->menuItems->count())
                            @foreach ($headerMenu->menuItems as $menuItem)
                                <li class="nav-item">
                                    <a class="nav-link menu-text-color" href="{{ url($menuItem->slug) }}">
                                        {{ $menuItem->translation->title ?? 'No Translation' }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </nav>
            </div>

            <div class="col-md-4 d-flex justify-content-end align-items-center gap-3">
                <!-- Language Selector -->
                <form action="{{ route('change.store.language') }}" method="POST">
                    @csrf
                    <select name="lang" class="form-select form-select-sm font-style" onchange="this.form.submit()">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                        <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>FR</option>
                        <option value="es" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>ES</option>
                        <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>DE</option>
                    </select>
                </form>

                <!-- Currency Selector -->
                <form action="{{ route('change.currency') }}" method="POST">
                    @csrf
                    <select name="currency_code" class="form-select form-select-sm font-style" onchange="this.form.submit()">
                        @foreach (\App\Models\Currency::all() as $currency)
                            <option value="{{ $currency->code }}" {{ session('currency', 'USD') == $currency->code ? 'selected' : '' }}>
                                {{ strtoupper($currency->code) }}
                            </option>
                        @endforeach
                    </select>
                </form>

                <!-- Wishlist Icon -->
                 <a href="{{ auth('customer')->check() ? route('customer.wishlist.index') : route('customer.login') }}" class="text-dark position-relative homepage-icon">
                    <i class="fa-regular fa-heart"></i>

                    @if($wishlistCount > 0)
                        <span id="wishlist-count"
                              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ $wishlistCount }}
                        </span>
                    @endif
                </a>

                 <!-- Account Icon -->
                <a href="#" class="text-dark dropdown-toggle homepage-icon" data-bs-toggle="dropdown">
                    @auth('customer')
                        @php
                            $customer = Auth::guard('customer')->user();
                        @endphp
                        @if($customer->profile_image)
                            <img src="{{ asset('storage/' . $customer->profile_image) }}" 
                                alt="Profile" 
                                class="rounded-circle" 
                                style="width:32px; height:32px; object-fit:cover;">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($customer->name) }}" 
                                alt="Avatar" 
                                class="rounded-circle" 
                                style="width:32px; height:32px; object-fit:cover;">
                        @endif
                    @else
                        <i class="fa-regular fa-user"></i>
                    @endauth
                </a>
                <ul class="dropdown-menu dropdown-menu-end p-2">
                    @guest('customer')
                        <li><a class="dropdown-item" href="{{ route('customer.login') }}">Sign In</a></li>
                        <li><a class="dropdown-item" href="{{ route('customer.register') }}">Sign Up</a></li>
                    @else
                        <li><a class="dropdown-item" href="{{ route('customer.profile.edit') }}">My Profile</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('customer.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('customer-logout-form').submit();">
                            Logout
                            </a>
                            <form id="customer-logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>

                <!-- Cart Icon -->
                <a href="{{ route('cart.view') }}" class="text-dark position-relative homepage-icon">
                    <i class="fa fa-shopping-bag"></i>
                    <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ session('cart') ? collect(session('cart'))->sum('quantity') : 0 }}
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
