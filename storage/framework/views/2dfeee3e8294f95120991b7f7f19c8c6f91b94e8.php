
<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($err); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>      

<form action="/register" method="post">
    <?php echo csrf_field(); ?>
    email: <input type="email" name="email"><br>
    username: <input type="test" name="username"><br>
    password: <input type="password" name="password"><br>
    <button type="submit" name="submit">Register</button><br>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/register.blade.php ENDPATH**/ ?>