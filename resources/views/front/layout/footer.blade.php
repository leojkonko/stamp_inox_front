<footer id="footer" class="overflow-hidden bg-secondary border-top">
    <div class="container">
        <div class="row gy-2 gy-lg-0 text-center text-lg-start align-items-center justify-content-between py-2 py-lg-4">
            <div class="col-lg-3 d-flex justify-content-center" data-aos="zoom-in-up">
                <a href="{{ route_lang('home') }}" class="d-block logo m-auto m-lg-0">
                    <img class="object-fit-cover w-100 h-100" src="{{ asset('front/images/logos/logo-restrita-auth.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
            <div class="col-lg-1" data-aos="zoom-in-right">
                <h2 class="fs-20 fw-800 text-primary mb-1">Menu</h2>
                <ul class="list-unstyled">
                    <li class="mt-0-50">
                        <a href="{{ route_lang('company') }}" title="Empresa" class="@if (Route::is('company')) active @endif fs-16 fw-400 text-decoration-none">Empresa</a>
                    </li>
                    <li class="mt-0-50">
                        <a href="" title="Home" class="@if (Route::is('products')) active @endif fs-16 fw-400 text-decoration-none">Produtos      
                        </a>
                    </li>
                    <li class="mt-0-50">
                        <a href="{{ route_lang('solutions') }}" title="solutions" class="@if (Route::is('solutions')) active @endif fs-16 fw-400 text-decoration-none">Serviços</a>
                    </li>
                    <li class="mt-0-50">
                        <a href="{{ route_lang('blog') }}" title="Blog" class="@if (Route::is('blog')) active @endif fs-16 fw-400 text-decoration-none">Blog</a>
                    </li>
                    <li class="mt-0-50">
                        <a href="{{ route_lang('contact') }}" title="Contato" class="@if (Route::is('contact')) active @endif fs-16 fw-400 text-decoration-none">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 d-flex justify-content-center" data-aos="zoom-in-right">
                <x-footer-contacts />
            </div>
            <div class="col-lg-4 col-xl-3" data-aos="zoom-in-left">
                <x-footer-newsletter />
            </div>
            <div class="col-lg-1 d-flex justify-content-center d-flex d-lg-none d-xl-flex" data-aos="zoom-in-left">
                <ul class="list-unstyled d-flex d-lg-block gap-2">
                    <li class="mt-2">
                        <a href="" title="Empresa" class="svg-footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="#484848"/>
                                <path d="M11.9999 5.83789C8.59689 5.83789 5.83789 8.59689 5.83789 11.9999C5.83789 15.4029 8.59689 18.1619 11.9999 18.1619C15.4029 18.1619 18.1619 15.4029 18.1619 11.9999C18.1619 8.59689 15.4029 5.83789 11.9999 5.83789ZM11.9999 15.9999C9.79089 15.9999 7.99989 14.2089 7.99989 11.9999C7.99989 9.79089 9.79089 7.99989 11.9999 7.99989C14.2089 7.99989 15.9999 9.79089 15.9999 11.9999C15.9999 14.2089 14.2089 15.9999 11.9999 15.9999Z" fill="#484848"/>
                                <path d="M18.4061 7.03405C19.2014 7.03405 19.8461 6.38934 19.8461 5.59405C19.8461 4.79876 19.2014 4.15405 18.4061 4.15405C17.6108 4.15405 16.9661 4.79876 16.9661 5.59405C16.9661 6.38934 17.6108 7.03405 18.4061 7.03405Z" fill="#484848"/>
                            </svg>                                
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="" title="Empresa" class="svg-footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 12.073C24 18.062 19.606 23.027 13.87 23.928V15.565H16.659L17.19 12.105H13.87V9.86C13.87 8.913 14.334 7.991 15.82 7.991H17.329V5.045C17.329 5.045 15.959 4.811 14.65 4.811C11.916 4.811 10.13 6.468 10.13 9.467V12.104H7.091V15.564H10.13V23.927C4.395 23.025 0 18.061 0 12.073C0 5.446 5.373 0.072998 12 0.072998C18.627 0.072998 24 5.445 24 12.073Z" fill="#484848"/>
                            </svg>                                                            
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="" title="Empresa" class="svg-footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35259V8.9971H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19968 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.2272 4.19968 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.2272 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.9971H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761832 23.1899 -0.0128484 22.2224 0.000161495" fill="#484848"/>
                            </svg>                                                                                           
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="py-1 copyright position-relative" >
        <svg class="position-absolute start-0 top-0 d-none d-lg-block" width="1428" height="60" viewBox="0 0 1428 60" fill="none" xmlns="http://www.w3.org/2000/svg" data-aos="zoom-in-up">
            <path d="M0 0H1368C1401.14 0 1428 26.8629 1428 60H0V0Z" fill="#FCBE18"/>
        </svg>            
        <div class="container position-relative z-index-1" >
            <div class="d-flex flex-column flex-lg-row text-center text-lg-start gap-1 justify-content-center align-items-center justify-content-sm-between" >
                <small class="text-muted small">Copyright &copy{{ date('Y') }} {{ env('APP_NAME') }}. Todos os direitos reservados. CNPJ 00.000.000/0000-00</small>
                <div class="col-12 col-md-6 col-lg-auto my-1 my-lg-0" >
                    @inject('site', 'App\\Services\\SiteService')
                    @if ($site->hasPrivacy())
                        <a href="{{ route_lang('privacy') }}" class="small" title="Política de privacidade">Política de privacidade</a>
                    @elseif ($site->useLgpd())
                        <button onClick="ElliteLgpdApi.showModal()" class="btn btn-link p-0">Gerenciar preferências de cookies</button>
                    @endif
                </div>
                <div class="col-12  col-md-6 col-lg-auto d-flex justify-content-center justify-content-lg-end">
                    <a href="https://www.ellitedigital.com.br" target="_blank">
                        <img class="" src="{{ asset('front/images/logos/ellite.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Whatsapp fixed button --}}
<x-whatsapp-fixed />

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Swiper.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
{{-- GSAP (caso necessário) --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script> --}}

{{-- Front js --}}
@vite(['resources/front/js/vendors/bootstrap.bundle.min.js', 'resources/front/js/main.js'])

@livewireScripts
<script>
    AOS.init();
  </script>
</body>

</html>
