
<?php $__env->startSection('content'); ?>


<div class="posts">
    <h3><?php echo e($post_data['name']); ?></h3>
    <p><?php echo e($post_data['text']); ?></p>
    <?php if(Session::get('user')['email']=='admin@app.com'): ?>
        <a style="margin-left: 10px;" href="/delete/<?php echo e($post_data['id']); ?>">delete</a>
    <?php endif; ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/posts.blade.php ENDPATH**/ ?>