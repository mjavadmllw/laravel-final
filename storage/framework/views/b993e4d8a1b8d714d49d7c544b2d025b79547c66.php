<?php
// use Illuminate\Support\Facades\Session;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(URL::asset('bootstrap/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />
    <script type="text/javascript" src="<?php echo e(URL::asset('bootstrap/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('bootstrap/bootstrap.min.js')); ?>"></script>
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
   
     <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/master.blade.php ENDPATH**/ ?>