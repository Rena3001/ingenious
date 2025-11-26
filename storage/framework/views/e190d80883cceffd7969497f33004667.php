<?php
    $clients = \App\Models\Client::where('is_active', 1)
        ->orderBy('sort')
        ->get();
?>

<section class="clients-section">
    <div class="auto-container">
        <ul class="sponsors-carousel owl-carousel owl-theme">

            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="slide-item">
                    <figure class="image-box">
                        <a href="<?php echo e($client->url); ?>" target="_blank">
                            <img src="<?php echo e(asset('storage/' . $client->image)); ?>" alt="client logo">
                        </a>
                    </figure>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
</section>
<?php /**PATH C:\laragon\www\ingenious\resources\views/components/client.blade.php ENDPATH**/ ?>