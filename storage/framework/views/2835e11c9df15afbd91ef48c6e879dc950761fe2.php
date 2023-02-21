
<?php $__env->startSection('content'); ?>

<div>
    <h3>Results</h2>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <a href="detail/<?php echo e($item['id']); ?>">
                <img src="<?php echo e(URL::asset($item['gallery'])); ?>" alt="<?php echo e($item['name']); ?>">
                <h3><?php echo e($item['name']); ?></h3>
                <p><?php echo e($item['description']); ?></p>
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/search.blade.php ENDPATH**/ ?>