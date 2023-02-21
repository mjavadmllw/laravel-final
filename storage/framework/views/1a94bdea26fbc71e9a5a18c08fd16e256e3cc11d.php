<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="posts">
            <a href="posts/<?php echo e($post['id']); ?>">
                <h4><?php echo e($post['name']); ?></h4>
            </a>
            <p><?php echo e($post['text']); ?></p>

            <p style="color:dimgray; margin:10px;"><?php echo e($post['created_at']); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/home.blade.php ENDPATH**/ ?>