
<?php $__env->startSection('content'); ?>

<div>
    <h3>Results</h2>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="posts">
            <a href="posts/<?php echo e($item['id']); ?>">
                <h4><?php echo e($item['name']); ?></h4>
            </a>
            <p><?php echo e($item['text']); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/search.blade.php ENDPATH**/ ?>