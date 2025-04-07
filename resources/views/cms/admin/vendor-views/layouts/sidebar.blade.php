<!-- Sidebar -->
<nav id="sidebar" class="d-flex flex-column p-3">
    <div class="logo-container">
        <img src="https://via.placeholder.com/100" alt="Logo">
    </div>
    <div class="search-container position-relative">
        <input type="text" class="form-control" placeholder="Search..." id="searchInput" autocomplete="off">
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'vendor.dashboard' ? 'active' : '' }}" href="{{ route('vendor.dashboard') }}" href="#"><i class="fas fa-home me-2"></i> <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#productMenu" role="button" aria-expanded="false" aria-controls="productMenu">
                <span><i class="fas fa-box me-2"></i> <span>Products</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'vendor.products.create' || Route::currentRouteName() == 'vendor.products.index' ? 'show' : '' }}" id="productMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'vendor.products.create' ? 'active' : '' }}" href="{{ route('vendor.products.create') }}">Add New</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'vendor.products.index' ? 'active' : '' }}" href="{{ route('vendor.products.index') }}">List</a></li>
                </ul>
            </div>
        </li>  

        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#socialMediaMenu" role="button" aria-expanded="false" aria-controls="socialMediaMenu">
                <span><i class="fas fa-share-alt me-2"></i> <span>Social Media Links</span></span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse {{ in_array(Route::currentRouteName(), ['vendor.social-media-links.create', 'vendor.social-media-links.index']) ? 'show' : '' }}" id="socialMediaMenu">
                <ul class="nav flex-column ms-3">
                    <li><a class="nav-link {{ Route::currentRouteName() == 'vendor.social-media-links.create' ? 'active' : '' }}" href="{{ route('vendor.social-media-links.create') }}">Add New</a></li>
                    <li><a class="nav-link {{ Route::currentRouteName() == 'vendor.social-media-links.index' ? 'active' : '' }}" href="{{ route('vendor.social-media-links.index') }}">List</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>