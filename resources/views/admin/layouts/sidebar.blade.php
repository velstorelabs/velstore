<!-- Sidebar -->
<nav id="sidebar" class="d-flex flex-column p-3">
    <div class="logo-container">
        <img src="https://via.placeholder.com/100" alt="{{ __('cms.sidebar.logo') }}">
    </div>
    <div class="search-container position-relative">
        <input type="text" class="form-control" placeholder="{{ __('cms.sidebar.search_placeholder') }}" id="searchInput" autocomplete="off">
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" href="#"><i class="fas fa-home me-2"></i> <span>{{ __('cms.sidebar.dashboard') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                <span><i class="fas fa-th-large me-2"></i> <span>{{ __('cms.sidebar.categories.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.categories.create' || Route::currentRouteName() == 'admin.categories.index' ? 'show' : '' }}" id="categoryMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.categories.create' ? 'active' : '' }}" href="{{ route('admin.categories.create') }}">{{ __('cms.sidebar.categories.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">{{ __('cms.sidebar.categories.list') }}</a></li>
                </ul>
            </div>
        </li>           
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#brandMenu" role="button" aria-expanded="false" aria-controls="brandMenu">
                <span><i class="fas fa-tags me-2"></i> <span>{{ __('cms.sidebar.brands.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.brands.create' || Route::currentRouteName() == 'admin.brands.index' ? 'show' : '' }}" id="brandMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.brands.create' ? 'active' : '' }}" href="{{ route('admin.brands.create') }}">{{ __('cms.sidebar.brands.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.brands.index' ? 'active' : '' }}" href="{{ route('admin.brands.index') }}">{{ __('cms.sidebar.brands.list') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#productMenu" role="button" aria-expanded="false" aria-controls="productMenu">
                <span><i class="fas fa-box me-2"></i> <span>{{ __('cms.sidebar.products.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.products.create' || Route::currentRouteName() == 'admin.products.index' ? 'show' : '' }}" id="productMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.products.create' ? 'active' : '' }}" href="{{ route('admin.products.create') }}">{{ __('cms.sidebar.products.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}" href="{{ route('admin.products.index') }}">{{ __('cms.sidebar.products.list') }}</a></li>
                </ul>
            </div>
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#customerMenu" role="button" aria-expanded="false" aria-controls="customerMenu">
                    <span><i class="fas fa-users me-2"></i> <span>{{ __('cms.sidebar.customers.title') }}</span></span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['admin.customers.create', 'admin.customers.index']) ? 'show' : '' }}" id="customerMenu">
                    <ul class="nav flex-column ms-3">
                        <li><a class="nav-link {{ Route::currentRouteName() == 'admin.customers.index' ? 'active' : '' }}" href="{{ route('admin.customers.index') }}">{{ __('cms.sidebar.brands.list') }}</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#sellerMenu" role="button" aria-expanded="false" aria-controls="sellerMenu">
                    <span><i class="fas fa-user-tie me-2"></i> <span>{{ __('cms.sidebar.sellers.title') }}</span></span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['admin.sellers.create', 'admin.sellers.index']) ? 'show' : '' }}" id="sellerMenu">
                    <ul class="nav flex-column ms-3">
                        <li>
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.sellers.index' ? 'active' : '' }}" href="{{ route('admin.sellers.create') }}">
                                {{ __('cms.sidebar.sellers.add_new') }} 
                            </a>
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.sellers.index' ? 'active' : '' }}" href="{{ route('admin.sellers.index') }}">
                                {{ __('cms.sidebar.sellers.list') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#productReviewMenu" role="button" aria-expanded="false" aria-controls="productReviewMenu">
                    <span><i class="fas fa-star me-2"></i> <span>{{ __('cms.sidebar.product_reviews.title') }}</span></span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['admin.product_reviews.create', 'admin.product_reviews.index']) ? 'show' : '' }}" id="productReviewMenu">
                    <ul class="nav flex-column ms-3">
                        <li><a class="nav-link {{ Route::currentRouteName() == 'admin.product_reviews.index' ? 'active' : '' }}" href="{{ route('admin.reviews.index') }}">{{ __('cms.sidebar.product_reviews.list') }}</a></li>
                    </ul>
                </div>
            </li>                
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#bannerMenu" role="button" aria-expanded="false" aria-controls="bannerMenu">
                <span><i class="fas fa-image me-2"></i> <span>{{ __('cms.sidebar.banners.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.banners.create' || Route::currentRouteName() == 'admin.banners.index' ? 'show' : '' }}" id="bannerMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.banners.create' ? 'active' : '' }}" href="{{ route('admin.banners.create') }}">{{ __('cms.sidebar.banners.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.banners.index' ? 'active' : '' }}" href="{{ route('admin.banners.index') }}">{{ __('cms.sidebar.banners.list') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#menuMenu" role="button" aria-expanded="false" aria-controls="menuMenu">
                <span><i class="fas fa-bars me-2"></i> <span>{{ __('cms.sidebar.menu.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.menus.create' || Route::currentRouteName() == 'admin.menus.index' ? 'show' : '' }}" id="menuMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.menus.create' ? 'active' : '' }}" href="{{ route('admin.menus.create') }}">{{ __('cms.sidebar.menu.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.menus.index' ? 'active' : '' }}" href="{{ route('admin.menus.index') }}">{{ __('cms.sidebar.menu.list') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#menuItemMenu" role="button" aria-expanded="false" aria-controls="menuItemMenu">
                <span><i class="fas fa-list me-2"></i> <span>{{ __('cms.sidebar.menu_items.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.menuitems.create' || Route::currentRouteName() == 'admin.menuitems.index' ? 'show' : '' }}" id="menuItemMenu">
                <ul class="nav flex-column ms-3">
                    @if(isset($menu) && $menu)
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.menu.items.create' ? 'active' : '' }}" href="{{ route('admin.menus.items.create', $menu) }}">{{ __('cms.sidebar.menu_items.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.menus.item.index' ? 'active' : '' }}" href="{{ route('admin.menus.item.index') }}">{{ __('cms.sidebar.menu_items.list') }}</a></li>
                    @endif 
                </ul>
            </div>
        </li>                       
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#socialMediaLinkMenu" role="button" aria-expanded="false" aria-controls="socialMediaLinkMenu">
                <span><i class="fas fa-link me-2"></i> <span>{{ __('cms.sidebar.social_media_links.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.social-media-links.create' || Route::currentRouteName() == 'admin.social-media-links.index' ? 'show' : '' }}" id="socialMediaLinkMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.social-media-links.create' ? 'active' : '' }}" href="{{ route('admin.social-media-links.create') }}">{{ __('cms.sidebar.social_media_links.add_new') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.social-media-links.index' ? 'active' : '' }}" href="{{ route('admin.social-media-links.index') }}">{{ __('cms.sidebar.social_media_links.list') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#siteSettingsMenu" role="button" aria-expanded="false" aria-controls="siteSettingsMenu">
                <span><i class="fas fa-cog me-2"></i> <span>{{ __('cms.sidebar.site_settings.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'site-settings.index' ? 'show' : '' }}" id="siteSettingsMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'site-settings.index' ? 'active' : '' }}" href="{{ route('site-settings.index') }}">{{ __('cms.sidebar.site_settings.manage') }}</a></li>
                </ul>
            </div>
        </li>           
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#ordersMenu" role="button" aria-expanded="false" aria-controls="ordersMenu">
                <span><i class="fas fa-shopping-cart me-2"></i> <span>{{ __('cms.sidebar.orders.title') }}</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'admin.orders.index' || Route::currentRouteName() == 'admin.orders.pending' || Route::currentRouteName() == 'admin.orders.completed' ? 'show' : '' }}" id="ordersMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">{{ __('cms.sidebar.orders.all_orders') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.orders.pending' ? 'active' : '' }}" href="">{{ __('cms.sidebar.orders.pending_orders') }}</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'admin.orders.completed' ? 'active' : '' }}" href="">{{ __('cms.sidebar.orders.completed_orders') }}</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>