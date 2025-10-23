<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @if (!App::environment('testing'))
        @vite(['resources/views/themes/xylo/sass/app.scss'])
    @endif
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        @if (!App::environment('testing'))
            @vite(['resources/views/themes/xylo/css/animate.min.css'])
        @endif
        @if (!App::environment('testing'))
            @vite(['resources/views/themes/xylo/css/slick.css'])
        @endif
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
        @if (!App::environment('testing'))
            @vite(['resources/views/themes/xylo/css/style.css'])
        @endif
        @if (!App::environment('testing'))
            @vite(['resources/views/themes/xylo/css/custom.css'])
        @endif
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>   
</head>
<body>
    @include('themes.xylo.layouts.header')
    @yield('content')
    @include('themes.xylo.layouts.footer')
    @if (!App::environment('testing'))
        @vite(['resources/views/themes/xylo/js/app.js'])
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @if (!App::environment('testing'))
        @vite(['resources/views/themes/xylo/js/slick.min.js'])
    @endif
    @if (!App::environment('testing'))
        @vite(['resources/views/themes/xylo/js/main.js'])
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('js')
    <script>
        $(document).ready(function () {
            $('.category-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: false,
                arrows: true,
                prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',
                nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $('.banner-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                fade: true,
                speed: 500,
                cssEase: 'linear',
                autoplaySpeed: 5000,
                dots: true,
                arrows: false,
            });
            $('.product-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>
    <script>
        /* header script */
        document.addEventListener('DOMContentLoaded', function() {
            const accountToggle = document.getElementById('accountDropdown');
            const accountMenu = document.querySelector('.account-menu');

            if (accountToggle && accountMenu) {
                document.addEventListener('click', function(event) {
                    if (!accountToggle.contains(event.target) && !accountMenu.contains(event.target)) {
                        accountMenu.classList.remove('show');
                    }
                });
            }
        });
    </script>
    <script>
        /* product seach input */
        $(document).ready(function () {
            $('#search-input').on('keyup', function () {
                let query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: '{{ url('/search-suggestions') }}',
                        type: 'GET',
                        data: { q: query },
                        success: function (data) {
                            let suggestions = $('#search-suggestions');
                            suggestions.html('');
                            if (data.length > 0) {
                                data.forEach(product => {
                                    suggestions.append(`
                                        <a href="/product/${product.slug}" class="dropdown-item d-flex align-items-center">
                                            <img src="${product.thumbnail}" alt="${product.name}" class="me-2" width="40" height="40" style="object-fit: cover; border-radius: 5px;">
                                            <span class="search-product-title">${product.name}</span>
                                        </a>
                                    `);
                                });
                                suggestions.removeClass('d-none');
                            } else {
                                suggestions.addClass('d-none');
                            }
                        }
                    });
                } else {
                    $('#search-suggestions').addClass('d-none');
                }
            });

            $(document).on('click', function (event) {
                if (!$(event.target).closest('#search-input, #search-suggestions').length) {
                    $('#search-suggestions').addClass('d-none');
                }
            });
        });


    </script>
</body>
</html>