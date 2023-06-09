@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden py-2 py-lg-4">

        <section class="mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-2">
                            <p class="fs-16 fw-400 text-lg-start text-center" data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @foreach (range(0,3) as $o)
        <section class="overflow-hidden mb-2">
            <div class="container position-relative">
                <div class="row g-0 bg-primary rounded-30">
                    <div class="col-lg-5 d-flex justify-content-center">
                        <div class="bg-primary rounded-30-leftt position-relative z-index-3 p-2 p-sm-3 p-lg-4 p-xxl-6" data-aos="fade-left"
                        data-aos-offset="600"
                        data-aos-easing="ease-in-sine">
                            <h2 class="fs-55 fw-800 text-white w-100 text-lg-start text-center">A Stamp Inox</h2>
                            <p class="fs-16 fw-400 text-white text-lg-start text-center">
                                A Stamp Inox Indústria Metalúrgica Ltda. foi fundada em 1988 pelos administradores Leopoldo Bernardi e Paulo Radaelli, em Caxias do Sul – RS. Iniciaram suas atividades com a produção de serviços terceirizados para empresas da região em solda tig e torno de repuxe manual.    
                            </p>
                            <div class="w-100 text-lg-start text-center">
                                <button class="mt-1 btn btn-outline-warning rounded-30 text-white fs-20 fw-400">
                                    TENHO INTERESSE                                              
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 osition-absolute end-0 top-0 z-index-2 d-none d-lg-block" >
                        <div class="swiper solutions-swiper overflow-hidden m-auto h-100">
                            <div class="swiper-wrapper mb-4">
                                
                                @foreach (range(0,2) as $image)
                                    <div class="swiper-slide" data-aos="fade-right"
                                    data-aos-offset="600"
                                    data-aos-easing="ease-in-sine">
                                        
                                            <div class="ratio ratio-54 h-100" style="background: linear-gradient(90deg, #3C4C71 0%, rgba(60, 76, 113, 0) 100%);--bs-aspect-ratio: 54%;">
                                                <img class="w-100 h-100 object-fit-cover z-index-background rounded-30-right" src="{{ asset("front/images/backgrounds/bg-stamp.png") }}" alt="">
                                            </div>
                                        
                                    </div>
                                @endforeach
                            
                            </div>
                            <div class="w-100 position-relative ms-auto" style="width: 400px; height: 100px;margin-top: -10rem;">
                                <div class="h-100 position-absolute" style="width: 180px;right: 15%;">
                                    <div class="swiper-button-prev" style="z-index: 12;">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="white" stroke-linejoin="round"/>
                                        </svg>                          
                                    </div>
                                    <div class="swiper-button-next" style="z-index: 12;">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                        </svg>                                                                                              
                                    </div>
                                    <div class="swiper-pagination mb-lg-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        @endforeach
        <section class="py-lg-4 py-2" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
            <div class="container position-relative">
                <div class="row ">
                    <div class="col-lg-6 col-xl-6 col-xxl-7 g-0" style="display: grid;">
                        <div class="formulario rounded-30-left rounded-30-top p-2 py-xl-4 px-xl-4 px-xxl-6 bg-secondary pe-xxl-6">
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
