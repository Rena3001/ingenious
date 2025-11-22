<?php $__env->startSection('page_title', __('Contact Us')); ?>
<?php $__env->startSection('content'); ?>

<?php
    use App\Models\Translation;
    $locale = app()->getLocale();
?>

<!--Page Title-->
<section class="page-title">
    <div class="cws-image-bg" style="background-image: url('<?php echo e(asset('assets/images/background/37.jpg')); ?>')">
        <div class="cws-overlay-bg"></div>
    </div>

    <div class="auto-container">
        <h1><?php echo e(Translation::getValue('contact_title', $locale)); ?></h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home',['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>
            <li><?php echo e(Translation::getValue('contact_title', $locale)); ?></li>
        </ul>
    </div>
</section>
<!--End Page Title-->



<!-- Features Section Six  -->
<section class="feaures-section-six">
    <div class="background-layers">
        <div class="cws-image-bg"></div>
    </div>

    <div class="auto-container">
        <div class="row">

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-shopping-cart-2"></span></div>
                    <h4><?php echo e(Translation::getValue('contact_orders', $locale)); ?></h4>
                </div>
            </div>

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-browser-2"></span></div>
                    <h4><?php echo e(Translation::getValue('contact_project', $locale)); ?></h4>
                </div>
            </div>

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-headset-2"></span></div>
                    <h4><?php echo e(Translation::getValue('contact_support', $locale)); ?></h4>
                </div>
            </div>

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-devices-1"></span></div>
                    <h4><?php echo e(Translation::getValue('contact_partner', $locale)); ?></h4>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Features Section Six -->



<!-- Contact Map Section -->
<section class="contact-map-section">

    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg">
            <div class="cws-triangle-overlay"></div>
        </div>
    </div>

    <!-- XRİTƏ (DOĞRU YER) -->
    <div class="map-outer">
        <?php echo $settings->map_iframe; ?>

    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 offset-6">
                <div class="inner-column">

                    <div class="sec-title">
                        <h2><?php echo e(Translation::getValue('contact_how_to_reach', $locale)); ?></h2>

                        <div class="text">
                            <?php echo e(Translation::getValue('contact_reach_desc', $locale)); ?>

                        </div>
                    </div>

                    <h4><?php echo e(Translation::getValue('our_company', $locale)); ?></h4>

                    <div class="contact-info row">

                        <div class="contact-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon fa fa-map-signs"></span>
                                <h5><?php echo e(Translation::getValue('contact_address', $locale)); ?></h5>
                                <p><?php echo e($settings->address); ?></p>
                            </div>
                        </div>

                        <div class="contact-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon fa fa-phone"></span>
                                <h5><?php echo e(Translation::getValue('contact_details', $locale)); ?></h5>
                                <p><?php echo e($settings->phone); ?></p>
                                <p><?php echo e($settings->email); ?></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- End Contact Map Section -->



<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="background-layers">
        <div class="cws-image-bg"></div>
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-triangle-overlay top-right"></div>
    </div>

    <div class="auto-container">
        <div class="row">

            <!-- Left text -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2><?php echo e(Translation::getValue('contact_title', $locale)); ?></h2>
                        <div class="text">
                            <?php echo e(Translation::getValue('contact_description', $locale)); ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="default-form contact-form-two">

                        <form action="<?php echo e(route('contact.submit',['locale' => $locale])); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="row mid-spacing">

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
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

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
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

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
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

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                    <button class="theme-btn btn-style-one" type="submit">
                                        <?php echo e(Translation::getValue('contact_button', $locale)); ?>

                                    </button>
                                </div>

                                <?php if(session('success')): ?>
                                    <div class="alert alert-success col-12 mt-3">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>

                                <?php if(session('error')): ?>
                                    <div class="alert alert-danger col-12 mt-3">
                                        <?php echo e(session('error')); ?>

                                    </div>
                                <?php endif; ?>

                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Form Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/contact.blade.php ENDPATH**/ ?>