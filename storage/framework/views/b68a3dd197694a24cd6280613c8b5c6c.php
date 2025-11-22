<?php $__env->startSection('page_title', 'Ingenious'); ?>

<?php $__env->startSection('content'); ?>
<?php
    use App\Models\Translation;
    $locale = app()->getLocale();
    $icons = $services->icons ?? []; // artıq array-dir
?>

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
<?php if(isset($about['our_mission'])): ?>
 <section class="our-mission">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2><?php echo e($about['our_mission']->getTitle($locale)); ?></h2>
            <div class="text">
                <?php echo e($about['our_mission']->getShortDesc($locale)); ?>

            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $about['our_mission']->missionItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mission-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon <?php echo e($item->icon); ?>"></span>
                    <h4><?php echo e($item->getTitle($locale)); ?></h4>
                    <p><?php echo e($item->getText($locale)); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- End About Section -->


<!-- Services Section -->
  <section class="services-section-three">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url(images/background/29.jpg)">
                <div class="cws-overlay-bg"></div>
            </div>
            <div class="cws-triangle-overlay bottom-right"></div>
        </div>

        <div class="auto-container">

            <?php if($services): ?>
                <!-- Başlıq və açıqlama -->
                <div class="sec-title text-center">
                    <h2><?php echo e($services->{"title_$locale"}); ?></h2>

                    <div class="text">
                        <?php echo e($services->{"description_$locale"}); ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="row">

                <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-block-four col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">

                            <div class="icon-box">
                                <span class="icon <?php echo e($icon['icon']); ?>"></span>
                            </div>

                            <?php if(!empty($icon["icon_title_$locale"])): ?>
                                <h4><?php echo e($icon["icon_title_$locale"]); ?></h4>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section>
<!--End Services Section -->



<!-- Callback Section -->
<section class="callback-section">
    <div class="cws-background-image" 
         style="background-image: url('<?php echo e(asset('assets/images/background/5.png')); ?>')"></div>

    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">

                <!-- Section Title -->
                <div class="sec-title">
                    <h3><?php echo e(Translation::getValue('callback_title', $locale)); ?></h3>
                    <div class="text">
                        <?php echo e(Translation::getValue('callback_description', $locale)); ?>

                    </div>
                </div>

                <!-- Callback / Contact Form -->
                <div class="default-form callback-form">

                    <form action="<?php echo e(route('contact.submit', ['locale' => $locale])); ?>" method="POST">

                        <?php echo csrf_field(); ?>

                        <div class="form-group mb-0">
                            <?php if(session('success')): ?>
                                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                            <?php endif; ?>
                            <?php if(session('error')): ?>
                                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label><?php echo e(Translation::getValue('contact_name', $locale)); ?></label>
                            <input type="text" name="username" required>
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label><?php echo e(Translation::getValue('contact_email', $locale)); ?></label>
                            <input type="email" name="email" required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label><?php echo e(Translation::getValue('contact_message', $locale)); ?></label>
                            <textarea name="contact_message" required></textarea>
                            <?php $__errorArgs = ['contact_message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <button class="theme-btn btn-style-three" type="submit">
                                <?php echo e(Translation::getValue('contact_button_text', $locale)); ?>

                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</section>

<!--End Reservation Section -->

<!--Clients Section-->
<?php echo $__env->make('components.client', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!--End Clients Section-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/home.blade.php ENDPATH**/ ?>