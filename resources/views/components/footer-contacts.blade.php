@inject('contact', 'Ellite\\Contact\\Services\\ContactService')
{{--
<ul class="mb-0 list-unstyled p-0 row g-0-50 row-cols-1 row-cols-lg-2">

    @foreach ($contact->getAdresses() as $address)
        <li class="col address">
            <a @if ($address['link']) href="{{ $address['link'] }}" target="_blank" @endif>
                <svg class="w-1-25 h-1-25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                {{ $address['address'] }}
            </a>
        </li>
    @endforeach

    @foreach ($contact->getPhones() as $phone)
        <li class="col">
            <a href="tel:+{{ onlyNumbers($phone['phone_link']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1-25 h-1-25">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                {{ $phone['phone'] }}
            </a>
        </li>
    @endforeach

    @foreach ($contact->getWhatsapps() as $whatsapp)
        <li class="col">
            <a href="https://api.whatsapp.com/send?phone={{ onlyNumbers($whatsapp['phone_link']) }}">
                <svg id="whatsapp" class="w-1-25 h-1-25" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M207.15 47.8406C186.013 26.6531 157.864 15 127.95 15C66.2031 15 15.9585 65.2446 15.9585 126.991C15.9585 146.716 21.104 165.986 30.8906 182.987L15 241L74.3754 225.412C90.7201 234.341 109.133 239.033 127.899 239.033H127.95C189.646 239.033 241 188.788 241 127.042C241 97.1268 228.287 69.0281 207.15 47.8406V47.8406ZM127.95 220.166C111.201 220.166 94.8062 215.676 80.5299 207.201L77.15 205.183L41.9384 214.415L51.3214 180.061L49.1018 176.529C39.7692 161.698 34.8759 144.597 34.8759 126.991C34.8759 75.6871 76.6455 33.9174 128 33.9174C152.87 33.9174 176.227 43.6031 193.782 61.2089C211.337 78.8147 222.133 102.171 222.083 127.042C222.083 178.396 179.254 220.166 127.95 220.166V220.166ZM179.001 150.449C176.227 149.036 162.455 142.276 159.882 141.368C157.309 140.41 155.443 139.956 153.576 142.781C151.71 145.606 146.362 151.861 144.698 153.778C143.083 155.645 141.419 155.897 138.644 154.484C122.199 146.262 111.403 139.804 100.557 121.19C97.6817 116.246 103.433 116.599 108.78 105.904C109.688 104.038 109.234 102.424 108.528 101.011C107.821 99.5987 102.222 85.8268 99.9013 80.2272C97.6312 74.779 95.3107 75.5357 93.5955 75.4348C91.9812 75.3339 90.1147 75.3339 88.2482 75.3339C86.3817 75.3339 83.3549 76.0402 80.7821 78.8147C78.2094 81.6397 70.9955 88.3996 70.9955 102.171C70.9955 115.943 81.0344 129.261 82.3964 131.128C83.8089 132.994 102.121 161.244 130.22 173.402C147.977 181.07 154.938 181.725 163.817 180.414C169.215 179.607 180.363 173.654 182.684 167.096C185.004 160.538 185.004 154.938 184.298 153.778C183.642 152.517 181.776 151.811 179.001 150.449Z" />
                </svg>
                {{ $whatsapp['phone'] }}
            </a>
        </li>
    @endforeach

    @foreach ($contact->getEmails() as $email)
        <li class="col">
            <a href="mailto:{{ $email['email'] }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1-25 h-1-25">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                {{ $email['email'] }}
            </a>
        </li>
    @endforeach
</ul>--}}

<div>
    <h2 class="fs-20 fw-800 text-primary mb-0-50">Onde estamos</h2>
    <ul class="list-unstyled">
        <li class="mt-0-50">
            <a href="" target="_blank" class="fs-16 fw-400 text-decoration-none">Alice Cestari Mantovani, 202, <br> Samuara - Caxias do Sul - RS</a>
        </li>
    </ul>
<h2 class="fs-20 fw-800 text-primary mb-0-50 mt-3 mt-lg-1">Contatos</h2>
    <ul class="list-unstyled">
        <li class="mt-0-50">
            <a href="" target="_blank" class="fs-16 fw-400 text-decoration-none">
                sitevendas@stampinox.com.br
            </a>
        </li>
        <li class="mt-0-50">
            <a href="" target="_blank" class="fs-16 fw-400 text-decoration-none">(54) 3225-7907 | </a>
            <a href="" target="_blank" class="fs-16 fw-400 text-decoration-none">(54) 3225-3180</a>
        </li>
        <li class="mt-0-50">
            <a href="" target="_blank" class="fs-16 fw-400 text-decoration-none">(54) 9 9954-1579</a>
        </li>
    </ul>
    <ul class="list-unstyled d-flex d-lg-flex d-xl-none">
        <li class="">
            <a href="" title="Empresa" class="svg-footer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="#484848"/>
                    <path d="M11.9999 5.83789C8.59689 5.83789 5.83789 8.59689 5.83789 11.9999C5.83789 15.4029 8.59689 18.1619 11.9999 18.1619C15.4029 18.1619 18.1619 15.4029 18.1619 11.9999C18.1619 8.59689 15.4029 5.83789 11.9999 5.83789ZM11.9999 15.9999C9.79089 15.9999 7.99989 14.2089 7.99989 11.9999C7.99989 9.79089 9.79089 7.99989 11.9999 7.99989C14.2089 7.99989 15.9999 9.79089 15.9999 11.9999C15.9999 14.2089 14.2089 15.9999 11.9999 15.9999Z" fill="#484848"/>
                    <path d="M18.4061 7.03405C19.2014 7.03405 19.8461 6.38934 19.8461 5.59405C19.8461 4.79876 19.2014 4.15405 18.4061 4.15405C17.6108 4.15405 16.9661 4.79876 16.9661 5.59405C16.9661 6.38934 17.6108 7.03405 18.4061 7.03405Z" fill="#484848"/>
                </svg>                                
            </a>
        </li>
        <li class="ms-2">
            <a href="" title="Empresa" class="svg-footer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 12.073C24 18.062 19.606 23.027 13.87 23.928V15.565H16.659L17.19 12.105H13.87V9.86C13.87 8.913 14.334 7.991 15.82 7.991H17.329V5.045C17.329 5.045 15.959 4.811 14.65 4.811C11.916 4.811 10.13 6.468 10.13 9.467V12.104H7.091V15.564H10.13V23.927C4.395 23.025 0 18.061 0 12.073C0 5.446 5.373 0.072998 12 0.072998C18.627 0.072998 24 5.445 24 12.073Z" fill="#484848"/>
                </svg>                                                            
            </a>
        </li>
        <li class="ms-2">
            <a href="" title="Empresa" class="svg-footer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35259V8.9971H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19968 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.2272 4.19968 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.2272 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.9971H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761832 23.1899 -0.0128484 22.2224 0.000161495" fill="#484848"/>
                </svg>                                                                                           
            </a>
        </li>
    </ul>
</div>
