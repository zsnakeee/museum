<!-- Start Header Style -->
<header id="header" class="htc-header">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area d-none d-md-block sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo/pharaoh.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-lg-8 col-md-7">
                    <nav class="mainmenu__nav">
                        <ul class="main__menu">
                            <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                            <li><a href="{{ route('gallery') }}">{{ __('Gallery') }}</a></li>
                            <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End MAinmenu Ares -->

                <div class="col-lg-2 col-md-1">
                    <nav class="mainmenu__nav">
                        <ul class="main__menu">
                            <li class="drop"><a href="">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                                <ul class="dropdown">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if($localeCode != LaravelLocalization::getCurrentLocale())
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                   style="text-transform: capitalize">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
    <!-- Mobile-menu-area start -->
    <div class="mobile-menu-area d-block d-md-none">
        <div class="fluid-container mobile-menu-container">
            <div class="mobile-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo/pharaoh.png') }}" alt="Mobile logo">
                </a>
            </div>
            <div class="mobile-menu clearfix">
                <nav id="mobile_dropdown">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile-menu-area End -->
</header>
<!-- End Header Style -->
