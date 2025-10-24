<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @if (!App::environment('testing'))
        @vite(['resources/sass/app.scss'])
    @endif
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">    
    @yield('css')
</head>
<body>
    @include('admin.layouts.sidebar')
    
    <!-- Content Area -->
    <div id="content" class="w-100">
        <nav class="navbar navbar-expand navbar-light bg-light p-3">
            <button class="btn btn-dark" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <!-- Language Change Dropdown -->
            <div class="dropdown ms-auto me-3">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="https://flagcdn.com/w40/us.png" width="20">{{ __('cms.languages.english') }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item language-select {{ app()->getLocale() == 'en' ? 'active' : '' }}" data-lang="en" href="#"><img src="https://flagcdn.com/w40/us.png" width="20">{{ __('cms.languages.english') }}</a></li>
                    <li><a class="dropdown-item language-select " data-lang="es" href="#"><img src="https://flagcdn.com/w40/es.png" width="20">{{ __('cms.languages.spanish') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="fr" href="#"><img src="https://flagcdn.com/w40/fr.png" width="20">{{ __('cms.languages.french') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="ar" href="#"><img src="https://flagcdn.com/w40/sa.png" width="20">{{ __('cms.languages.arabic') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="de" href="#"><img src="https://flagcdn.com/w40/de.png" width="20">{{ __('cms.languages.german') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="fa" href="#"><img src="https://flagcdn.com/w40/ir.png" width="20">{{ __('cms.languages.persian') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="hi" href="#"><img src="https://flagcdn.com/w40/in.png" width="20">{{ __('cms.languages.hindi') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="id" href="#"><img src="https://flagcdn.com/w40/id.png" width="20">{{ __('cms.languages.indonesian') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="it" href="#"><img src="https://flagcdn.com/w40/it.png" width="20">{{ __('cms.languages.italian') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="ja" href="#"><img src="https://flagcdn.com/w40/jp.png" width="20">{{ __('cms.languages.japanese') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="ko" href="#"><img src="https://flagcdn.com/w40/kr.png" width="20">{{ __('cms.languages.korean') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="nl" href="#"><img src="https://flagcdn.com/w40/nl.png" width="20">{{ __('cms.languages.dutch') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="pl" href="#"><img src="https://flagcdn.com/w40/pl.png" width="20">{{ __('cms.languages.polish') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="pt" href="#"><img src="https://flagcdn.com/w40/pt.png" width="20"> {{ __('cms.languages.portuguese') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="ru" href="#"><img src="https://flagcdn.com/w40/ru.png" width="20">{{ __('cms.languages.russian') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="th" href="#"><img src="https://flagcdn.com/w40/th.png" width="20">{{ __('cms.languages.thai') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="tr" href="#"><img src="https://flagcdn.com/w40/tr.png" width="20">{{ __('cms.languages.turkish') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="vi" href="#"><img src="https://flagcdn.com/w40/vn.png" width="20">{{ __('cms.languages.vietnamese') }}</a></li>
                    <li><a class="dropdown-item language-select" data-lang="zh" href="#"><img src="https://flagcdn.com/w40/cn.png" width="20">{{ __('cms.languages.chinese') }} </a></li>                    
                </ul>
            </div>
             <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                   <img src="{{ auth()->user()->profile_image
                        ? (\Illuminate\Support\Str::startsWith(auth()->user()->profile_image, ['http://', 'https://'])
                            ? auth()->user()->profile_image
                            : asset('storage/' . auth()->user()->profile_image))
                        : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=0d6efd&color=fff&size=40' }}"
                        class="rounded-circle"
                        alt="Profile"
                        width="40"
                        height="40"
                        style="object-fit:cover;">
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" 
                        href="{{ route('admin.profile.edit') }}">
                            <i class="bi bi-person-circle me-2"></i> Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item d-flex align-items-center" href="#"
                        onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Modal for Confirmation -->
    <div class="modal fade" id="languageChangeModal" tabindex="-1" aria-labelledby="languageChangeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="languageChangeModalLabel">{{ __('cms.languages.change_language') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ __('cms.languages.confirm_language_change') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.languages.cancel') }}</button>
                    <button type="button" id="confirmChange" class="btn btn-primary">{{ __('cms.languages.yes_change') }}</button>
                </div>c
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if (!App::environment('testing'))
        @vite(['resources/js/app.js'])
    @endif
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.getElementById("searchInput");
            const menuItems = document.querySelectorAll(".nav-item");
            searchInput.addEventListener("input", function () {
                const searchTerm = searchInput.value.toLowerCase();
                menuItems.forEach((item) => {
                    let linkTexts = item.querySelectorAll(".nav-link");
                    let matchFound = false;

                    linkTexts.forEach((link) => {
                        if (link.textContent.toLowerCase().includes(searchTerm)) {
                            matchFound = true;
                            link.closest(".nav-item").style.display = "block"; // Show matching items
                        } else {
                            link.closest(".nav-item").style.display = "none"; // Hide non-matching items
                        }
                    });

                    // If it's a parent menu and any child matches, show parent
                    let submenu = item.querySelector(".collapse");
                    if (submenu) {
                        let childLinks = submenu.querySelectorAll(".nav-link");
                        childLinks.forEach((childLink) => {
                            if (childLink.textContent.toLowerCase().includes(searchTerm)) {
                                matchFound = true;
                            }
                        });

                        if (matchFound) {
                            item.style.display = "block";
                            submenu.classList.add("show"); // Expand if match found
                        } else {
                            item.style.display = "none";
                            submenu.classList.remove("show"); // Collapse if no match
                        }
                    }
                });
            });
        });
    </script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('js')
</body>
</html>