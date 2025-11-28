<header class="main-header">

    @php
        use App\Models\Setting;
        use App\Models\Translation;

        $settings = Setting::first();
        $locale = app()->getLocale();
        $segments = request()->segments();
        $cleanPath = isset($segments[1]) ? '/' . implode('/', array_slice($segments, 1)) : '/';
    @endphp

    <!-- Main box -->
    <div class="main-box">
        <div class="menu-box">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home', ['locale' => $locale]) }}">
                    <img src="{{ asset('storage/' . $settings->logo) }}"
                         alt="logo"
                         srcset="{{ asset('storage/' . $settings->logo_white) }} 2x">
                </a>
            </div>

            <!-- Navigation -->
            <div class="nav-outer">

                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navigation clearfix">

                            <li>
                                <a href="{{ route('home', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_home', $locale) }}
                                </a>
                            </li>

                            <li class="dropdown has-mega-menu">
                                <a href="{{ route('about', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_about', $locale) }}
                                </a>

                                <div class="mega-menu" data-width="200px">
                                    <div class="mega-menu-bar row">
                                        <div class="column col-lg-12">
                                            <h3>{{ Translation::getValue('menu_about', $locale) }}</h3>
                                            <ul>
                                                <li><a href="{{ route('about', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('menu_about', $locale) }}
                                                    </a></li>

                                                <li><a href="{{ route('services', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('menu_services', $locale) }}
                                                    </a></li>

                                                <li><a href="{{ route('process', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('menu_process', $locale) }}
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="{{ route('products', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_shop', $locale) }}
                                </a></li>

                            <li><a href="{{ route('blog', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_blog', $locale) }}
                                </a></li>

                            <li><a href="{{ route('contact', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_contact', $locale) }}
                                </a></li>

                        </ul>

                    </div>
                </nav>

                <!-- Search + Language -->
                <div class="outer-box clearfix">

                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn" data-target=".search-popup">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>

                    <!-- Language Switcher -->
                    <div class="language-switcher">
                        <ul class="lang-list">

                            <li class="{{ $locale == 'az' ? 'active' : '' }}">
                                <a href="/az{{ $cleanPath }}">AZ</a>
                            </li>

                            <li class="{{ $locale == 'en' ? 'active' : '' }}">
                                <a href="/en{{ $cleanPath }}">EN</a>
                            </li>

                            <li class="{{ $locale == 'ru' ? 'active' : '' }}">
                                <a href="/ru{{ $cleanPath }}">RU</a>
                            </li>

                            <li class="{{ $locale == 'de' ? 'active' : '' }}">
                                <a href="/de{{ $cleanPath }}">DE</a>
                            </li>

                            <li class="{{ $locale == 'es' ? 'active' : '' }}">
                                <a href="/es{{ $cleanPath }}">ES</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo">
            <a href="{{ route('home', ['locale' => $locale]) }}">
                <img src="{{ asset('storage/' . $settings->logo) }}" alt="" srcset="{{ asset('storage/' . $settings->logo) }}">
            </a>
        </div>

        <div class="nav-outer clearfix">
            <!-- Menu JS auto injection -->
        </div>
    </div>

    <!-- Mobile Menu -->
    <!-- Mobile Menu -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><span class="fa fa-times"></span></div>

    <nav class="menu-box">

        <div class="nav-logo">
            <a href="{{ route('home', ['locale' => $locale]) }}">
                <img src="{{ asset('storage/' . $settings->logo) }}" alt="">
            </a>
        </div>

        <!-- JS automatically injects menu here -->
        <div class="menu-outer"></div>

    </nav>
</div>


    <!-- Search Popup -->
    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <button class="close-search"><span class="fa fa-times"></span></button>

            <form method="GET" action="{{ route('products', ['locale' => $locale]) }}">
                <div class="form-group">
                    <input type="search" name="search" placeholder="{{ Translation::getValue('search_placeholder', $locale) }}" required="">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</header>
