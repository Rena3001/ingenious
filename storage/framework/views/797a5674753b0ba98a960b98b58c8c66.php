<script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/knob.js')); ?>"></script>


<!--Revolution Slider-->
<script src="<?php echo e(asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main-slider-script.js')); ?>"></script>
<!--Revolution Slider-->
<script src="<?php echo e(asset('assets/js/jquery.fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owl.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/appear.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/isotope.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/mixitup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/odometer.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sticky_sidebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script>
    function changeLang(lang) {
        let current = window.location.pathname;   // /az/about   or   /en/products/3
        let newUrl = '/' + lang + current.substring(3);

        window.location.href = newUrl;
    }
</script><?php /**PATH C:\laragon\www\ingenious\resources\views/client/layout/includes/foot.blade.php ENDPATH**/ ?>