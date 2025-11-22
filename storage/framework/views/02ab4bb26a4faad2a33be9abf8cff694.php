<?php $__env->startSection('page_title', __('Product-detail')); ?>
<?php $__env->startSection('content'); ?>

<?php
use App\Models\Translation;
$locale = app()->getLocale();
?>

<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('<?php echo e(asset('assets/images/background/37.jpg')); ?>');">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1><?php echo e($product->getTranslation('name', $locale)); ?></h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home', ['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>
            <li>
                <a href="<?php echo e(route('products', ['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_shop_items', $locale)); ?>

                </a>
            </li>
            <li><?php echo e($product->getTranslation('name', $locale)); ?></li>
        </ul>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="shop-single">
                    <div class="product-details">

                        <!-- Basic Details -->
                        <div class="basic-details">
                            <div class="row clearfix">

                                <!-- PRODUCT IMAGE -->
                                <div class="image-column col-md-6 col-sm-12">
                                    <figure class="image">
                                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
                                    </figure>
                                </div>

                                <!-- PRODUCT INFO -->
                                <div class="info-column col-md-6 col-sm-12">
                                    <div class="details-header">

                                        <h4><?php echo e($product->getTranslation('name', $locale)); ?></h4>

                                        <div class="item-price">$<?php echo e($product->price); ?></div>

                                        <div class="text">
                                            <?php echo e($product->getTranslation('description', $locale)); ?>

                                        </div>

                                    </div>

                                    <div class="other-options clearfix">
                                        <ul class="product-meta">
                                            <li>
                                                <?php echo e(Translation::getValue('product_category', $locale)); ?>:

                                                <?php if($product->category): ?>
                                                <a href="<?php echo e(route('products.byCategory', ['locale' => $locale, 'category' => $product->category->id])); ?>">
                                                    <?php echo e($product->category->getTranslation('name', $locale)); ?>

                                                </a>
                                                <?php else: ?>
                                                <span>No Category</span>
                                                <?php endif; ?>

                                            </li>
                                        </ul>
                                    </div>

                                    <!-- AMAZON LINK -->
                                    <?php if($product->amazon_link): ?>
                                    <a href="<?php echo e($product->amazon_link); ?>" target="_blank" class="theme-btn btn-style-three">
                                        <?php echo e(Translation::getValue('buy_on_amazon', $locale)); ?>

                                    </a>
                                    <?php endif; ?>

                                </div>

                            </div>
                        </div>
                        <!-- End Basic Details -->


                        <!-- Product Reviews -->
                        <div class="product-info-tabs">
                            <div class="prod-tabs tabs-box">

                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#prod-reviews">
                                        <?php echo e(Translation::getValue('customer_reviews', $locale)); ?>

                                        (<?php echo e($product->reviews->count()); ?>)
                                    </li>
                                </ul>

                                <div class="tabs-content">

                                    <div class="tab active-tab" id="prod-reviews">

                                        <h2 class="title">
                                            <?php echo e($product->reviews->count()); ?> <?php echo e(Translation::getValue('customer_reviews', $locale)); ?>

                                        </h2>

                                        <div class="comments-area">
                                            <?php $__empty_1 = true; $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="comment-inner">

                                                        <div class="comment-info clearfix">
                                                            <strong class="name"><?php echo e($review->name); ?></strong>
                                                            <span class="date"><?php echo e($review->created_at->format('M d, Y')); ?></span>
                                                        </div>

                                                        <div class="text"><?php echo e($review->message); ?></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <p>No reviews yet.</p>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Review Form -->
                                        <div class="comment-form default-form mt-5">
                                            <div class="sub-title"><?php echo e(Translation::getValue('add_review', $locale)); ?></div>

                                            <div class="form-outer">
                                                <form method="POST" action="<?php echo e(route('product.storeReview', ['locale' => $locale, 'product' => $product->id])); ?>">

                                                    <?php echo csrf_field(); ?>

                                                    <div class="col-lg-12 form-group">
                                                        <div class="field-label"><?php echo e(Translation::getValue('your_review', $locale)); ?> *</div>
                                                        <textarea name="message" required></textarea>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <div class="field-label"><?php echo e(Translation::getValue('your_name', $locale)); ?> *</div>
                                                        <input type="text" name="name" required>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <div class="field-label"><?php echo e(Translation::getValue('your_email', $locale)); ?> *</div>
                                                        <input type="email" name="email" required>
                                                    </div>

                                                    <div class="col-lg-12 form-group">
                                                        <button type="submit" class="theme-btn btn-style-three">
                                                            <?php echo e(Translation::getValue('submit', $locale)); ?>

                                                        </button>
                                                    </div>
                                                </form>

                                                <?php if(session('success')): ?>
                                                <div class="alert alert-success mt-3">
                                                    <?php echo e(session('success')); ?>

                                                </div>
                                                <?php endif; ?>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Product Reviews -->


                        <!-- Related Products -->
                        <div class="related-products">
                            <div class="sec-title">
                                <h2><?php echo e(Translation::getValue('related_products', $locale)); ?></h2>
                            </div>

                            <div class="row item-green">

                                <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">

                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="<?php echo e(route('product.detail', ['locale' => $locale, 'product' => $item->id])); ?>">
                                                    <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="lower-content">
                                            <h4 class="name">
                                                <a href="<?php echo e(route('product.detail', ['locale' => $locale, 'product' => $item->id])); ?>">
                                                    <?php echo e($item->getTranslation('name', $locale)); ?>

                                                </a>
                                            </h4>

                                            <div class="price">$<?php echo e($item->price); ?></div>
                                        </div>

                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                        <!-- End Related Products -->

                    </div>

                </div>
            </div>
            <!-- End Content Side -->


            <!-- Sidebar -->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">

                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-content">

                                <h3 class="widget-title">
                                    <?php echo e(Translation::getValue('categories_title', $locale)); ?>

                                </h3>

                                <ul class="categories-list">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('products.byCategory', ['locale' => $locale, 'category' => $category->id])); ?>">
                                            <?php echo e($category->getTranslation('name', $locale)); ?>

                                            <span>(<?php echo e($category->products_count); ?>)</span>
                                        </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                            </div>
                        </div>

                    </div>
                </aside>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/product-detail.blade.php ENDPATH**/ ?>