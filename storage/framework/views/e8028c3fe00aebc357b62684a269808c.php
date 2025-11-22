<?php
use App\Models\Translation;
use App\Models\Setting;
use App\Models\Blog;

$locale = app()->getLocale();
$settings = Setting::first();
$latestPost = Blog::orderBy('created_at', 'desc')->first();
?>

<footer class="main-footer" style="background-image: url(<?php echo e(asset('assets/images/background/6.jpg')); ?>);">
    <div class="auto-container">

        <div class="widgets-section">
            <div class="row">

                
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title">
                            <?php echo e(Translation::getValue('footer_about_title', $locale)); ?>

                        </h4>

                        <div class="widget-content">
                            <div class="text">
                                <?php echo e(Translation::getValue('footer_about_text', $locale)); ?>

                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget recent-posts">
                        <h4 class="widget-title">
                            <?php echo e(Translation::getValue('footer_latest_posts_title', $locale)); ?>

                        </h4>

                        <?php if($latestPost): ?>
                        <div class="widget-content">
                            <article class="post">
                                <div class="thumb">
                                    <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $latestPost->id])); ?>">
                                        <img src="<?php echo e(asset('storage/' . $latestPost->image)); ?>" alt="">
                                    </a>
                                </div>

                                <h5>
                                    <a href="<?php echo e(route('blog.detail', ['locale' => $locale, 'id' => $latestPost->id])); ?>">
                                        <?php echo e($latestPost->getTranslation('title', $locale)); ?>

                                    </a>
                                </h5>

                                <div class="text">
                                    <?php echo e(\Illuminate\Support\Str::limit($latestPost->getTranslation('description', $locale), 180)); ?>

                                </div>
                            </article>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>

                
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget contact-widget">
                        <h4 class="widget-title">
                            <?php echo e(Translation::getValue('footer_contacts_title', $locale)); ?>

                        </h4>

                        <div class="widget-content">
                            <ul class="contact-list">

                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a>
                                </li>

                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:<?php echo e($settings->phone); ?>"><?php echo e($settings->phone); ?></a>
                                </li>

                                <li>
                                    <div class="social-icon">
                                        <?php if($settings->facebook): ?>
                                            <a href="<?php echo e($settings->facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                        <?php if($settings->twitter): ?>
                                            <a href="<?php echo e($settings->twitter); ?>"><i class="fab fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if($settings->instagram): ?>
                                            <a href="<?php echo e($settings->instagram); ?>"><i class="fab fa-instagram"></i></a>
                                        <?php endif; ?>
                                        <?php if($settings->linkedin): ?>
                                            <a href="<?php echo e($settings->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
                                        <?php endif; ?>
                                        <?php if($settings->telegram): ?>
                                            <a href="<?php echo e($settings->telegram); ?>"><i class="fa fa-signal"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text">
                <p><?php echo e(Translation::getValue('footer_about_title', $locale)); ?> © <?php echo e(date('Y')); ?></p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\ingenious\resources\views/components/front-footer-component.blade.php ENDPATH**/ ?>