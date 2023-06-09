@extends('front.layout.app')

@section('content')
<main id="blog" class="overflow-hidden">
    <section id="solucoes" class="py-2 py-lg-4">          
        <div class="container position-relative"  data-aos="fade-up-left">
            <div class="row gy-2 justify-content-center text-center text-lg-start">
                <div class="col-12 col-lg-8">
                    <div class="mb-1 w-100 text-lg-start text-center">
                        <h1 class="fs-40 fw-800 text-primary mb-1">Título</h1>
                    </div>
                    <div class="ratio ratio-16x9">
                        <x-gallery-swiper  />
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                        <small class="text-muted mb-1 d-block">Data: 27/25/2020</small>
                    <div class="editor-texto">
                        <p class="text-dark p-16 p-400">
                            Descrição
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="d-flex flex-column flex-lg-row gap-0-50 align-items-center flex-wrap mb-2">
                        <span>
                            Compartilhe:
                        </span>
                        <div class="d-flex gap-0-50 align-items-center">
                            <a class="d-flex btn btn-outline-cinza p-0-50" title="Compartilhe no WhatsApp" href="https://api.whatsapp.com/send?text={{-- 'Veja esse link: ' . route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Whatsapp"--}}">
                                <svg class="w-1-25 h-1-25" id="whatsapp" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="#3C4C71" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M207.15 47.8406C186.013 26.6531 157.864 15 127.95 15C66.2031 15 15.9585 65.2446 15.9585 126.991C15.9585 146.716 21.104 165.986 30.8906 182.987L15 241L74.3754 225.412C90.7201 234.341 109.133 239.033 127.899 239.033H127.95C189.646 239.033 241 188.788 241 127.042C241 97.1268 228.287 69.0281 207.15 47.8406V47.8406ZM127.95 220.166C111.201 220.166 94.8062 215.676 80.5299 207.201L77.15 205.183L41.9384 214.415L51.3214 180.061L49.1018 176.529C39.7692 161.698 34.8759 144.597 34.8759 126.991C34.8759 75.6871 76.6455 33.9174 128 33.9174C152.87 33.9174 176.227 43.6031 193.782 61.2089C211.337 78.8147 222.133 102.171 222.083 127.042C222.083 178.396 179.254 220.166 127.95 220.166V220.166ZM179.001 150.449C176.227 149.036 162.455 142.276 159.882 141.368C157.309 140.41 155.443 139.956 153.576 142.781C151.71 145.606 146.362 151.861 144.698 153.778C143.083 155.645 141.419 155.897 138.644 154.484C122.199 146.262 111.403 139.804 100.557 121.19C97.6817 116.246 103.433 116.599 108.78 105.904C109.688 104.038 109.234 102.424 108.528 101.011C107.821 99.5987 102.222 85.8268 99.9013 80.2272C97.6312 74.779 95.3107 75.5357 93.5955 75.4348C91.9812 75.3339 90.1147 75.3339 88.2482 75.3339C86.3817 75.3339 83.3549 76.0402 80.7821 78.8147C78.2094 81.6397 70.9955 88.3996 70.9955 102.171C70.9955 115.943 81.0344 129.261 82.3964 131.128C83.8089 132.994 102.121 161.244 130.22 173.402C147.977 181.07 154.938 181.725 163.817 180.414C169.215 179.607 180.363 173.654 182.684 167.096C185.004 160.538 185.004 154.938 184.298 153.778C183.642 152.517 181.776 151.811 179.001 150.449Z" />
                                </svg>
                            </a>
                            <a class="d-flex btn btn-outline-cinza p-0-50" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{-- route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Facebook--}}">
                                <svg class="w-1-25 h-1-25" id="facebook_f" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="#3C4C71" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M181.005 142.188L187.332 101.106H147.776V74.4466C147.776 63.2075 153.301 52.2521 171.017 52.2521H189V17.2754C189 17.2754 172.681 14.5 157.079 14.5C124.503 14.5 103.21 34.1763 103.21 69.7958V101.106H67V142.188H103.21V241.5H147.776V142.188H181.005Z" />
                                </svg>
                            </a>
                            <a class="d-flex btn btn-outline-cinza p-0-50" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{-- route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Facebook--}}">
                                <svg class="w-1-25 h-1-25" width="24" height="24" viewBox="0 0 24 24" fill="#3C4C71" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="#3C4C71"></path>
                                    <path d="M11.9999 5.83789C8.59689 5.83789 5.83789 8.59689 5.83789 11.9999C5.83789 15.4029 8.59689 18.1619 11.9999 18.1619C15.4029 18.1619 18.1619 15.4029 18.1619 11.9999C18.1619 8.59689 15.4029 5.83789 11.9999 5.83789ZM11.9999 15.9999C9.79089 15.9999 7.99989 14.2089 7.99989 11.9999C7.99989 9.79089 9.79089 7.99989 11.9999 7.99989C14.2089 7.99989 15.9999 9.79089 15.9999 11.9999C15.9999 14.2089 14.2089 15.9999 11.9999 15.9999Z" fill="#3C4C7"></path>
                                    <path d="M18.4061 7.03405C19.2014 7.03405 19.8461 6.38934 19.8461 5.59405C19.8461 4.79876 19.2014 4.15405 18.4061 4.15405C17.6108 4.15405 16.9661 4.79876 16.9661 5.59405C16.9661 6.38934 17.6108 7.03405 18.4061 7.03405Z" fill="#3C4C71"></path>
                                </svg>
                            </a>
                            <a class="d-flex btn btn-outline-cinza p-0-50" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{-- route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Facebook--}}">
                                <svg class="w-1-25 h-1-25" width="24" height="24" viewBox="0 0 24 24" fill="#3C4C71" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35259V8.9971H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19968 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.2272 4.19968 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.2272 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.9971H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761832 23.1899 -0.0128484 22.2224 0.000161495" fill="#3C4C71"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex gap-1 align-items-center flex-wrap flex-column-reverse flex-lg-row">
                        <a href="{{ route_lang('blog') }}" class="btn btn-outline-primary w-max mt-1 mt-sm-0">Voltar</a>
                        <a href="{{ route_lang('blog') }}" class="btn btn-primary text-white w-max mt-1 mt-sm-0">Clique e saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 d-flex m-auto">
                    <div class="swiper blog-detalhe-swiper">
                        <div class="swiper-wrapper">
                            
                            @foreach (range(0,10) as $i)
                                <div class="swiper-slide" data-aos="zoom-in-left">
                                    <div class="ratio ratio-1x1">
                                        <a href="">
                                            <img class="w-100 h-100 object-fit-cover rounded-40-topp" src="{{ asset('front/images/backgrounds/blog.png') }}" alt="Logo {{ env('APP_NAME') }}">
                                        </a>    
                                    </div>
                                    <div class="bg-cinza-claro p-1 p-lg-2 rounded-40-bottomm text-lg-start text-center">
                                        <p class="p-16 p-400 text-dark">20/05/2002</p>
                                        <h2 class="text-dark h2 p-600">TEF: O que é, como funciona, quem está obrigado, onde adquirir</h2>
                                        <p class="p-16 p-400 text-dark pt-1">
                                            A Tecnologia é um segmento que cresce muito, mas ninguém cresce sozinho não é mesmo? E como nosso projeto de expansão visa atender a todo [...]
                                        </p>
                                        <a href="" class="text-decoration-none">
                                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Ver mais</button>
                                        </a>
                                    </div>
                                </div>
                        @endforeach
                           
                        </div>
                        <div class="swiper-button-prev rounded-circle bg-danger w-35 h-35 start-0 top-50">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 12L16 20L24 28" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>                                      
                        </div>
                        <div class="swiper-button-next rounded-circle bg-danger w-35 h-35 end-0 top-50">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 28L24 20L16 12" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </section>
</main>
@endsection
