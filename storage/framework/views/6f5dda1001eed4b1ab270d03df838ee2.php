<?php $__env->startSection('page_title', "__('Services')"); ?>
<?php $__env->startSection('content'); ?>

   <?php
    use App\Models\Translation;
    $locale = app()->getLocale();
    ?>

   <!--Page Title-->
    <section class="page-title">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(<?php echo e(asset('assets/images/background/30.jpg')); ?>)">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>
    <div class="auto-container">
        <h1><?php echo e(Translation::getValue('page_services_title', $locale)); ?></h1>
        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home',['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>
            <li><?php echo e(Translation::getValue('breadcrumb_services', $locale)); ?></li>
        </ul>
    </div>
    </section>

    <!--End Page Title-->


<!-- Services Section Three -->


<?php if(!$services): ?>
    
    <?php
        $icons = [];
    ?>
<?php else: ?>
    <?php
    $locale = app()->getLocale(); 
    $icons = $services->icons ?? []; // artıq array-dir
    $list = $services->section2_list ?? [];
    $bg = $services->section2_background ? asset($services->section2_background) : 'images/background/34.jpg';
    $skills = $services->section3_skills ?? [];
    $bg3 = $services->section3_background 
        ? asset($services->section3_background)
        : 'images/background/34.jpg';
?>

<?php endif; ?>


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

    <!-- End Services Section Three -->



    <!-- Fluid Section One -->


    <section class="fluid-section-one">

        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url(<?php echo e($bg); ?>)">
                <div class="cws-overlay-bg"></div>
                <div class="cws-triangle-overlay"></div>
            </div>
            <div class="cws-triangle-overlay bottom-left"></div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-5 col-md-12 col-sm-12 offset-7">
                    <div class="inner-column">

                        <div class="sec-title">
                            <h2><?php echo e($services->{"section2_title_$locale"}); ?></h2>
                            <div class="text"><?php echo e($services->{"section2_description_$locale"}); ?></div>
                        </div>

                        <ul class="list-style-two">
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($item["text_$locale"] ?? ''); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <?php if($services->{"section2_button_text_$locale"}): ?>
                            <div class="btn-box">
                                <a href="<?php echo e($services->section2_button_link); ?>" class="theme-btn btn-style-one large">
                                    <?php echo e($services->{"section2_button_text_$locale"}); ?>

                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Fluid Section One --> 

    <!-- Skills Section -->
    <section class="skills-section">

        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url(<?php echo e($bg3); ?>)">
                <div class="cws-overlay-bg"></div>
                <div class="cws-triangle-overlay"></div>
            </div>
            <div class="cws-triangle-overlay bottom-right"></div>
        </div>

        <div class="auto-container">

            <div class="sec-title text-center">
                <h2><?php echo e($services->{"section3_title_$locale"}); ?></h2>
                <div class="text">
                    <?php echo e($services->{"section3_description_$locale"}); ?>

                </div>
            </div>

            <div class="skills-outer">
                <div class="row">

                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="pie-graph col-lg-3 col-md-3 col-sm-6">
                            <div class="graph-outer">
                                <input type="text"
                                    class="dial"
                                    data-fgColor="#539760"
                                    data-bgColor="#c6dac9"
                                    data-width="136"
                                    data-height="136"
                                    value="<?php echo e($skill['percent']); ?>">
                                <div class="inner-text count-box">
                                    <span class="count-text txt"
                                        data-stop="<?php echo e($skill['percent']); ?>"
                                        data-speed="2000"></span>%
                                </div>
                            </div>

                            <h4><?php echo e($skill["title_$locale"] ?? ''); ?></h4>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

        </div>
    </section>
    <!-- Skills Section -->

    <!-- Contact Section -->
<section class="contact-section">
    <div class="auto-container">

        <!-- SECTION TITLE -->
        <div class="sec-title text-center">
            <h2><?php echo e(Translation::getValue('contact_title', $locale)); ?></h2>

            <div class="text">
                <?php echo e(Translation::getValue('contact_description', $locale)); ?>

            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class="default-form contact-form">
           <form action="<?php echo e(route('contact.submit',['locale' => $locale])); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label><?php echo e(Translation::getValue('contact_form_name', $locale)); ?></label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label><?php echo e(Translation::getValue('contact_form_email', $locale)); ?></label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label><?php echo e(Translation::getValue('contact_form_message', $locale)); ?></label>
                <textarea name="contact_message" required></textarea>
            </div>

            <button type="submit" class="theme-btn btn-style-three">
                <?php echo e(Translation::getValue('contact_button_text', $locale)); ?>

            </button>
        </form>

        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3" style="color:white; background:#28a745; padding:10px 20px; border-radius:6px;">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger mt-3" style="color:white; background:#dc3545; padding:10px 20px; border-radius:6px;">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        </div>

        <!-- CTA BUTTON -->
        <!-- <div class="btn-box">
            <a href="<?php echo e($contact?->button_link ?? '#'); ?>" class="theme-btn btn-style-one large">
                <?php echo e($contact?->{"button_text_$locale"} ?? 'Get in touch'); ?>

            </a>
        </div> -->

    </div>
</section>
    <!-- End Contact Section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/services.blade.php ENDPATH**/ ?>