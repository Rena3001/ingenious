<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $__env->make('client.layout.includes.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <title><?php echo $__env->yieldContent('title', 'Ingenious'); ?></title>

    
    <?php echo $__env->yieldPushContent('styles'); ?>

</head>

<body>
    <div class="page-wrapper">

        <?php echo $__env->make('client.layout.includes.preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php if (isset($component)) { $__componentOriginalaa125d140467a613d991fb304fa7c6fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa125d140467a613d991fb304fa7c6fa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front-header-component','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front-header-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa125d140467a613d991fb304fa7c6fa)): ?>
<?php $attributes = $__attributesOriginalaa125d140467a613d991fb304fa7c6fa; ?>
<?php unset($__attributesOriginalaa125d140467a613d991fb304fa7c6fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa125d140467a613d991fb304fa7c6fa)): ?>
<?php $component = $__componentOriginalaa125d140467a613d991fb304fa7c6fa; ?>
<?php unset($__componentOriginalaa125d140467a613d991fb304fa7c6fa); ?>
<?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php if (isset($component)) { $__componentOriginal996affff6ccc1f1cdc02bc53160e33cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal996affff6ccc1f1cdc02bc53160e33cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front-footer-component','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front-footer-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal996affff6ccc1f1cdc02bc53160e33cc)): ?>
<?php $attributes = $__attributesOriginal996affff6ccc1f1cdc02bc53160e33cc; ?>
<?php unset($__attributesOriginal996affff6ccc1f1cdc02bc53160e33cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal996affff6ccc1f1cdc02bc53160e33cc)): ?>
<?php $component = $__componentOriginal996affff6ccc1f1cdc02bc53160e33cc; ?>
<?php unset($__componentOriginal996affff6ccc1f1cdc02bc53160e33cc); ?>
<?php endif; ?>
    </div>   
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-alt-up"></span></div>

        <?php echo $__env->make('client.layout.includes.foot', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\ingenious\resources\views/client/layout/master.blade.php ENDPATH**/ ?>