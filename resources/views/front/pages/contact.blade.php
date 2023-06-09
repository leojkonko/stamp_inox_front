@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato">
        <section class="bg-light py-2 py-lg-4">
            <div class="container">
                <ul class="mb-0 list-unstyled p-0 row g-1 contacts" data-aos="zoom-out-down">
                        <li class="col-lg-4 address">
                            <div class="card text-primary">
                                <svg width="3em" class="h-100 flex-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="h5 mb-0 fw-bold">Visite-nos</span>
                                        <a href="" target="_blank"  class="text-muted">Visite-nos
                                            Alice Cestari Mantovani, 202, <br class="d-none d-lg-block"> Samuara - Caxias do Sul - RS</a>
                                </div>
                            </div>
                        </li>

                        <li class="col-lg-4">
                            <div class="card text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="3em" class="h-100 flex-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="h5 mb-0 fw-bold">Envie-nos um e-mail</span>
                                        <a href="mailto:" class="text-muted">sitevendas@stampinox.com.br</a>
                                </div>
                            </div>
                        </li>

                        <li class="col-lg-4">
                            <div class="card text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="3em" class="h-100 flex-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="h5 mb-0 fw-bold">Ligue para a gente</span>
                                        <div class="d-flex">
                                            <a class="text-muted" href="tel:"> (54) 3225-7907 | </a>
                                        <a class="text-muted" href="tel:"> (54) 3225-3180 </a>  
                                        </div>
                                        <a class="text-muted" href="tel:"> (54) 9 9954-1579 </a>
                                </div>
                            </div>
                        </li>

                </ul>

            </div>
        </section>

        <section class="py-lg-4 py-2" data-aos="flip-right">
            <div class="container position-relative">
                <div class="row ">
                    <div class="col-lg-6 col-xl-6 col-xxl-7 g-0" style="display: grid;">
                        <div class="formulario rounded-30-left-lg rounded-30 p-2 py-xl-4 px-xl-4 px-xxl-6 bg-secondary pe-xxl-6">
                            <h2 class="fs-55 mb-1 fw-800 text-primary fw-bold text-lg-start text-center">Entre em contato</h2>
                            <livewire:form-contact />
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-5 bg-secondary g-0 rounded-30-right overflow-hidden d-none d-lg-block">
                        <div class="ratio ratio-1x1 h-100 ms-auto" style="">
                            <img class="w-100 h-100 object-fit-cover rounded-30-right" src="{{ asset("front/images/backgrounds/contato.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="pt-2 mt-0 overflow-hidden" >
        <iframe class="overflow-hidden" style="margin-bottom: -15px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.3383153009327!2d-51.25207512291456!3d-29.18416499192187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ea318d7be41c1%3A0x1412b9f04ca6b16f!2sStamp%20Inox!5e0!3m2!1spt-BR!2sbr!4v1686183778728!5m2!1spt-BR!2sbr" width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    </main>
@endsection
