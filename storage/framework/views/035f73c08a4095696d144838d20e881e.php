<header class="main-header">

    <?php
    use App\Models\Setting;
    use App\Models\Translation;

    $settings = Setting::first();
    $locale = app()->getLocale();

    // Məs: "ru/about" → ["ru", "about"]
    $segments = request()->segments();

    // Locale-dən sonrakı hissə
    $cleanPath = isset($segments[1]) ? '/' . implode('/', array_slice($segments, 1)) : '/';
    ?>


    <!-- Main box -->
    <div class="main-box">
        <div class="menu-box">

            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                    <img src="<?php echo e(asset('storage/' . $settings->logo)); ?>"
                        alt="logo"
                        srcset="<?php echo e(asset('storage/' . $settings->logo_white)); ?> 2x">
                </a>
            </div>

            <!-- Navigation -->
            <div class="nav-outer">

                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navigation clearfix">

                            <li>
                                <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_home', $locale)); ?>

                                </a>
                            </li>

                            <li class="dropdown has-mega-menu">
                                <a href="<?php echo e(route('about', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_about', $locale)); ?>

                                </a>

                                <div class="mega-menu" data-width="200px">
                                    <div class="mega-menu-bar row">
                                        <div class="column col-lg-12">

                                            <h3><?php echo e(Translation::getValue('menu_about', $locale)); ?></h3>

                                            <ul>
                                                <li><a href="<?php echo e(route('about', ['locale' => $locale])); ?>">
                                                        <?php echo e(Translation::getValue('menu_about', $locale)); ?>

                                                    </a></li>

                                                <li><a href="<?php echo e(route('services', ['locale' => $locale])); ?>">
                                                        <?php echo e(Translation::getValue('menu_services', $locale)); ?>

                                                    </a></li>

                                                <li><a href="<?php echo e(route('process', ['locale' => $locale])); ?>">
                                                        <?php echo e(Translation::getValue('menu_process', $locale)); ?>

                                                    </a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="<?php echo e(route('products', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_shop', $locale)); ?>

                                </a></li>

                            <li><a href="<?php echo e(route('blog', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_blog', $locale)); ?>

                                </a></li>

                            <li><a href="<?php echo e(route('contact', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_contact', $locale)); ?>

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
                    <!-- LANGUAGE SWITCHER -->
                    <div class="language-switcher">
                        <ul class="lang-list">

                            <li class="<?php echo e($locale == 'az' ? 'active' : ''); ?>">
                                <a href="/az<?php echo e($cleanPath); ?>">AZ</a>
                            </li>

                            <li class="<?php echo e($locale == 'en' ? 'active' : ''); ?>">
                                <a href="/en<?php echo e($cleanPath); ?>">EN</a>
                            </li>

                            <li class="<?php echo e($locale == 'ru' ? 'active' : ''); ?>">
                                <a href="/ru<?php echo e($cleanPath); ?>">RU</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <button class="close-search"><span class="fa fa-times"></span></button>

            <form method="GET" action="<?php echo e(route('products', ['locale' => $locale])); ?>">
                <div class="form-group">
                    <input type="search" name="search" placeholder="<?php echo e(Translation::getValue('search_placeholder', $locale)); ?>" required="">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</header><?php /**PATH C:\laragon\www\ingenious\resources\views/components/front-header-component.blade.php ENDPATH**/ ?>