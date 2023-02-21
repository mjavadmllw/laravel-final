
<?php $__env->startSection('content'); ?>

<a href="/ordernow" class="btn btn-primary" style="margin:auto;">Order Now</a>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="display:flex; justify-content:space-around; padding:10px 0px; border-top:1px solid black; margin:0px 200px;">
        <a href="detail/<?php echo e($product->id); ?>"><img src="<?php echo e(URL::asset($product->gallery)); ?>" alt="<?php echo e($product->name); ?>" width="200px" height="200px"> </a>
        <div>
            <h2><?php echo e($product->name); ?></h2>
            <h3><?php echo e($product->price); ?> $</h3>
        </div>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/cartlist.blade.php ENDPATH**/ ?>