
<?php $__env->startSection('content'); ?>

<div style="text-align:center;">
    <img width="400px" height="400px" src="<?php echo e(URL::asset($product['gallery'])); ?>" alt="<?php echo e($product['name']); ?>">
    <h2>Name: <?php echo e($product['name']); ?></h2>
    <h3>Price: <?php echo e($product['price']); ?> $</h3>
    <h4>Description: <?php echo e($product['description']); ?></h4>
    <h4>category: <?php echo e($product['category']); ?></h4>
    <br><br>
    <form action="/add_to_cart" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="product_id1" value="<?php echo e($product['id']); ?>">
        <button class="btn btn-primary">Add to cart</button>
    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/detail.blade.php ENDPATH**/ ?>