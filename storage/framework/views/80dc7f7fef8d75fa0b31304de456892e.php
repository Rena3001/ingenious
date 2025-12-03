
<?php $__env->startSection('page_title', __('Overview')); ?>
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Translation;
$locale = app()->getLocale();
?>

<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(images/background/37.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">

        <h1><?php echo e(Translation::getValue('overview_title', $locale)); ?></h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home',['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>
            <li>
                <?php echo e(Translation::getValue('breadcrumb_overview', $locale)); ?>

            </li>
        </ul>

    </div>
</section>

<section class="roadmap-full-slider overview-page">
    <div class="roadmap-carousel owl-carousel owl-theme">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="roadmap-slide">

            <div class="slide-bg"
                 style="background-image: url('<?php echo e(asset('storage/' . $r->image)); ?>')">
            </div>

            <div class="slide-overlay"></div>

            <div class="auto-container">
                <div class="content">

                    <h2><?php echo e($r->getTitle($locale)); ?></h2>

                    <?php if($r->getSubtitle($locale)): ?>
                    <p class="subtitle">
                        <?php echo $r->getSubtitle($locale); ?>

                    </p>
                    <?php endif; ?>

                    <div class="desc">
                        <?php echo \Illuminate\Support\Str::limit(strip_tags($r->getDesc($locale)), 1200); ?>

                    </div>


                </div>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/overview.blade.php ENDPATH**/ ?>