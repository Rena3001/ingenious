<?php $__env->startSection('page_title', __('Blog')); ?>
<?php $__env->startSection('content'); ?>

<?php
    use App\Models\Translation;
    $locale = app()->getLocale();
?>

<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('<?php echo e(asset('assets/images/background/37.jpg')); ?>')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1><?php echo e(Translation::getValue('blog_title', $locale)); ?></h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>
            <li><?php echo e(Translation::getValue('blog_title', $locale)); ?></li>
        </ul>
    </div>
</section>

<section class="blog-section">
    <div class="auto-container">

        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="news-block style-two">
            <div class="inner-box row">

                
                <?php if($blog->position === 'left'): ?>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="image">
                            <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $blog->id])); ?>">
                                <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="">
                            </a>
                        </figure>
                    </div>

                    <div class="content-column col-lg-6 col-md-12 col-sm-12">

                        <h3>
                            <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $blog->id])); ?>">
                                <?php echo e($blog->getTranslation('title', $locale)); ?>

                            </a>
                        </h3>

                        <div class="text">
                            <?php echo e(Str::limit($blog->getTranslation('description', $locale), 180)); ?>

                        </div>

                        <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $blog->id])); ?>"
                           class="theme-btn btn-style-four">
                            <?php echo e(Translation::getValue('read_more', $locale)); ?>

                        </a>

                    </div>

                <?php else: ?>
                

                    <div class="content-column col-lg-6 col-md-12 col-sm-12">

                        <h3>
                            <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $blog->id])); ?>">
                                <?php echo e($blog->getTranslation('title', $locale)); ?>

                            </a>
                        </h3>

                        <div class="text">
                            <?php echo e(Str::limit($blog->getTranslation('description', $locale), 180)); ?>

                        </div>

                        <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $blog->id])); ?>"
                           class="theme-btn btn-style-four">
                            <?php echo e(Translation::getValue('read_more', $locale)); ?>

                        </a>

                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="image">
                            <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $blog->id])); ?>">
                                <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="">
                            </a>
                        </figure>
                    </div>

                <?php endif; ?>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/blog.blade.php ENDPATH**/ ?>