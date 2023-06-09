

<div class="gallery-swiper overflow-hidden rounded-3" data-aos="zoom-in">
    <div class="swiper-wrapper">
        @foreach (range(0,2) as $image)
            <a href="" data-fancybox="gallery" class="d-block video-slide swiper-slide">
                <div class="ratio ratio-16x1">
                    <img class="w-100 h-100 object-fit-cover rounded-3" src="{{ asset('front/images/backgrounds/blog.png') }}">
                </div>
                <div class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center h-100 w-100">
                    <svg class="play" width="1em" height="1em" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="60" cy="60" r="59" stroke="white" stroke-width="2"></circle>
                        <path d="M87 60L46.5 83.3827L46.5 36.6173L87 60Z" fill="transparent" stroke="white" stroke-width="2"></path>
                    </svg>
                </div>
            </a>
        @endforeach

    </div>
    <div class="swiper-pagination h-auto"></div>
</div>