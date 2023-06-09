@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden py-2 py-lg-4">

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-2" data-aos="fade-left"
                        data-aos-anchor="#example-anchor"
                        data-aos-offset="500"
                        data-aos-duration="500">
                            <p class="fs-16 fw-400 text-lg-start text-center">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime.
                            </p>
                            <div class="d-flex gap-1 mt-1 mb-2 justify-content-center justify-content-lg-start">
                                <button class="btn btn-outline-warning text-dark fs-14 fw-400 rounded-30">NOTÍCIAS</button>
                                <button class="btn btn-outline-warning text-dark fs-14 fw-400 rounded-30">DICAS</button>
                            </div>
                        </div>
                    </div>
                    @foreach (range(0,3) as $image)
                        <div class="col-lg-4 col-sm-6">
                            <a href="{{ route_lang('blog-details') }}"  class="d-block swiper-slide" data-aos="fade-up"
                            data-aos-anchor-placement="top-center">
                                <div class="ratio ratio-85 my-0-50 my-sm-1 my-lg-2 rounded-30">
                                    <img class="w-100 h-100 object-fit-contain rounded-30" src="{{ asset("front/images/backgrounds/blog1.png") }}" alt="">
                                    <div class="w-100 h-100 rounded-30" style="
                                    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
                                    opacity: 0.6;"></div>
                                        <div class="bottom-0 start-0">
                                            <div class="position-relative h-100">
                                                <div class="h-100 d-flex align-items-end">
                                                    <div class="p-2 row">
                                                        <div class="col-lg-8 col-9">
                                                            <h2 class="fs-16 fw-800 text-white w-100 text-center">
                                                                Título do Blog Título do Blog Título do Blog Título do Blog
                                                                Título do Blog
                                                            </h2>
                                                        </div>
                                                        <div class="text-lg-end col-lg-4 col-3 d-flex align-items-end justify-content-end">
                                                            <div>
                                                                <button class="btn btn-outline-warning fs-16 fw-800 rounded-circle ms-auto">
                                                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                                                    </svg>                                                
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="busca my-1">
            <div class="container">
                <div class="row g-2">

                    @if (count($categories))
                        <div class="col-12">
                            <button class="btn btn-primary d-flex align-items-center gap-0-50" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias">
                                <svg class="w-1-25 h-1-25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z" />
                                </svg>
                                Categorias
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCategorias" aria-labelledby="offcanvasCategoriasLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasCategoriasLabel">Categorias</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <p>Selecione uma categoria:</p>
                                    <ul class="list-unstyled mb-0 p-0">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route_lang('blog', ['categoria' => $category->slug]) }}" class="@if (route_lang('blog', ['categoria' => $category->slug]) === Request::fullUrl()) active @endif">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a href="{{ route_lang('blog') }}" class="fw-bold">Ver todos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class="col-6 col-lg-4 col-xl-3">
                                <x-blog-card :post="$post" />
                            </div>
                        @endforeach
                    @else
                        <p>
                            Nenhum artigo encontrado.
                        </p>
                    @endif
                </div>
            </div>
            @if ($posts->total() > $posts->perPage())
                <div class="row py-2">
                    <div class="col-12 d-flex justify-content-center">
                        <x-pagination :list="$posts" />
                    </div>
                </div>
            @endif
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="..." class="w-100 m-auto">
                            <ul class="pagination d-flex justify-content-center">
                              <li class="page-item disabled">
                                <a class="page-link rounded-circle" href="#" tabindex="-1" aria-disabled="true">
                                    <button class="btn btn-outline-warning rounded-circle">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#484848" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </a>
                              </li>
                              <li class="page-item mt-0-50"><a class="page-link rounded-circle" href="#">1</a></li>
                              <li class="page-item mt-0-50 active" aria-current="page">
                                <a class="page-link rounded-circle" href="#">2</a>
                              </li>
                              <li class="page-item mt-0-50"><a class="page-link rounded-circle" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link rounded-circle" href="#">
                                    <button class="btn btn-outline-warning rounded-circle">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#484848" stroke-linejoin="round"/>
                                        </svg>                                                                                      
                                    </button>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
