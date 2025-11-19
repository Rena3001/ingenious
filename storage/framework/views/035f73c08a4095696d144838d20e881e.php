<header class="main-header">
        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title="" srcset="images/logo-white-big.png 2x"></a></div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="">
                                    <a href="index.html"><span>Home</span></a>
                                </li>
                                <li class="dropdown has-mega-menu">
                                    <a href="about-us.html"><span>About Us</span></a>
                                    <div class="mega-menu" data-width="200px">
                                        <div class="mega-menu-bar row">
                                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                                <h3>About</h3>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="services.html">Our Services</a></li>
                                                    <li><a href="process.html">Our Process</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="shop.html"><span>SHOP</span></a>
                                    <ul class="from-right">
                                        <li><a href="shop-single.html">Product Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                                <a href="blog-checkboard.html"><span>Blog</span></a>
                                                <ul class="from-right">
                                                    <li><a href="blog-post-image.html">Blog-detail</a></li>
                                                </ul>
                                </li>
                                <li><a href="contact.html">Contacts</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box clearfix">
                        <!-- Search Btn -->
                        <div class="search-box">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="outer-box">
                <!--Logo-->
                <div class="logo">
                    <a href="#" title="Sticky Logo"><img src="<?php echo e(asset('assets/images/sticky-logo.png')); ?>" alt="Sticky Logo"></a>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title="" srcset="<?php echo e(asset('assets/images/logo-white-big.png')); ?> 2x"></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title="" srcset="images/logo-white-big.png 2x"></a></div> 
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <button class="close-search"><span class="fa fa-times"></span></button>
                <form method="post" action="blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

</header><?php /**PATH C:\laragon\www\ingenious\resources\views/components/front-header-component.blade.php ENDPATH**/ ?>