<?php $__env->startSection('page_title', __('Blog Detail')); ?>
<?php $__env->startSection('content'); ?>

<?php
    use App\Models\Translation;
    $locale = app()->getLocale();
?>

<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('<?php echo e(asset('assets/images/background/37.jpg')); ?>')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">

        <!-- PAGE TITLE -->
        <h1><?php echo e($blog->getTranslation('title', $locale)); ?></h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>

            <li>
                <a href="<?php echo e(route('blog', ['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('blog_title', $locale)); ?>

                </a>
            </li>

            <li><?php echo e($blog->getTranslation('title', $locale)); ?></li>
        </ul>

    </div>
</section>
<!-- End Page Title -->


<!-- Blog Single -->
<section class="blog-single">
    <div class="auto-container">

        <div class="news-block">
            <div class="inner-box">

                <!-- BLOG IMAGE -->
                <div class="image-column">
                    <div class="inner-column">
                        <figure class="image">
                            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="<?php echo e($blog->getTranslation('title', $locale)); ?>">
                        </figure>
                    </div>
                </div>

                <!-- BLOG CONTENT -->
                <div class="content-column">
                    <div class="inner-column">

                        <!-- Meta info -->
                        <ul class="post-info">
                            <li>
                                <span class="icon fa fa-calendar"></span>
                                <?php echo e($blog->created_at->format('F d, Y')); ?>

                            </li>
                        </ul>

                        <h2><?php echo e($blog->getTranslation('title', $locale)); ?></h2>

                        <!-- BLOG DESCRIPTION (FULL) -->
                        <div class="blog-description">
                            <?php echo $blog->getTranslation('description', $locale); ?>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Blog Single -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/blog-detail.blade.php ENDPATH**/ ?>