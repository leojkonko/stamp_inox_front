<div class="swiper diferenciais-swiper overflow-hidden m-auto" data-aos="zoom-in-down">
    <div class="swiper-wrapper mb-4">

        @foreach (range(0,8) as $image)
            <div class="swiper-slide">
                <div class="ratio ratio-1x1">
                    <svg width="170" height="170" viewBox="0 0 170 170" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M131.418 131.418C95.4378 167.399 45.4876 175.785 19.8515 150.149C-5.78467 124.512 2.60113 74.5622 38.5817 38.5817C74.5622 2.60113 124.512 -5.78467 150.149 19.8515C175.785 45.4876 167.399 95.4378 131.418 131.418Z" stroke="#FCBE18" stroke-width="10"/>
                    </svg>
                    <img class="w-100 h-100 object-fit-contain rounded-30 p-xxl-3 p-xl-2 p-lg-3 p-2 p-sm-3" src="{{ asset("front/images/backgrounds/diferenciais.png") }}" alt="">                                          
                </div>
                <p class="mt-2 fs-16 fw-400 w-100 text-center">
                    Diferencial <br> 1
                </p>
            </div>
        @endforeach

    </div>
    <div class="swiper-pagination h-auto mb-2"></div>
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