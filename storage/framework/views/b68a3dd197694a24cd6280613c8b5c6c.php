<?php $__env->startSection('page_title', 'Ingenious'); ?>

<?php $__env->startSection('content'); ?>


<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $title = $slider->getTitle($locale);
                        $description = $slider->getDescription($locale);
                        $button_text = $slider->getButtonText($locale);
                    ?>

                    <li data-index="rs-<?php echo e($loop->iteration); ?>" data-transition="zoomout" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off"
                        data-easein="default" data-easeout="default"
                        data-masterspeed="850" data-thumb=""
                        data-delay="5999" data-rotate="0"
                        data-saveperformance="off"
                        data-title="Slide">

                        <!-- 🖼️ MAIN IMAGE (admin paneldən gəlir) -->
                        <img src="<?php echo e(asset('storage/' . $slider->image)); ?>" 
                             alt="<?php echo e($title ?? ''); ?>" 
                             title="Home" 
                             data-bgposition="center center" 
                             data-bgfit="cover" 
                             data-bgrepeat="no-repeat" 
                             class="rev-slidebg" 
                             data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="center" data-hoffset=""
                            data-y="center" data-voffset=""
                            data-width="['full-proportional','full-proportional','full-proportional','full-proportional']"
                            data-height="['full-proportional','full-proportional','full-proportional','full-proportional']"
                            data-type="image"
                            data-basealign="slide"
                            data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeOut"},
                                          {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                            style="z-index:5;
                                   background:linear-gradient(135deg, rgba(72,70,89,0.8) 0%, rgba(72,70,89,0.77) 16%, rgba(0,137,45,0.63) 85%, rgba(0,137,45,0.6) 100%);">
                            <img src="<?php echo e(asset('assets/images/main-slider/pattern/1.png')); ?>" alt="" data-ww="full-proportional" data-hh="full-proportional" width="1920" height="1080" data-no-retina>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <?php if($title): ?>
                        <div class="tp-caption tp-resizeme"
                            data-x="center" data-y="center" data-voffset="-100"
                            data-width="['623']" data-height="['auto']"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;",
                                           "to":"o:1;","ease":"Power2.easeInOut"},
                                           {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                            style="z-index:6; min-width:623px; max-width:623px; 
                                   font-size:72px; line-height:72px; 
                                   font-weight:800; color:#fff; 
                                   font-family:Catamaran; text-transform:uppercase;">
                            <?php echo e($title); ?>

                        </div>
                        <?php endif; ?>

                        <!-- LAYER NR. 3 -->
                        <?php if($description): ?>
                        <div class="tp-caption tp-resizeme"
                            data-x="center" data-y="center" data-voffset="30"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;",
                                           "to":"o:1;","ease":"Power2.easeInOut"},
                                           {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                            style="z-index:7; font-size:24px; line-height:40px; 
                                   font-weight:400; color:#fff; font-family:Catamaran;">
                            <?php echo nl2br(e($description)); ?>

                        </div>
                        <?php endif; ?>

                        <!-- LAYER NR. 4 -->
                        <?php if($slider->button_url && $button_text): ?>
                        <a href="<?php echo e($slider->button_url); ?>" style="color:#fff; text-decoration:none;"><div class="tp-caption rev-btn tp-resizeme"
                            data-x="center" data-y="center" data-voffset="130"
                            data-type="button"
                            data-responsive_offset="on"
                            data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;",
                                           "to":"o:1;","ease":"Power2.easeInOut"},
                                           {"delay":"wait","speed":300,"frame":"999","ease":"nothing"},
                                           {"frame":"hover","speed":"300","ease":"Linear.easeNone",
                                           "to":"o:1;rX:0;rY:0;rZ:0;z:0;",
                                           "style":"c:rgba(255,108,58,1);bg:rgba(255,255,255,1);"}]'
                            style="z-index:8; font-size:16px; font-weight:700; 
                                   color:#fff; font-family:Catamaran;
                                   background-color:rgba(255,108,58,1);
                                   border-radius:30px; cursor:pointer;">
                               <?php echo e(\App\Models\Translation::getValue($slider->button_key, app()->getLocale())); ?>

                            </div>
                        </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>

<!--End Main Slider-->

<!-- About Section -->
<section class="about-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay"></div>
        <div class="cws-image-bg" style="background-image: url(images/background/1.jpg)"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="sec-title">
                    <h2>SMART HOME</h2>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.</div>
                </div>

                <div class="row">
                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <svg class="icon" viewBox="0 0 30 30">
                                    <path d="M21.8,8.2h-3.4c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h2.7v17.8H8.9V9.6h2.7c0.4,0,0.7-0.3,0.7-0.7 S12,8.2,11.6,8.2H8.2c-0.4,0-0.7,0.3-0.7,0.7v19.2c0,0.4,0.3,0.7,0.7,0.7h13.6c0.4,0,0.7-0.3,0.7-0.7V8.9 C22.5,8.5,22.2,8.2,21.8,8.2z M16.7,4.7h-3.4c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h3.4c0.4,0,0.7-0.3,0.7-0.7 C17.4,5,17.1,4.7,16.7,4.7z M11.6,2.6h6.8c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7h-6.8c-0.4,0-0.7,0.3-0.7,0.7S11.2,2.6,11.6,2.6 z M15.7,8.9c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7C15.4,9.6,15.7,9.3,15.7,8.9z M10.9,17.6 c0,2.3,1.8,4.2,4.1,4.2c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2C12.8,13.4,10.9,15.3,10.9,17.6z M15,14.8c1.5,0,2.7,1.3,2.7,2.8 s-1.2,2.8-2.7,2.8s-2.7-1.3-2.7-2.8C12.3,16.1,13.5,14.8,15,14.8z"></path>
                                </svg>
                            </div>
                            <h5>Managed <br>Centrally</h5>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <svg class="icon 1.svg" viewBox="0 0 30 30">
                                    <path d="M24.2,3.5h-18c-2,0-3.6,1.6-3.6,3.6v13.5c0,2,1.6,3.6,3.6,3.6h8.3V27h-3.6c-0.4,0-0.7,0.3-0.7,0.7 c0,0.4,0.3,0.7,0.7,0.7h8.5c0.4,0,0.7-0.3,0.7-0.7c0-0.4-0.3-0.7-0.7-0.7h-3.6v-2.9h8.4c2,0,3.6-1.6,3.6-3.6V7.1 C27.8,5.1,26.2,3.5,24.2,3.5z M26.5,20.5c0,1.2-1,2.3-2.3,2.3h-18c-1.3,0-2.3-1-2.3-2.3v-0.7h22.6C26.5,19.8,26.5,20.5,26.5,20.5z M26.5,18.5H3.9V7.1c0-1.2,1-2.3,2.3-2.3h18c1.3,0,2.3,1,2.3,2.3V18.5z M15.2,8.2c-2.1,0-4.2,0.8-5.7,2.3c-0.3,0.3-0.3,0.7,0,1 c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2c1.3-1.2,2.9-1.9,4.7-1.9s3.5,0.7,4.7,1.9c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2 c0.2-0.2,0.2-0.7,0-0.9C19.4,9,17.4,8.2,15.2,8.2z M15.2,11.2c-1.1,0-2.1,0.4-2.9,1.2c-0.1,0.1-0.2,0.3-0.2,0.5s0.1,0.4,0.2,0.5 c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2c0.5-0.5,1.2-0.8,2-0.8c0.7,0,1.4,0.3,2,0.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2 c0.1-0.1,0.2-0.3,0.2-0.5s-0.1-0.4-0.2-0.5C17.4,11.7,16.3,11.2,15.2,11.2z M15.2,14.3c-0.5,0-0.9,0.4-0.9,0.9 c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.3,0.6,0.3c0.5,0,0.9-0.4,0.9-0.9C16,14.7,15.7,14.3,15.2,14.3z"></path>
                                </svg>
                            </div>
                            <h5>Wirelessly <br>Connects</h5>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <svg class="icon 1.svg" viewBox="0 0 30 30">
                                    <path d="M23.7,3.6c0-1.4-1.2-2.6-2.6-2.6H9.4C7.9,1,6.8,2.2,6.8,3.6v22.8C6.8,27.8,8,29,9.4,29h11.7 c1.4,0,2.6-1.2,2.6-2.6L23.7,3.6z M8,3.6c0-0.7,0.6-1.3,1.4-1.3h11.7c0.7,0,1.4,0.6,1.4,1.3v2.3H8V3.6z M22.5,26.4 c0,0.7-0.6,1.4-1.4,1.4H9.4c-0.8,0-1.4-0.6-1.4-1.4v-1.5h14.5V26.4z M8,23.6V7.1h14.5v16.5H8z M16.5,3.5h-2.6 c-0.3,0-0.6,0.3-0.6,0.6s0.3,0.6,0.6,0.6h2.6c0.3,0,0.6-0.3,0.6-0.6S16.9,3.5,16.5,3.5z M17.1,10.5h-3.7c-1.6,0-2.9,1.3-2.9,2.8 V17c0,1.6,1.3,2.8,2.9,2.8h0.2c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6h-0.2c-0.9,0-1.6-0.7-1.6-1.6v-3.7 c0-0.9,0.7-1.6,1.6-1.6h3.7c0.9,0,1.6,0.7,1.6,1.6V17c0,0.9-0.7,1.6-1.6,1.6h-0.4c-0.3,0-0.6,0.3-0.6,0.6c0,0.3,0.3,0.6,0.6,0.6 h0.4c1.6,0,2.9-1.3,2.9-2.8v-3.7C19.9,11.8,18.7,10.5,17.1,10.5z M17.1,16.4c0.1-0.1,0.2-0.3,0.2-0.4c0-0.2-0.1-0.3-0.2-0.4 l-1.4-1.4c-0.2-0.2-0.6-0.2-0.9,0l-1.4,1.4c-0.1,0.1-0.2,0.3-0.2,0.4c0,0.2,0.1,0.3,0.2,0.4c0.2,0.2,0.6,0.2,0.9,0l0.3-0.3v4.1 c0,0.3,0.3,0.6,0.6,0.6s0.6-0.3,0.6-0.6V16l0.4,0.4C16.4,16.6,16.8,16.6,17.1,16.4z"></path>
                                </svg>
                            </div>
                            <h5>Smart <br>Applications</h5>
                        </div>
                    </div>
                </div>

                <!-- Btn Box -->
                <div class="btn-box">
                    <a href="#" class="theme-btn large btn-style-one">Request A Free Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<!-- Services Section -->
<section class="services-section">
    <div class="cws-background-image" style="background-image: url(images/background/3.jpg)"></div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>INTELLIGENT AUTOMATION</h2>
        </div>

        <div class="row">
            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="icon-box"><span class="icon flaticon-alarm"></span></div>
                        <figure class="image"><img src="images/resource/service-1.jpg" alt=""></figure>
                        <div class="overlay">
                            <div class="desc">Et quam neque ultricies. Ornare donec quis sociis wisi ut nunc, vestibulum diam cras.</div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Movement</h4>
                        <div class="text">Ligula mus mi, vitae pharetra urna. Nunc consectetuer fermentum proin pede metus faucibus magna eget.</div>
                        <div class="btn-box"><a href="#" class="theme-btn btn-style-two">Explore</a></div>
                    </div>
                </div>
            </div>


            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="icon-box"><span class="icon flaticon-plug-2"></span></div>
                        <figure class="image"><img src="images/resource/service-2.jpg" alt=""></figure>
                        <div class="overlay">
                            <div class="desc">Et quam neque ultricies. Ornare donec quis sociis wisi ut nunc, vestibulum diam cras.</div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Temperature</h4>
                        <div class="text">Ligula mus mi, vitae pharetra urna. Nunc consectetuer fermentum proin pede metus faucibus magna eget.</div>
                        <div class="btn-box"><a href="#" class="theme-btn btn-style-two">Explore</a></div>
                    </div>
                </div>
            </div>


            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="icon-box"><span class="icon flaticon-unlocked"></span></div>
                        <figure class="image"><img src="images/resource/service-3.jpg" alt=""></figure>
                        <div class="overlay">
                            <div class="desc">Et quam neque ultricies. Ornare donec quis sociis wisi ut nunc, vestibulum diam cras.</div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Door Contacts</h4>
                        <div class="text">Ligula mus mi, vitae pharetra urna. Nunc consectetuer fermentum proin pede metus faucibus magna eget.</div>
                        <div class="btn-box"><a href="#" class="theme-btn btn-style-two">Explore</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Services Section -->

<!-- How to Use -->
<section class="how-to-use">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-right"></div>
        <div class="cws-image-bg style-three" style="background-image: url(images/background/4.jpg)">
            <div class="cws-overlay-bg bg-green half-left"></div>
        </div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content COlumn -->
            <div class="content-column col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light text-right">
                        <h2>SIMPLE TO USE</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Control Image -->
        <figure class="control-image"><img src="images/resource/home-control.png" alt="" /></figure>
    </div>
</section>
<!-- End How to Use -->

<!-- Callback Section -->
<section class="callback-section">
    <div class="cws-background-image" style="background-image: url(images/background/5.png)"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="sec-title">
                    <h3>Make Smart Home Project</h3>
                    <div class="text">We’re here to answer any questions you might have about living in a Smart Home. We can also help you find an Ingenious partner in your area.</div>
                </div>

                <div class="default-form callback-form">
                    <form action="#" method="post" id="email-form">
                        <div class="form-group mb-0">
                            <div class="response"></div>
                        </div>

                        <div class="form-group">
                            <label> Your Name (required)</label>
                            <input type="text" name="username" class="username">
                        </div>

                        <div class="form-group">
                            <label>Email (required)</label>
                            <input type="email" name="email" class="email">
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="contact_message"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="theme-btn btn-style-three" type="button" id="submit" name="submit-form">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Reservation Section -->

<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">
        <!--Sponsors carousel-->
        <ul class="sponsors-carousel owl-carousel owl-theme">
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
            </li>
        </ul>
    </div>
</section>
<!--End Clients Section-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/home.blade.php ENDPATH**/ ?>