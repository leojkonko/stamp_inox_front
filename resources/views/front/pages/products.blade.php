@extends('front.layout.app')

@section('content')

    <main id="produto" class="py-lg-4 py-2" style=";overflow-x:hidden;">
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class=" pt-lg-2 pt-1 pe-0-25">                              
                            <form action="">
                                <div class="accordion bg-secondary rounded-30 p-0-50" id="accordionExample" data-aos="fade-up-right">
                                    @php
                                     $show = "show";   
                                     $rounded_top = "rounded-30-topp";
                                     $rounded_bottom = 0;
                                     $number = 1;
                                     $mb_0_50 = 1;
                                    @endphp
                                    @foreach (range(0,3) as $m)
                                        <div class="accordion-item {{ $mb_0_50 <= 3 ?  "mb-0-50" : "" }}">
                                            <h2 class="accordion-header" id="heading{{$number}}">
                                            <button class="accordion-button fs-20 fw-800 text-white {{$rounded_top}} {{ $rounded_bottom >= 3 ?  "rounded-30-bottomm" : "" }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$number}}" 
                                            aria-expanded="true" aria-controls="collapse{{$number}}">
                                                Linhas
                                            </button>
                                            </h2>
                                            <div id="collapse{{$number}}" class="accordion-collapse collapse {{$show}}" aria-labelledby="heading{{$number}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-secondary">
                                                <ul class="list-unstyled mb-0 p-0 d-flex flex-column gap-0-50 px-0-50 py-1">
                                                    @foreach (range(0,2) as $hehe)
                                                    <li class="">
                                                        <div class="d-flex align-items-center gap-0-50 justify-content-between">
                                                            {{-- Verificar se foi criado recentemente, caso for, adicionar a tag small abaixo --}}
                                                            <div class="d-flex align-items-center">
                                                                <input type="radio" id="opcao{{$hehe}}" name="opcoes" class="input-radio">
                                                                {{--<label for="opcao{{$hehe}}" class="radio-label"></label>--}}
                                                                <p class="fs-16 fw-400 m-0 ms-1">Item</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        @php
                                         $show = "";      
                                         $rounded_top = "";  
                                         $rounded_bottom ++;   
                                         $number++;
                                         $mb_0_50++;
                                        @endphp
                                    @endforeach
                                  </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-12" data-aos="zoom-in-down">
                       <div class="">
                            <div class="d-flex">
                                <div class="d-flex w-100 align-items-center justify-content-end gap-1 mb-2 my-2 my-lg-2">
                                    filtrado por:
                                    <button class="h-fit-content btn btn-light rounded-30">Linha leve
                                        <svg class="ms-0-50" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L11 11M11 1L1 11" stroke="#505050"/>
                                        </svg>                                            
                                    </button>
                                    <button class="h-fit-content btn btn-light rounded-30">Linha leve
                                        <svg class="ms-0-50" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L11 11M11 1L1 11" stroke="#505050"/>
                                        </svg>                                            
                                    </button>
                                </div>
                            </div>
                            <div class="row" data-aos="zoom-in-up">
                                @foreach (range(0,6) as $i)
                                    <div class="col-lg-4 d-flex flex-column col-6">
                                        <a href="{{ route_lang('details') }}" class="ratio ratio-1x1 bg-white p-1 position-relative overflow-hidden a-produtos">
                                            <img class="object-fit-cover w-100 h-100 produtos-hover" src="{{ asset("front/images/backgrounds/produto-destaque.png") }}" alt="">
                                        </a>
                                        <div class="d-flex align-items-center bottom-0 start-0 pt-1 pb-2 ratio-unstyled-all px-1">
                                            <p class="flex-column fs-16 fw-400 m-0 text-dark">
                                                Produto 1
                                            </p>
                                            <div class="d-flex bottom-0 end-0 ratio-unstyled-all justify-content-end align-items-center ms-auto">
                                                <a href="{{ route_lang('details') }}">
                                                    <button class="btn btn-outline-warning rounded-circle button-svg">
                                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#484848" stroke-linejoin="round"/>
                                                        </svg>                                                        
                                                    </button>
                                                </a>
                                            </div> 
                                        </div> 
                                    </div>
                                @endforeach
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<x-catalog-card tipo="produtos" />--}}
        {{--
        <section class="busca">
            <div class="container">
                <form method="GET" action="{{ route_lang('products') }}">
                    <div class="row">
                        <div class="div-button2">
                            <button class="btn btn-outline-black btn-busca" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <img src="{{ url('/site/dist/images/icones/filtro.svg') }}" alt=""> Filtre sua
                                Busca
                            </button>
                        </div>
                        <div class="col-12 d-flex alinhamento">
                            <div class="div-input">
                                <input type="text" name="busca" id="" placeholder="Busque por código">
                                <button type="submit">
                                    <img src="{{ url('/site/dist/images/icones/lupa-produtos.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="div-button">
                                <button class="btn btn-outline-black btn-busca" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                    <img src="{{ url('/site/dist/images/icones/filtro.svg') }}" alt=""> Filtre
                                    sua
                                    Busca
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="cards">
            <div class="container">
                @if ($products->count())
                    <div class="page active" id="page-1">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-2 cards-conteudo">
                                    <x-product-card :product="$product" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="container pb-4 mb-4" style="margin-left:5%">
                        <p>
                            Nenhum produto encontrado.
                        </p>
                    </div>
                @endif

                <div class="row py-2">
                    <div class="col-12 d-flex justify-content-center">
                        <x-pagination :list="$products" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtros:</h5>
                <div class="d-flex">
                    <button type="button" class="btn-close text-reset button-cor" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
                </div>
            </div>
            <div class="offcanvas-body">
                @foreach ($categories->get() as $category)
                    <div class="col-12 d-flex justify-content-center py-1">
                        <a href="{{ route_lang('products.category', [$category->slug]) }}" class="btn btn-custom btn-categorias">{{ $category->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--modal -->--}}
         <!-- Modal -->
         <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtros:</h5>
                <div class="d-flex">
                    <button type="button" class="btn-close text-reset button-cor" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
                </div>
            </div>
            <div class="offcanvas-body">
                @foreach ($categories->get() as $category)
                    <div class="col-12 d-flex justify-content-center py-1">
                        <a href="{{ route_lang('products.category', [$category->slug]) }}" class="btn btn-custom btn-categorias">{{ $category->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--modal -->
        <nav aria-label="Page navigation example">
    </main>
@endsection
