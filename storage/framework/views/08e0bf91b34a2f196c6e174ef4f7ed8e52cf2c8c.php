
<?php $__env->startSection('content'); ?>

<div style="margin:10%;">
    <h2>Price Table</h2><hr>
    <div style="display:flex; justify-content:space-around;">
        <h4>item</h4><h4>price</h4><hr>
    </div>
    <div style="display:flex; justify-content:space-around;">
        <h4>amount</h4><h4><?php echo e($total); ?>$</h4><hr>
    </div>
    <div style="display:flex; justify-content:space-around;">
        <h4>tax</h4><h4>0$</h4><hr>
    </div>
    <div style="display:flex; justify-content:space-around;">
        <h4>delivery</h4><h4>10$</h4><hr>
    </div>
    <div style="display:flex; justify-content:space-around;">
        <h4>total</h4><h4><?php echo e($total+10); ?>$</h4><hr>
    </div> 

    <form action="/orderplace" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="address" > 
        <input type="radio" name="payment" value="cash"> cash
        <input type="radio" name="payment" value="dar manzel"> dar manzel
        <input type="radio" name="payment" value="idpay"> idpay
        <button type="submit" name="order">Order</button>
    </form>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/ordernow.blade.php ENDPATH**/ ?>