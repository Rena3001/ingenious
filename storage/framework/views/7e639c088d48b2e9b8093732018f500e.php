     
     <?php $__env->startSection('page_title', "Process"); ?>
     <?php $__env->startSection('content'); ?>

     <!--Page Title-->
     <?php
     use App\Models\Translation;
     $locale = app()->getLocale();
     $process = \App\Models\Process::first();
     ?>

     <section class="page-title">
         <div class="background-layers">
             <div class="cws-image-bg" style="background-image: url(images/background/37.jpg)">
                 <div class="cws-overlay-bg"></div>
             </div>
         </div>

         <div class="auto-container">

             <h1><?php echo e(Translation::getValue('page_process_title', $locale)); ?></h1>

             <ul class="page-breadcrumb">
                 <li>
                     <a href="<?php echo e(route('home')); ?>">
                         <?php echo e(Translation::getValue('breadcrumb_home', $locale)); ?>

                     </a>
                 </li>
                 <li>
                     <?php echo e(Translation::getValue('breadcrumb_process', $locale)); ?>

                 </li>
             </ul>

         </div>
     </section>

     <!--End Page Title-->

     <!-- About Process -->
    <section class="about-process">

         <div class="auto-container">

             <div class="sec-title">
                 <h2><?php echo e($process->getTranslation('title')); ?></h2>

                 <div class="text">
                    <?php echo e($process->getTranslation('description')); ?>

                </div>
             </div>

             <div class="step-btn">
                 <a class="scroll-to-target" data-target="#step-1">
                     <span class="step-text">
                         <?php echo e(Translation::getValue('process_explore', $locale)); ?>

                     </span>
                     <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
                 </a>
             </div>

         </div>

    </section>
     <!-- End About Process -->

     <!-- Step Section -->
     <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <?php if($step->layout === 'left-image'): ?>
        <section class="step-section" id="step-<?php echo e($step->step_number); ?>">

            <!-- BACKGROUND -->
            <div class="background-layers">
                <div class="cws-triangle-overlay top-left"></div>
                <div class="cws-image-bg" style="background-image: url(images/background/38.jpg)">
                    <div class="cws-overlay-bg"></div>
                    <div class="cws-triangle-overlay"></div>
                </div>
                <div class="cws-triangle-overlay bottom-left"></div>
                <div class="cws-triangle-overlay bottom-right"></div>
            </div>

            <div class="auto-container">
                <div class="row">

                    <!-- IMAGE LEFT -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <figure class="image">
                                <img src="<?php echo e(asset('storage/'.$step->image)); ?>" alt="">
                            </figure>
                        </div>
                    </div>

                    <!-- TEXT RIGHT -->
                    <div class="content-column col-lg-5 col-md-12 col-sm-12 offset-1">
                        <div class="inner-column">
                            <h2><?php echo e($step->getTranslation('title')); ?></h2>

                            <p><?php echo e($step->getTranslation('description')); ?></p>

                            <?php if($step->button_text_az): ?>
                                <a href="<?php echo e($step->button_link); ?>" class="theme-btn btn-style-one large">
                                    <?php echo e($step->getTranslation('button_text')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

            <!-- STEP BUTTON -->
            <div class="step-btn">
                <a class="scroll-to-target" data-target="#step-<?php echo e($step->step_number + 1); ?>">
                    <span class="step-background"></span>
                    <span class="step-text">STEP</span>
                    <span class="step-count"><?php echo e($step->step_number); ?></span>
                    <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
                </a>
            </div>

        </section>
        <?php else: ?>
        <section class="step-section-two" id="step-<?php echo e($step->step_number); ?>">

            <div class="auto-container">
                <div class="row">

                    <!-- TEXT LEFT -->
                    <div class="content-column col-lg-5 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <h2><?php echo e($step->getTranslation('title')); ?></h2>

                            <p><?php echo e($step->getTranslation('description')); ?></p>

                            <?php if($step->button_text_az): ?>
                                <a href="<?php echo e($step->button_link); ?>" class="theme-btn btn-style-one large">
                                    <?php echo e($step->getTranslation('button_text')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- IMAGE RIGHT -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12 offset-1">
                        <div class="inner-column">
                            <figure class="image">
                                <img src="<?php echo e(asset('storage/'.$step->image)); ?>" alt="">
                            </figure>
                        </div>
                    </div>

                </div>
            </div>

            <!-- STEP BUTTON (LIGHT VERSION) -->
            <div class="step-btn light">
                <a class="scroll-to-target" data-target="#step-<?php echo e($step->step_number + 1); ?>">
                    <span class="step-background"></span>
                    <span class="step-text">STEP</span>
                    <span class="step-count"><?php echo e($step->step_number); ?></span>
                    <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
                </a>
            </div>

        </section>
        <?php endif; ?>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     <!-- End Step Section -->


    <!-- Reservation Section -->
    <section class="callback-section">
        <div class="cws-background-image" style="background-image: url('<?php echo e(asset('assets/images/background/5.png')); ?>')"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    
                    
                    <div class="sec-title">
                        <h3><?php echo e(Translation::getValue('contact_title_request', $locale)); ?></h3>
                        <div class="text">
                            <?php echo e(Translation::getValue('contact_description_request', $locale)); ?>

                        </div>
                    </div>

                    <div class="default-form callback-form">

                        
                        <?php if(session('success')): ?>
                            <div class="alert alert-success mb-3">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('contact.submit')); ?>" method="POST" id="email-form">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label>Your Name (required)</label>
                                <input type="text" name="username" class="username" required>
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger d-block"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label>Email (required)</label>
                                <input type="email" name="email" class="email" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger d-block"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="contact_message"></textarea>
                                <?php $__errorArgs = ['contact_message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger d-block"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-three" type="submit" id="submit" name="submit-form">
                                    <?php echo e(Translation::getValue('contact_button_text', $locale)); ?>

                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

     <!--End Reservation Section -->

     <?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ingenious\resources\views/client/pages/process.blade.php ENDPATH**/ ?>