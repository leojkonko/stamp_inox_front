{{-- @inject('products', 'Ellite\\Products\\Services\\ProductService')

@php
    $categories = $products->getCategories()->get();
@endphp

@if ($categories->count())
    @if ($type === 'footer')
        @foreach ($categories as $category)
            <li>
                <a href="{{ route_lang('products.category', ['category' => $category->slug]) }}">
                    {{ $category->title }}
                </a>
            </li>
        @endforeach
    @else
        <li class="dropdown">
            <button class="dropdown-button gap-0-50">Produtos
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flecha w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <ul class="dropdown-content">
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route_lang('products.category', ['category' => $category->slug]) }}">
                            {{ $category->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
@endif --}}


<nav class="menu">
    <ul class="mb-0 list-unstyled d-flex flex-column flex-lg-row align-items-lg-center gap-1 gap-lg-2 gap-xl-3">
        <li>
            <a href="{{ route_lang('company') }}" title="Empresa" class="@if (Route::is('company')) active @endif fs-16 fw-400 text-decoration-none text-white">Empresa</a>
        </li>
        <li class="produtos">
            <a href="" title="Home" class="@if (Route::is('products')) active @endif fs-16 fw-400 text-decoration-none text-white"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Produtos
                <svg class="ms-0-50" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L13 1" stroke="white" stroke-linejoin="round"/>
                </svg>        
            </a>
        </li>
        <li class="d-lg-none">
            <a href="{{ route_lang('products') }}" title="products" class="@if (Route::is('products')) active @endif fs-16 fw-400 text-decoration-none text-white">Produtos</a>
            <div class="produtos-item" style="">
                <a href="{{ route_lang('products') }}" title="products" class="@if (Route::is('products')) active @endif fs-14 fw-400 text-decoration-none text-white produtos-areas">Ind. Alimentícia</a>
                <a href="{{ route_lang('products') }}" title="products" class="@if (Route::is('products')) active @endif fs-14 fw-400 text-decoration-none text-white produtos-areas">Hospitalar</a>
                <a href="{{ route_lang('products') }}" title="products" class="@if (Route::is('products')) active @endif fs-14 fw-400 text-decoration-none text-white produtos-areas">Doméstica</a>
            </div>
        </li>
        <li>
            <a href="{{ route_lang('solutions') }}" title="solutions" class="@if (Route::is('solutions')) active @endif fs-16 fw-400 text-decoration-none text-white">Serviços</a>
        </li>
        <li>
            <a href="{{ route_lang('blog') }}" title="Blog" class="@if (Route::is('blog')) active @endif fs-16 fw-400 text-decoration-none text-white">Blog</a>
        </li>
        <li>
            <a href="{{ route_lang('contact') }}" title="Contato" class="@if (Route::is('contact')) active @endif fs-16 fw-400 text-decoration-none text-white">Contato</a>
        </li>
        <li class="d-none">
            <div class="dropdown d-flex justify-content-center">
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
        </li>
    </ul>
</nav>
