<header class="main-header">

    @php
    use App\Models\Setting;
    use App\Models\Translation;

    $settings = Setting::first();
    $locale = app()->getLocale();

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

                            <li class="dropdown has-mega-menu ">
                                <a href="{{ route('home', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_home', $locale) }}
                                </a>
                                <div class="mega-menu mega-menu-home" data-width="250px">
                                    <div class="mega-menu-bar row">
                                        <div class="column col-lg-12">

                                            <ul>
                                                <li>
                                                    <a href="{{ route('home.appliances', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('home_appliances', $locale) }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('security.overview', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('security_overview', $locale) }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('electrical.equipment', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('electrical_equipment', $locale) }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('consumer.electronics', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('consumer_electronics', $locale) }}
                                                    </a>
                                                </li>
                                                <li class="tech-dropdown">
                                                    <a href="{{ route('technical.services', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('technical_services', $locale) }}
                                                    </a>

                                                    <ul class="tech-dropdown-menu">
                                                        <li>
                                                            <a href="{{ route('technical.faq', ['locale' => $locale]) }}">
                                                                {{ Translation::getValue('technical_faq', $locale) }}
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('technical.guidesandtutor', ['locale' => $locale]) }}">
                                                                {{ Translation::getValue('technical_guides_tutorials', $locale) }}
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('warrantyandservices', ['locale' => $locale]) }}">
                                                                {{ Translation::getValue('technical_warranty_service', $locale) }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown has-mega-menu">
                                <a href="{{ route('products', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_shop', $locale) }}
                                </a>

                                <div class="mega-menu mega-menu-shop" data-width="240px">
                                    <div class="mega-menu-bar row">
                                        <div class="column col-lg-12">
                                            <ul>
                                                @foreach($categories as $category)
                                                <li>
                                                    <a href="{{ route('products.byCategory', [
                                                           'locale' => $locale,
    'category' => $category
                                                    ]) }}">
                                                        {{ $category->{'name_'.$locale} ?? $category->name_az }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown has-mega-menu ">
                                <a href="{{ route('about', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_about', $locale) }}
                                </a>

                                <div class="mega-menu mega-menu-about" data-width="200px">
                                    <div class="mega-menu-bar row">
                                        <div class="column col-lg-12">
                                            <ul>
                                                <li><a href="{{ route('about', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('menu_about', $locale) }}
                                                    </a></li>

                                                <li><a href="{{ route('partnership', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('menu_partnership', $locale) }}
                                                    </a></li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>



                            <li class="dropdown has-mega-menu">
                                <a href="{{ route('news', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_news', $locale) }}
                                </a>
                                <div class="mega-menu mega-menu-news" data-width="200px">
                                    <div class="mega-menu-bar row">
                                        <div class="column col-lg-12">
                                            <ul>
                                                <li><a href="{{ route('announcements', ['locale' => $locale]) }}">
                                                        {{ Translation::getValue('menu_announcements', $locale) }}
                                                    </a></li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="{{ route('contact', ['locale' => $locale]) }}">
                                    {{ Translation::getValue('menu_contact', $locale) }}
                                </a>
                            </li>

                        </ul>

                    </div>
                </nav>

                <!-- Search + Language -->
                <div class="outer-box clearfix">

                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn" data-target=".search-popup">
                            <i class="fa fa-search" style="color: #1b5e8a;"></i>
                        </button>
                    </div>
                    <!-- <div class="cart-btn">
                            <a href="shopping-cart.html"><i class="icon flaticon-shopping-cart-empty-side-view"></i> <span class="count">2</span></a>

                            <div class="shopping-cart">
                                <ul class="shopping-cart-items">
                                    <li class="cart-item">
                                        <img src="images/resource/item-thumb-1.jpg" alt="#" class="thumb" />
                                        <span class="item-name">Night Security Cam 2Z1</span>
                                        <span class="item-quantity">1 x <span class="item-amount">$84.00</span></span>
                                        <a href="shop-single.html" class="product-detail"></a>
                                        <button class="remove-item"><span class="fa fa-times"></span></button>
                                    </li>
                                </ul>

                                <div class="cart-footer">
                                    <div class="shopping-cart-total"><strong>Subtotal:</strong> $97.00</div>
                                    <a href="cart.html" class="theme-btn">View Cart</a>
                                    <a href="checkout.html" class="theme-btn">Checkout</a>
                                </div>
                            </div> 
                        </div> -->

                    <!-- Language Switcher -->
                    <div class="language-switcher-select">
                        @php
                        $currentLang = $languages->firstWhere('code', app()->getLocale());
                        @endphp
                        <img src="{{ $currentLang->flag }}" class="lang-flag">

                        <select id="langSwitcher" class="lang-dropdown"
                            onchange="location.href=this.value">
                            @foreach($languages as $lang)

                            <option value="/{{ $lang->code }}{{ $cleanPath }}"

                                {{ app()->getLocale() === $lang->code ? 'selected' : '' }}>
                                <img src="{{ $currentLang->flag }}" class="lang-flag">

                                {{ $lang->label }}
                            </option>
                            @endforeach
                        </select>
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

            <form method="GET" action="{{ url()->current() }}">
                <div class="form-group">
                    <input type="search" name="search" value="{{ request('search') }}" placeholder="{{ Translation::getValue('search_placeholder', $locale) }}" required="">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</header>