<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <x-custom-code type="head" />
    <x-lgpd-head-script />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agência Ellite Digital">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- Fonte temporária --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;800&display=swap" rel="stylesheet">

    {{-- Swiper.js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.css" integrity="sha512-Ja1oxinMmERBeokXx+nbQVVXeNX771tnUSWWOK4mGIbDAvMrWcRsiteRyTP2rgdmF8bwjLdEJADIwdMXQA5ccg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    {{--  --}}

    {{-- Front css --}}
    @vite(['resources/front/sass/vendors/bootstrap/bootstrap.scss', 'resources/front/sass/main.scss'])

    <x-head-tags />
    @livewireStyles

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        {{--<div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>--}}
        <div class="offcanvas-body row g-0 p-0 position-relative">
          @foreach (range(0,2) as $item)
          <div class="col-lg-4 position-relative overflow-hidden">
            <a href="{{ route_lang('products') }}" class="areas-header">
                <div class="position-absolute w-100 h-100 z-index-1 bg-custom" style="background: #3C4C71;
                opacity: 0.65;"></div>
                <div class="ratio ratio-38 h-100 ratio-header">
                    <img class="w-100 h-100 object-fit-cover img-ratio-header" src="{{ asset('front/images/backgrounds/offcanvas.png') }}" alt="Logo {{ env('APP_NAME') }}">
                </div>
                <h2 class="position-absolute start-50 translate-middle top-50 z-index-1 f2-40 fw-800 text-white">Hospitalar</h2>
                <svg class="position-absolute start-50 translate-middle-x bottom-0 z-index-1"  width="270" height="10" viewBox="0 0 270 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M270 10L0 9.99998C4.82823e-07 4.47713 4.47714 -2.32127e-05 10 -2.27299e-05L260 -8.74227e-07C265.523 -3.91405e-07 270 4.47715 270 10Z" fill="#FCBE18"/>
                </svg>                    
            </a>
          </div>
          @endforeach
        </div>
        <div type="button" class="text-reset position-absolute start-50 translate-middle-x" style="bottom: -4rem;opacity: 1;" data-bs-dismiss="offcanvas" aria-label="Close">
            <button class="btn btn-primary position-relative z-index-3 rounded-30">
                <svg class="me-0-50" width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="white" stroke-linejoin="round"/>
                </svg>
                    Voltar
            </button>
        </div>
      </div>
    <x-custom-code type="body" />

    <header class="header w-100 isolation-isolate position-absolute top-0 start-0 w-100 py-1 py-lg-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto me-auto">
                    <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                        <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>

                <div class="col-auto ms-auto m-lg-auto">

                    {{-- Botão mobile --}}
                    <button class="d-lg-none btn btn-outline-light p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader" aria-controls="offcanvasHeader">
                        <svg class="w-1-50 h-1-50" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                            <path stroke-linecap="white" stroke-linejoin="white" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasHeader" aria-labelledby="offcanvasHeaderLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasHeader" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body position-relative">
                            <div class="d-flex justify-content-center w-100 gap-4">
                                <x-site-menu />
                            </div>
                            <div class="position-absolute start-50 translate-middle-x d-none img-offcanvas" style="bottom: 4%;">
                                <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                                    <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto ms-auto d-none d-lg-block">
                    
                    <div class="dropdown">
                        <button class="btn btn-outline-light gap-0-50 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            PT
                            <svg class="ms-0-50" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L13 1" stroke="white" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">PT</a></li>
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">ES</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (!Route::is('home'))
        <x-breadcrumbs />
    @endif
