<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="ps-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> Cevat Dündar Cad., Kat:1 N:1/1/10 Ostim Teknopark/Ankara</span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:+905077455187"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +90 507 745 51 87</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:info@physmart.com.tr"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> info@physmart.com.tr</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    @if($blogs->count() > 0)
                                        <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                            <a href="#">{{ __('physmart.blogs') }}</a>
                                        </li>
                                    @endif

                                    @if(\Illuminate\Support\Facades\Session::get('locale') === 'en')
                                            <li class="nav-item nav-item-borders py-2 pe-0 dropdown">
                                                <a class="nav-link" href="{{ route('lang', 'en') }}" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="/porto/img/blank.gif" class="flag flag-us" alt="English" /> English
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                                    <a class="dropdown-item" href="{{ route('lang', 'tr') }}">
                                                        <img src="/porto/img/blank.gif" class="flag flag-tr" alt="Türkçe" /> Türkçe</a>
                                                </div>
                                            </li>
                                    @else
                                            <li class="nav-item nav-item-borders py-2 pe-0 dropdown">
                                                <a class="nav-link" href="{{ route('lang', 'tr') }}" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="/porto/img/blank.gif" class="flag flag-tr" alt="Türkçe" /> Türkçe
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                                    <a class="dropdown-item" href="{{ route('lang', 'en') }}">
                                                        <img src="/porto/img/blank.gif" class="flag flag-us" alt="English" /> English</a>
                                                </div>
                                            </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img alt="Porto" width="180" height="50" data-sticky-width="82" data-sticky-height="40" src="{{ asset('images/phy/logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1" style="color:black">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">

                                {!! menu('physmart', 'layouts.menuPhy') !!}

                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>