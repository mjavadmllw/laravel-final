
<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li style="color:red;text-align:center;"><?php echo e($err); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<div style="text-align:center;">
    <h1>upload product</h1>
    <form action="admin-tools" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="text" name="pname" placeholder="product name"><br>
        <input type="text" name="price" placeholder="price"><br>
        <input type="text" name="category" placeholder="category"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="file" name="file"><br><br>
        <button type="submit">save product</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/admin_tools.blade.php ENDPATH**/ ?>