@extends('front.layout.app')

@section('content')
    <main id="">

        <x-banners />

        <section class="py-lg-4 py-2">
            <div class="">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="destaques-swiper m-auto position-relative px-lg-4">
                            <div class="swiper-wrapper">
                                @foreach (range(0,2) as $t)
                                    <div class="swiper-slide" data-aos="zoom-in-down">
                                        <div class="row destaques" style="background-image: url({{ asset("front/images/backgrounds/destaques.png") }})">
                                            <div class="col-lg-6 d-flex justify-content-center  rounded-30-left "style="
                                                background-image: url({{ asset("front/images/backgrounds/elipse.png") }});
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position-x: 100%;">
                                                <div class="position-relative h-100 w-100">
                                                    <div class="position-absolute bottom-0 balde">
                                                        <img class="object-fit-cover w-100 h-100 " src="{{ asset("front/images/backgrounds/balde-swiper.png") }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-flex justify-content-center rounded-30-right">
                                                <div class="py-lg-3 py-2">
                                                    <h6 class="fs-20 fw-400 text-white w-100 text-lg-start text-center">DESTAQUES EM LINHA</h6>
                                                    <h2 class="fs-55 fw-800 text-white text-lg-start text-center">Ind. Alimentícia</h2>
                                                    <div class="w-100 text-lg-start text-center">
                                                        <button class="mt-1 btn btn-outline-warning rounded-30 text-white fs-16 fw-400">LINHA COMPLETA
                                                            <svg class="ms-0-50" width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                                            </svg>                                                            
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 d-flex row px-1">
                                            @foreach (range(0,3) as $t1)
                                                <div class="col-lg-4 col-xl-3 col-md-6 col-12" data-aos="zoom-in-down">
                                                    <div class="ratio ratio-1x1">
                                                        <a href="">
                                                            <img class="object-fit-cover w-100 h-100 " src="{{ asset("front/images/backgrounds/produto-destaque.png") }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="w-100 d-flex mt-2 px-lg-2 px-2 mb-2">
                                                        <p class="fs-20 fw-400 me-auto">Produto 1</p>
                                                        <button class="btn btn-outline-warning rounded-circle ms-auto">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#484848" stroke-linejoin="round"/>
                                                            </svg>                                                                
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev" style="top:18%;">
                                <button class="btn btn-outline-warning rounded-circle">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#484848" stroke-linejoin="round"/>
                                    </svg>  
                                </button>                                                         
                            </div>
                            <div class="swiper-button-next" style="top:18%;">
                                <button class="btn btn-outline-warning rounded-circle">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#484848" stroke-linejoin="round"/>
                                    </svg>  
                                </button>                                                                                              
                            </div>
                            <div class="swiper-pagination h-auto" style="margin-bottom: -35px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-4 py-2" data-aos="fade-up"
        data-aos-duration="3000">
            <div class="container">
                <div class="row m-auto d-flex justify-content-center z-index-2 position-relative">
                    <div class="col-lg-8 bg-secondary rounded-30-left rounded-30-top">                         
                        <div class="px-lg-4 px-sm-2 px-1 py-lg-6 py-2">
                            <h2 class="fs-55 fw-800 text-primary w-100 text-lg-start text-center">Linha sob medida</h2>
                            <p class="fs-16 fw-400 pe-lg-4 text-lg-start text-center">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.
                            </p>
                            <div class="w-100 text-lg-start text-center">
                                <button class="mt-1 btn btn-outline-warning rounded-30 text-dark fs-20 fw-400">
                                    VEJA OS PRODUTOS                                                     
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center bg-secondary rounded-30-right rounded-30-bottom d-none d-lg-flex"
                    style="
                        background-image: url({{ asset("front/images/backgrounds/elipse2.png") }});
                        background-size: ;
                        background-position-x: 100%; 
                        background-repeat: no-repeat;">
                        <div class="position-relative h-100 w-100">
                            <div class="position-lg-absolute bottom-0">
                                <img class="object-fit-cover w-100 h-100 " src="{{ asset("front/images/backgrounds/tacho.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center bg-secondary rounded-30-right rounded-30-bottom d-lg-none">
                        <div class="position-relative h-100 w-100">
                            <div class="position-lg-absolute bottom-0">
                                <img class="object-fit-cover w-100 h-100 " src="{{ asset("front/images/backgrounds/tacho.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-lg-primary mb-2 mb-lg-0" data-aos="zoom-out-down">
                <div class="container container-start position-relative">
                    <svg style="bottom: -21%;
                    z-index: 1;
                    left: -10%;" class="position-absolute" width="653" height="1013" viewBox="0 0 653 1013" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="506.339" cy="506.339" rx="410.9" ry="576.701" transform="rotate(45 506.339 506.339)" stroke="#FCBE18" stroke-width="10"/>
                    </svg>   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bg-primary rounded-30">
                                <div class="position-relative py-lg-6 z-index-3 pe-lg-8 py-4">
                                    <h2 class="fs-55 fw-800 text-white w-100 text-lg-start text-center">A Stamp Inox</h2>
                                    <p class="fs-16 fw-400 pe-lg-4 text-white text-lg-start text-center">
                                        A Stamp Inox Indústria Metalúrgica Ltda. foi fundada em 1988 pelos administradores Leopoldo Bernardi e Paulo Radaelli, em Caxias do Sul – RS. Iniciaram suas atividades com a produção de serviços terceirizados para empresas da região em solda tig e torno de repuxe manual.    
                                    </p>
                                    <div class="w-100 text-lg-start text-center">
                                        <button class="mt-1 btn btn-outline-warning rounded-30 text-white fs-20 fw-400">
                                            NOSSA HISTÓRIA                                               
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 position-absolute end-0 top-0 z-index-2 d-none d-lg-block h-100" >
                            <div class="ratio ratio-42 h-100" style="background: linear-gradient(90deg, #3C4C71 0%, rgba(60, 76, 113, 0) 100%);">
                                <img class="w-100 h-100 object-fit-cover z-index-background   " src="{{ asset("front/images/backgrounds/bg-stamp.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="bg-secondary position-relative overflow-hidden rounded-30 rounded-lg-0 mx-1 mx-lg-0 mb-2 mb-lg-0">
            <div class=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 h-100 position-absolute end-0 top-0 z-index-1 g-0" data-aos="zoom-out-left">
                        <div class="h-100">
                            <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/elipse-blog.png") }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center" data-aos="zoom-out-right">
                        <div class="position-relative py-lg-6 z-index-3 pe-xl-6 py-2">
                            <h2 class="fs-55 fw-800 text-primary w-100 text-lg-start text-center">Blog</h2>
                            <p class="fs-16 fw-400 pe-lg-4 text-lg-start text-center">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500.    
                            </p>
                            <div class="w-100 text-lg-start text-center">
                                <button class="mt-1 btn btn-outline-warning rounded-30 text-dark fs-16 fw-400">
                                    VEJA MAIS                                         
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 position-relative z-index-2 d-none d-lg-block" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="row">
                            <div class="my-lg-4 my-2 d-flex align-items-center gap-2">
                                <div class="col-lg-6">
                                    <div class="ratio ratio-85 my-2">
                                        <img class="w-100 h-100 object-fit-contain" src="{{ asset("front/images/backgrounds/blog1.png") }}" alt="">
                                        <div class="w-100 h-100" style="
                                        background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
                                        opacity: 0.6;
                                        border-radius: 0px 0px 10px 30px;"></div>
                                            <div class="bottom-0 start-0">
                                                <div class="position-relative h-100 d-flex align-items-end">
                                                    <div class="mb-xxl-4 mb-lg-2 mx-lg-2 d-flex">
                                                        <h2 class="fs-16 fw-800 text-white" style="width: 60%;">
                                                            Título do Blog Título do BlogTítulo do Blog Título do Blog
                                                            Título do Blog
                                                        </h2>
                                                        <div class="text-end" style="width: 40%">
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
                                <div class="col-lg-6" data-aos="fade-right"
                                data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                    <div class="ratio ratio-40">
                                        <img class="w-100 h-100 object-fit-contain" src="{{ asset("front/images/backgrounds/blog2.png") }}" alt="">
                                        <div class="w-100 h-100" style="
                                        background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
                                        opacity: 0.6;
                                        border-radius: 10px 30px 10px 10px;"></div>
                                        <div class="bottom-0 start-0">
                                            <div class="position-relative h-100 d-flex align-items-end">
                                                <div class="mb-lg-1 mx-lg-1 d-flex">
                                                    <h2 class="fs-16 fw-800 text-white" style="width: 60%;">
                                                        Título do Blog Título do BlogTítulo do Blog Título do Blog
                                                        Título do Blog
                                                    </h2>
                                                    <div class="text-end" style="width: 40%">
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
                                    <div class="ratio ratio-40 mt-2" data-aos="fade-right"
                                    data-aos-offset="300"
                                    data-aos-easing="ease-in-sine">
                                        <img class="w-100 h-100 object-fit-contain" src="{{ asset("front/images/backgrounds/blog3.png") }}" alt="">
                                        <div class="w-100 h-100" style="
                                        background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
                                        opacity: 0.6;
                                        border-radius: 10px 10px 30px 10px;"></div>
                                        <div class="bottom-0 start-0">
                                            <div class="position-relative h-100 d-flex align-items-end">
                                                <div class="mb-lg-1 mx-lg-1 d-flex">
                                                    <h2 class="fs-16 fw-800 text-white" style="width: 60%;">
                                                        Título do Blog Título do BlogTítulo do Blog Título do Blog
                                                        Título do Blog
                                                    </h2>
                                                    <div class="text-end" style="width: 40%">
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
                        </div>
                    </div>
                    <div class="blog-swiper overflow-hidden rounded-3 d-lg-none" data-aos="fade-up"
                    data-aos-duration="3000">
                        <div class="swiper-wrapper mb-4">
                    
                            @foreach (range(0,3) as $image)
                                <a href="" data-fancybox="gallery" class="d-block swiper-slide">
                                    <div class="ratio ratio-85 my-2 rounded-30">
                                        <img class="w-100 h-100 object-fit-contain rounded-30" src="{{ asset("front/images/backgrounds/blog1.png") }}" alt="">
                                        <div class="w-100 h-100 rounded-30" style="
                                        background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
                                        opacity: 0.6;"></div>
                                            <div class="bottom-0 start-0">
                                                <div class="position-relative h-100">
                                                    <div class="h-100 d-flex align-items-end">
                                                        <div class="p-2">
                                                            <h2 class="fs-16 fw-800 text-white w-100 text-center">
                                                                Título do Blog Título do Blog Título do Blog Título do Blog
                                                                Título do Blog
                                                            </h2>
                                                            <div class="text-end w-100 text-center">
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
                                </a>
                            @endforeach
                    
                        </div>
                        <div class="swiper-pagination h-auto mb-2"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
