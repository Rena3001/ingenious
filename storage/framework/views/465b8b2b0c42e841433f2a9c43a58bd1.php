<?php $__env->startSection('page_title', __('About Us')); ?>

<?php $__env->startSection('content'); ?>

<?php
use App\Models\Translation;
$locale = app()->getLocale();
$about = \App\Models\AboutSection::with('missionItems')->where('is_active', true)->get()->keyBy('type');
?>


<!--Page Title-->
<section class="page-title">
    <div class="cws-image-bg" style="background-image: url(images/background/30.jpg)">
        <div class="cws-overlay-bg"></div>
    </div>

    <div class="auto-container">
        <h1><?php echo e(Translation::getValue('about', $locale)); ?></h1>
        <ul class="page-breadcrumb">
            <li><a href="<?php echo e(route('home',['locale' => $locale])); ?>">
                <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?></a>
            </li>
            <li><?php echo e(Translation::getValue('about', $locale)); ?></li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- ========================= -->
<!-- ABOUT SECTION THREE -->
<!-- ========================= -->
<?php if(isset($about['about_section_three'])): ?>
<section class="about-section-three">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(<?php echo e(asset('assets/images/background/31.jpg')); ?>)"></div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><?php echo e($about['about_section_three']->getTitle($locale)); ?></h2>
                    </div>
                    <div class="about-text">
                        <?php echo $about['about_section_three']->getContent($locale); ?>

                    </div>
                </div>

                <?php if($about['about_section_three']->button_key): ?>
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-style-one large">
                        <?php echo e(\App\Models\Translation::getValue($about['about_section_three']->button_key, $locale)); ?>

                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

 
<!-- ========================= -->
<!-- OUR STANDARDS -->
<!-- ========================= -->
<?php if(isset($about['our_standards'])): ?>
<section class="our-standards">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(<?php echo e(asset('assets/images/background/32.jpg')); ?>)">
            <div class="cws-overlay-bg"></div>
            <div class="cws-triangle-overlay"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 offset-6">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2><?php echo e($about['our_standards']->getTitle($locale)); ?></h2>
                        <div class="text">
                            <?php echo $about['our_standards']->getContent($locale); ?>

                        </div>
                    </div>

                    <!-- optional icons, fixed -->
                    <ul class="icon-list-two">
                        <li><a href="#"><span class="icon flaticon-target"></span></a></li>
                        <li><a href="#"><span class="icon flaticon-mouse"></span></a></li>
                        <li><a href="#"><span class="icon flaticon-notification-1"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>
<?php endif; ?>



<!-- ========================= -->
<!-- OUR MISSION -->
<!-- ========================= -->
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



<!-- Team Section -->
<?php echo $__env->make('components.team', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- End Our People -->

<!--Clients Section-->
<?php echo $__env->make('components.client', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!--End Clients Section-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/about.blade.php ENDPATH**/ ?>