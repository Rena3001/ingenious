<?php $__env->startSection('page_title', __('Products')); ?>
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Translation;
$locale = app()->getLocale();
?>

<!--Page Title-->
<section class="page-title">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('<?php echo e(asset('assets/images/background/37.jpg')); ?>')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1><?php echo e(Translation::getValue('shop_items_title', $locale)); ?></h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo e(route('home',['locale' => $locale])); ?>">
                    <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                </a>
            </li>
            <li>
                <?php echo e(Translation::getValue('breadcrumb_shop_items', $locale)); ?>

            </li>
        </ul>
    </div>
</section>

<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-shop no-padding style-two">
                    <div class="shop-upper-box clearfix">
                        <div class="items-label">
                            <?php echo e(Translation::getValue('shop_showing_results', $locale)); ?>

                        </div>
                        <div class="orderby">
                            <form method="GET">
                                <select name="orderby" class="sortby-select" onchange="this.form.submit()">
                                    <option value="date" <?php echo e(request('orderby') == 'date' ? 'selected' : ''); ?>>
                                        <?php echo e(Translation::getValue('shop_sort_newness', $locale)); ?>

                                    </option>

                                    <option value="price" <?php echo e(request('orderby') == 'price' ? 'selected' : ''); ?>>
                                        <?php echo e(Translation::getValue('shop_sort_price_low_to_high', $locale)); ?>

                                    </option>

                                    <option value="price-desc" <?php echo e(request('orderby') == 'price-desc' ? 'selected' : ''); ?>>
                                        <?php echo e(Translation::getValue('shop_sort_price_high_to_low', $locale)); ?>

                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <?php if($products->count() === 0): ?>
                        <div class="no-results" style="padding: 40px; text-align:center;">
                            <h3><?php echo e(\App\Models\Translation::getValue('no_results', $locale)); ?></h3>

                            <?php if($search): ?>
                            <p>"<?php echo e($search); ?>"</p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">

                                <div class="image-box">
                                    <!-- <a href="<?php echo e($product->amazon_link); ?>" target="_blank"> -->
                                    <figure class="image">
                                        <img
                                            src="<?php echo e(asset('storage/' . $product->image)); ?>"
                                            alt="<?php echo e($product->getTranslation('name', $locale)); ?>">
                                    </figure>
                                    <!-- </a> -->
                                    
                                    <div class="hover-overlay">
                                        <a
                                            href="<?php echo e($product->amazon_link); ?>"
                                            target="_blank"
                                            class="buy-now">
                                            <span><?php echo e(Translation::getValue('go_to_amazon', $locale)); ?></span>
                                        </a>
                                    </div>

                                </div>

                                <div class="lower-content">
                                    <h4 class="name">
                                        <a href="<?php echo e(route('product.detail', ['locale' => $locale, 'product' => $product->id])); ?>" target="_blank">
                                            <?php echo e($product->getTranslation('name', $locale)); ?>

                                        </a>
                                    </h4>

                                    <div class="price">
                                        $<?php echo e($product->price); ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">

                        <!-- Category  Widget -->
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
<!--End Sidebar Page Container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/products.blade.php ENDPATH**/ ?>