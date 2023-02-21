 
<?php $__env->startSection('content'); ?>

<div class="container custom-product" >
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php echo e($item['id']==1?'active':''); ?>">
            <img class="mycls2" src="<?php echo e(URL::asset($item['gallery'])); ?>" alt="<?php echo e($item['name']); ?>">
            <div class="carousel-caption">
                <h3><?php echo e($item['name']); ?></h3>
                <p><?php echo e($item['description']); ?></p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>

<h2>trending</h2>
<div class="underSlide">
    
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="detail/<?php echo e($item['id']); ?>">
            <img src="<?php echo e(URL::asset($item['gallery'])); ?>" alt="<?php echo e($item['name']); ?>">
            <h3><?php echo e($item['name']); ?></h3>
            <p><?php echo e($item['description']); ?></p>
        </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/product.blade.php ENDPATH**/ ?>