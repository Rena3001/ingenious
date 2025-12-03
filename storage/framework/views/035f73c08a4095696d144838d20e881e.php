<header class="main-header">

    <?php
    use App\Models\Setting;
    use App\Models\Translation;

    $settings = Setting::first();
    $locale = app()->getLocale();
    $languages = ['az' => 'AZ', 'en' => 'EN', 'ru' => 'RU', 'de' => 'DE', 'es' => 'ES'];
    $segments = request()->segments();
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
                            <li><a href="<?php echo e(route('products', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_shop', $locale)); ?>

                                </a></li>

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



                            <li><a href="<?php echo e(route('blog', ['locale' => $locale])); ?>">
                                    <?php echo e(Translation::getValue('menu_news', $locale)); ?>

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
                        <select id="langSwitcher" class="lang-dropdown">
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="/<?php echo e($code); ?><?php echo e($cleanPath); ?>" <?php echo e($locale == $code ? 'selected' : ''); ?>>
                                <?php echo e($label); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo">
            <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                <img src="<?php echo e(asset('storage/' . $settings->logo)); ?>" alt="" srcset="<?php echo e(asset('storage/' . $settings->logo)); ?>">
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
                <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                    <img src="<?php echo e(asset('storage/' . $settings->logo)); ?>" alt="">
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