@extends('front.layout.app')

@section('content')

    <main id="empresa" class="row gx-0 gy-2 gy-lg-4 overflow-hidden">

        <section class="pb-2 pb-lg-0">
            <div class="container container-start">
                <div class="row">
                    <div class="col-lg-8 d-flex align-items-center" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="py-lg-4 pe-lg-6 text-center text-lg-start">
                            <p class="fs-16 fw-400">
                                A Stamp Inox Indústria Metalúrgica Ltda. foi fundada em 1988 pelos administradores Leopoldo Bernardi e Paulo Radaelli, em Caxias do Sul – RS. Iniciaram suas atividades com a produção de serviços terceirizados para empresas da região em solda tig e torno de repuxe manual. Em seguida, com o objetivo de ampliar os negócios para atender a demanda do mercado, a Stamp Inox optou pela fabricação de produtos artesanais como: chaleiras, saleiras, açucareiros, saladeiras, bacias, canecas e frigideiras, comercializados para o RS, SC, PR e SP.
                            </p>
                            <p class="fs-16 fw-400">
                                Posteriormente, foram desenvolvidos produtos voltados para a área industrial, como cubas retangulares, redondas e gastronômicas (gn), pias, carrinhos, tanques, mictórios, utilidades domésticas, panelas e variados produtos sob medida para restaurantes e hospitais, entre outros. Além disso, criaram-se produtos para a área da panificação com venda para o mercado nacional e internacional. Também, oferece serviços especiais de usinagem para matrizes, mão de obra qualificada em prensas hidráulicas, solda, dobra e desenvolvimento, planejamento e operação de novos produtos.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <a href="" data-fancybox="gallery" class="d-block video-slide swiper-slide">
                            <div class="ratio ratio-1x1">
                                <img class="rounded-30 rounded-lg-0" src="{{ url("/front/images/backgrounds/empresa.png") }}" alt="Icone">
                            </div>
                            <div class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center h-100 w-100">
                                <svg class="play" width="8em" height="8em" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="60" cy="60" r="59" stroke="white" stroke-width="2"></circle>
                                    <path d="M87 60L46.5 83.3827L46.5 36.6173L87 60Z" fill="transparent" stroke="white" stroke-width="2"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary py-lg-4 py-2 mt-0">
            <div class="container">
                <div class="row">
                    @php
                        $texts = [
                            'missao' => [
                                //'image' => $page->icon_mission->first()->url(),
                                'title' => 'Missão',
                                //'description' => $page->text_mission,
                            ],
                            'visao' => [
                                //'image' => $page->icon_vision->first()->url(),
                                'title' => 'Visão',
                                //'description' => $page->text_vision,
                            ],
                            'valores' => [
                                //'image' => $page->icon_values->first()->url(),
                                'title' => 'Valores',
                                //'description' => $page->text_values,
                            ],
                        ];
                        $opa = 0
                    @endphp
                    @foreach ($texts as $text)
                    @php
                    $opa++
                    @endphp
                        <div class="col-lg-4 border-dark {{ $opa >= 2 ? 'border-lg-start' : '' }} d-flex justify-content-center align-items-start">
                            <div class="px-2 text-center text-lg-start">
                                <h2 class="fs-32 text-primary fw-800 text-center text-lg-start w-100 mt-1 mt-lg-0">
                                    {{ __($text['title']) }}
                                </h2>
                                <p class="p text-center text-lg-start px-1">
                                    @if ($text['title'] == "Missão")
                                        <p class="fs-16 fw-400" data-aos="zoom-out-down">
                                            Proporcionar aos nossos clientes soluções em aço inox voltadas para o ramo alimentício e industrial, que permitam o crescimento e aperfeiçoamento 
                                            contínuo. Obter resultados econômicos satisfatórios e sustentáveis de acordo com a nossa Política da Qualidade.
                                        </p>
                                        @elseif($text['title'] == "Visão")
                                        <p class="fs-16 fw-400" data-aos="zoom-out-down">
                                            Ser uma empresa de referência nacional no fornecimento de produtos para a indústria e para o mercado de reposição de equipamentos para panificação e gastronomia.    
                                        </p>
                                        @elseif($text['title'] == "Valores")
                                        <ul class="fs-16 fw-400 list-unstyled" data-aos="zoom-out-down">
                                            <li>• Foco no cliente.</li>
                                            <li>• Ética nas transações comerciais e no tratamento com as pessoas.</li>
                                            <li>• Dedicação e empenho.</li>
                                            <li>• Responsabilidade social e adoção de posturas e ações que promovam o bem estar dos colaboradores.    </li>
                                        </ul>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="position-relative pt-1 mt-0" style="
        background-image: url(http://localhost:8080/front/images/backgrounds/empresa3.png);
        background-position-x: 50%;
        background-size: cover;
        background-repeat: no-repeat;
        ">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: #3C4C71;opacity: 0.25;"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 z-index-background" style="background: #000000;opacity 0.25;"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 z-index-background" style="background: #3C4C71;"></div>
                <svg class="position-absolute top-0 w-100" width="1920" height="251" viewBox="0 0 1920 251" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="960" cy="15" rx="236" ry="1245" transform="rotate(90 960 15)" fill="#FCBE18"/>
                </svg>
                <div class="empresa2-swiper swiper" style="" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="2500">
                    <div class="swiper-wrapper mb-4">
                        @foreach (range(0,8) as $banner)
                            <div class="swiper-slide">
                                <a href="{{ asset('front/images/backgrounds/empresa2.png') }}" data-fancybox="gallery">
                                    <div class="ratio ratio-13x9">
                                        <img class="w-100 h-100 object-fit-cover rounded-3" src="{{ asset('front/images/backgrounds/empresa2.png') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{--<div class="swiper-button-next">opa</div> --}} 
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <h2 class="fs-55 fw-800 text-white w-100 text-center mb-3 position-relative z-index-2">Nossos diferenciais</h2>
                            <div class="swiper diferenciais-swiper overflow-hidden m-auto" data-aos="zoom-out-down">
                                <div class="swiper-wrapper mb-4">
                            
                                    @foreach (range(0,8) as $image)
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-1x1">
                                                <svg width="170" height="170" viewBox="0 0 170 170" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M131.418 131.418C95.4378 167.399 45.4876 175.785 19.8515 150.149C-5.78467 124.512 2.60113 74.5622 38.5817 38.5817C74.5622 2.60113 124.512 -5.78467 150.149 19.8515C175.785 45.4876 167.399 95.4378 131.418 131.418Z" stroke="#FCBE18" stroke-width="10"/>
                                                </svg>
                                                <img class="w-100 h-100 object-fit-contain rounded-30 p-xxl-3 p-xl-2 p-lg-3 p-2 p-sm-3" src="{{ asset("front/images/backgrounds/diferenciais-branco.svg") }}" alt="">                                          
                                            </div>
                                            <p class="mt-2 fs-16 fw-400 w-100 text-center text-white">
                                                Diferencial <br> 1
                                            </p>
                                        </div>
                                    @endforeach
                            
                                </div>
                                <div class="swiper-pagination h-auto mb-2 pagination-white"></div>
                                {{--<div class="swiper-button-prev">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="white" stroke-linejoin="round"/>
                                    </svg>                          
                                </div>
                                <div class="swiper-button-next">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                    </svg>                                                                                              
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 h-100"></div>
            
        </section>
    </main>
@endsection
