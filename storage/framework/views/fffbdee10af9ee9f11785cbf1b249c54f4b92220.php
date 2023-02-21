
<?php $__env->startSection('content'); ?>


<div class="posting_box">
    <form action="makepost" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="text" name="text" placeholder="your message ..."><br><br>
        <button type="submit">   Post   </button>
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/makepost.blade.php ENDPATH**/ ?>