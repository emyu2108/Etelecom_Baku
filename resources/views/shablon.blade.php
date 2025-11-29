<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("new_title", "Etelecom Baku")</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.7.0/css/flag-icons.min.css">


    <style>
        body {
            background: #0f0f0f;
            color: #ffffff;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
            transition: 0.2s;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #0d6efd;
        }
        .footer {
            padding: 20px 0;
            border-top: 1px solid #333;
            text-align: center;
            color: #777;
            margin-top: 40px;
            font-size: 14px;
        }
        .nav-item.dropdown:hover > .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            background: #111 !important;
            border: 1px solid #333 !important;
        }
    </style>
</head>

<body>

{{-- ШАПКА --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
            <span class="fs-4">Etelecom Baku</span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">

            <ul class="navbar-nav ms-auto">



                {{-- Мега Каталог --}}
                <li class="nav-item dropdown position-static">

                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ __('main.catalog') }}
                    </a>

                    <div class="dropdown-menu w-100 p-4 text-white">

                        <div class="row">

                            {{-- ЛЕВО — КАТЕГОРИИ --}}
                            <div class="col-md-4">
                                <h5 class="border-bottom pb-2 mb-3">{{ __('main.categories') }}</h5>

                                @php
                                    $menuCategories = \App\Models\Category::where('is_active', true)->get();
                                @endphp

                                @foreach($menuCategories as $cat)
                                    <a href="/category/{{ $cat->slug }}"
                                       class="d-block text-white mb-2">
                                        {{ $cat->title }}
                                    </a>
                                @endforeach
                            </div>

                            {{-- ПРАВО — ТОВАРЫ --}}
                            <div class="col-md-8">
                                <h5 class="border-bottom pb-2 mb-3">{{ __('main.popular_products') }}</h5>

                                @php
                                    $menuPhones = \App\Models\Phone::where('is_active', true)
                                        ->orderBy('id', 'desc')
                                        ->limit(8)
                                        ->get();
                                @endphp

                                <div class="row">
                                    @foreach($menuPhones as $phone)
                                        <div class="col-md-3 mb-3">
                                            <a href="/phone/{{ $phone->slug }}" class="text-decoration-none text-white">

                                                @if($phone->image)
                                                    <img src="{{ asset('storage/'.$phone->image) }}"
                                                         style="width:100%; height:80px; object-fit:cover;"
                                                         class="rounded mb-1">
                                                @endif

                                                <small>{{ $phone->title }}</small>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                </li>

                {{-- ЯЗЫКИ --}}
                <li class="nav-item dropdown">

                    {{-- кнопка переключения --}}
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                       href="#"
                       data-bs-toggle="dropdown">

                        {{-- Флаг текущего языка --}}
                        <span class="fi fi-{{ app()->getLocale() === 'en'
            ? 'gb'
            : (app()->getLocale() === 'az' ? 'az' : 'ru') }}"></span>

                        {{ strtoupper(app()->getLocale()) }}
                    </a>

                    {{-- Список языков --}}
                    <div class="dropdown-menu bg-dark text-white border-secondary">

                        <a class="dropdown-item text-white" href="{{ route('lang.switch', 'ru') }}">
                            <span class="fi fi-ru me-2"></span> Русский
                        </a>

                        <a class="dropdown-item text-white" href="{{ route('lang.switch', 'az') }}">
                            <span class="fi fi-az me-2"></span> Azərbaycan
                        </a>

                        <a class="dropdown-item text-white" href="{{ route('lang.switch', 'en') }}">
                            <span class="fi fi-gb me-2"></span> English
                        </a>

                    </div>
                </li>


            </ul>

        </div>
    </div>
</nav>

{{-- КОНТЕНТ --}}
<div class="container mt-4">
    @yield("new_content")
</div>

{{-- ФУТЕР --}}
<div class="footer">
    © {{ date('Y') }} Etelecom Baku — Все права защищены
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
