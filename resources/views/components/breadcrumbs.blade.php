@inject('site', 'App\\Services\\SiteService')
{{--
<section class="bg-light py-lg-2 py-1">
    <div class="container">
        <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-between">
            @if ($site->getBreadTitle())
                <h1 class="h3 mb-0">
                    {{ $site->getBreadTitle() }}
                </h1>
            @endif
            <ol class="breadcrumb">
                @foreach ($site->getBreadCrumbs() as $bread)
                    @if ($loop->last)
                        <li class="breadcrumb-item active" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</section>--}}
<section class="bg-primary overflow-hidden  mb-lg-0 position-relative">
    <div class="container container-start position-relative pt-lg-12 pb-lg-4 pt-6 pb-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-primary rounded-30">
                    <div class="position-relative pt-lg-6 z-index-3 pt-4">
                        @if ($site->getBreadTitle())
                            <h2 class="fs-55 fw-800 text-white w-100 text-lg-start text-center">
                                {{ $site->getBreadTitle() }}
                            </h2>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-lg-start justify-content-center align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active fs-16 fw-400 pe-lg-4 text-white" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="fs-16 fw-400 text-secondary text-decoration-none" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 position-absolute end-0 top-0 z-index-2 d-none d-lg-block" >
                <div class="ratio ratio-xxl-37 ratio-xl-21x9 ratio-lg-16x9" style="background: linear-gradient(90deg, #3C4C71 0%, rgba(60, 76, 113, 0) 100%);">
                    <img class="w-100 h-100 object-fit-cover z-index-background   " src="{{ asset("front/images/backgrounds/breadcrumb.png") }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <svg class="position-absolute end-0 bottom-0 z-index-3 d-none d-lg-block" width="556" height="268" viewBox="0 0 556 268" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="312.199" cy="312.199" rx="251.362" ry="352.789" transform="rotate(45 312.199 312.199)" stroke="#FCBE18" stroke-width="10"/>
    </svg>        
</section>
