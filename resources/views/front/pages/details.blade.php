@extends('front.layout.app')

@section('content')

    <main id="produto" class="py-lg-4 py-2" style=";overflow-x:hidden;">
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="swiper detalhes-swiper overflow-hidden">
                            <div class="swiper-wrapper mb-lg-4" data-aos="fade-up-right">
                        
                                @foreach (range(0,3) as $image)
                                    <a href="" data-fancybox="gallery" class="d-block swiper-slide">
                                        <div class="ratio ratio-1x1 my-2 rounded-30" style="--bs-aspect-ratio: 75%;">
                                            <img class="w-100 h-100 object-fit-contain rounded-30" src="{{ asset("front/images/backgrounds/detalhe.png") }}" alt="">
                                        </div>
                                    </a>
                                @endforeach
                        
                            </div>
                            {{--<div class="swiper-pagination h-auto mb-2"></div>--}}
                            <div class="swiper-button-prev" style="left: 5%;">
                                <button class="btn btn-outline-warning rounded-circle button-svg">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#484848" stroke-linejoin="round"/>
                                    </svg>   
                                </button>                                                          
                            </div>
                            <div class="swiper-button-next" style="right: 5%;">
                                <button class="btn btn-outline-warning rounded-circle button-svg">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#484848" stroke-linejoin="round"/>
                                    </svg>   
                                </button>                                                                                                                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up-left">
                        <div class="ps-lg-4">
                            <h2 class="fs-55 fw-800 text-primary w-100 text-lg-start text-center">Tchos BP <br>
                            (BP-50/BP-60/BP-80)
                            </h2>
                            <p class="mt-2 fw-16 fw-400 text-lg-start text-center">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime.
                            </p>
                            <div class="d-flex justify-content-center justify-content-lg-start d-flex mt-2 mt-xl-6 mb-lg-4 gap-1">
                                <button class="rounded-30 fs-16 fw-400 btn btn-outline-warning text-dark">VER TABELA</button>
                                <a href="#formm">
                                    <button class="rounded-30 fs-16 fw-400 btn btn-primary">TENHO INTERESSE</button>
                                </a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col-lg-10 m-auto mt-4 mt-lg-0">
                        <x-differentials />
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-4 py-2 bg-secondary position-relative">
            <svg data-aos="zoom-in-left" class="position-absolute top-0"  width="848" height="310" viewBox="0 0 848 310" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="170.476" cy="-367.525" rx="555.725" ry="779.965" transform="rotate(45 170.476 -367.525)" fill="#FCBE18"/>
            </svg>                
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="swiper depoimentos-swiper overflow-hidden m-auto p-2" style="margin: -2rem;" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1000">
                            <div class="swiper-wrapper mb-4">
                        
                                @foreach (range(0,2) as $image)
                                    <div class="swiper-slide row rounded-30 g-0 shadow-lg">
                                        <div class="col-lg-8 col-xl-7 col-xxl-8 position-relative" style="display: grid;">
                                            <div class="bg-white rounded-30-left rounded-30-top p-2 p-sm-4 p-lg-2 p-xl-4 w-100 h-100">
                                                    <p class="fw-16 fw-400 text-lg-start text-center">
                                                        O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, 
                                                        quando uma misturou os caracteres de um texto para criar um espécime.    
                                                    </p>
                                                    <p class="fs-16 fw-800 mt-2 w-100 text-lg-start text-center">
                                                        Empresa XYZ
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-5 col-xxl-4 h-100">
                                            <div class="bg-primary rounded-30-right rounded-30-bottom">
                                                <div class="ratio ratio-1x1 ratio-md-21x9 ratio-lg-6x9 ratio-xl-125 ratio-xxl-1x1">
                                                    <img class="w-100 h-100 object-fit-contain p-3" src="{{ asset("front/images/logos/logo.svg") }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        
                            </div>
                            <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;">
                                <div class=" w-100 h-100 position-absolute">
                                    <div class="swiper-button-prev">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#3C4C71" stroke-linejoin="round"/>
                                        </svg>                                                                         
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#3C4C71" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                           
                                    </div>
                                    <div class="swiper-pagination mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg data-aos="zoom-in-right" class="position-absolute end-0 h-100 top-0 z-index-1 d-none d-lg-block" style="right: -11%" width="373" height="569" viewBox="0 0 373 569" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="677.476" cy="278.475" rx="555.725" ry="779.965" transform="rotate(45 677.476 278.475)" fill="#3C4C71"/>
            </svg>   
            <svg data-aos="zoom-in-right" class="position-absolute end-0 h-100 top-0 d-none d-lg-block" style="right: -11%" width="683" height="569" viewBox="0 0 683 569" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="677.476" cy="453.475" rx="555.725" ry="779.965" transform="rotate(45 677.476 453.475)" fill="#FCBE18"/>
             </svg>                                             
        </section>
        <section class="pt-lg-4 pt-2" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
            <div class="container position-relative">
                <div class="row ">
                    <div class="col-lg-6 col-xl-6 col-xxl-7 g-0" style="display: grid;">
                        <div class="formulario rounded-30-left rounded-30-top p-2 py-xl-4 px-xl-4 px-xxl-6 bg-secondary pe-xxl-6" id="formm">
                            <h2 class="fs-55 mb-1 fw-800 text-primary fw-bold text-lg-start text-center">Entre em contato</h2>
                            <livewire:form-contact />
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-5 bg-secondary g-0 rounded-30-right rounded-30-bottom overflow-hidden">
                        <div class="ratio ratio-1x1 h-100 ms-auto" style="">
                            <img class="w-100 h-100 object-fit-cover rounded-30-bottom rounded-30-right" src="{{ asset("front/images/backgrounds/contato.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </main>
@endsection
