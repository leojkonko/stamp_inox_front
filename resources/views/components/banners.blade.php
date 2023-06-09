
    @php
     $svg_position = "right: -35%;"; 
     $svg = 1;
    @endphp
    
    <section class="">
        <div class="banner-swiper swiper">
            <div class="swiper-wrapper">
                @foreach (range(0,2) as $banner)
                @php
                    $svg++;
                @endphp
                    <div class="swiper-slide banner-slide position-relative overflow-hidden">
                        <picture>
                            {{--Video
                            <video class="object-fit-cover w-100 h-100 d-none d-lg-block" src="{{ $banner->bannerDesktop->first()?->url() }}" 
                                type="video/mp4" muted="" playsinline="" autoplay="" loop="" media="(min-width: 767px)">
                                    Seu navegador não suporta a tag de vídeo.
                                </video>
                            Video --}}
                            {{-- Desktop --}}
                            <div style="background: #484848;">
                                <div style="background: #3C4C71;">
                                    {{--<source  srcset="{{ asset("front/images/backgrounds/banner.png") }}" media="(min-width: 767px)" >--}}
                                        <div class="ratio ratio-lg-47 d-lg-block d-none" style="--bs-aspect-ratio: 47%;">
                                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                                        </div>
                                        <div class="position-absolute top-60 start-50 text-start w-100 translate-middle z-index-3">
                                            <div class="container">
                                                <div class="col-lg-12 col-xl-6 col-xxl-5 position-relative" data-aos="fade-right">
                                                    <h2 class="text-white fs-55 fw-400 mt-lg-3 mt-xl-0 w-100 text-center text-xl-start"><span class="fw-800">Soluções inteligentess</span> em tachos de inox para sua indústria</h2>
                                                    {{--controles--}}
                                                </div>
                                            </div>
                                        </div>
                                    {{-- Mobile --}}
                                    <div class="ratio ratio ratio-6x9 ratio-md-16x9 ratio-lg-21x9 d-lg-none">
                                        <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </picture>

                        {{--@if ($banner->link_1)
                            <a href="{{ $banner->link_1 }}" class="stretched-link"></a>
                        @endif--}}
                        <div class="position-absolute end-0 bottom-0 z-index-3  ">
                            <div class="ratio ratio ratio-1x1 position-absolute end-0 bottom-0 z-index-3">
                                <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/35.png") }}" alt="">
                            </div>
                        </div>
                        <img class="position-absolute z-index-3" style="right: 12%; bottom: 12%;" src="{{ asset("front/images/backgrounds/35.png") }}" alt="" data-aos="fade-left">
                        <svg class="position-absolute {{ $svg % 2 == 0 ? 'svg-position-initial' : 'svg-position-custom' }} end-0 bottom-0 z-index-1" style="{{ $svg % 2 == 0 ? '' : $svg_position }}"  width="881" height="705" viewBox="0 0 881 705" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="613.276" cy="613.276" rx="499.122" ry="700.522" transform="rotate(45 613.276 613.276)" stroke="#FCBE18" stroke-width="10"/>
                        </svg> 
                    </div>
                @endforeach
            </div>
            <div class="container z-index-1 controle-banner" >
                <div class=" w-50 h-100 position-absolute bottom-0 left-0 position-controles-banner" style="width: 200px; height: 100px;">
                    <div class="swiper-button-prev" style="z-index: 13">
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="white" stroke-linejoin="round"/>
                        </svg>                          
                    </div>
                    <div class="swiper-button-next" style="z-index: 13">
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                        </svg>                                                                                              
                    </div>
                    <div class="swiper-pagination mb-2"></div>
                </div>
            </div>            
        </div>
    </section>
