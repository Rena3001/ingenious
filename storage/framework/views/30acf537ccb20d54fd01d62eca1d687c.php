<?php
use App\Models\Translation;
$locale = app()->getLocale();

    $team = \App\Models\Team::where('is_active', 1)
        ->orderBy('sort')
        ->get();
?>

<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
         <h2 class="section-title__title">
                <?php echo e(Translation::getValue('team_title', $locale)); ?>

            </h2>

            <div class="text">
                <?php echo e(Translation::getValue('team_description', $locale)); ?>

            </div>



        </div>

        <div class="row">
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image">
                            <img src="<?php echo e(asset('storage/' . $member->image)); ?>"
                                 alt="<?php echo e($member->getName($locale)); ?>">
                        </figure>

                        <div class="overlay-box">
                            <div class="text">
                                <?php echo e($member->getPosition($locale)); ?>

                            </div>

                            <ul class="social-icon">
                                <?php if($member->twitter): ?>
                                    <li><a href="<?php echo e($member->twitter); ?>"><span class="fab fa-twitter"></span></a></li>
                                <?php endif; ?>

                                <?php if($member->facebook): ?>
                                    <li><a href="<?php echo e($member->facebook); ?>"><span class="fab fa-facebook-f"></span></a></li>
                                <?php endif; ?>

                                <?php if($member->linkedin): ?>
                                    <li><a href="<?php echo e($member->linkedin); ?>"><span class="fab fa-linkedin-in"></span></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <h4>
                        <a href="#"><?php echo e($member->getName($locale)); ?></a>
                    </h4>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\ingenious\resources\views/components/team.blade.php ENDPATH**/ ?>