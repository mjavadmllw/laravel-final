<?php
use App\Http\Controllers\productController;
$total=productController::cartitem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="/cartlist">cart(<?php echo e($total); ?>)</a>
  <a class="navbar-brand" href="#" style="padding-left:30px">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Orders</a>
      </li>
      <li class="nav-item dropdown">
      <?php if(Session::has('user')): ?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo e(Session::get('user')['name']); ?>

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
          <?php
            $email=Session::get('user')['email'];
          ?>
          <?php if($email=='admin@app.com'): ?>
            <a class="dropdown-item" href="/admin-tools">Admin Tools</a>
          <?php endif; ?> 
        </div>  
      <?php else: ?>
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   
        user account
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/login">Login</a>
        <a class="dropdown-item" href="/register">Register</a>
      </div>
      <?php endif; ?>
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/downloads">downloads</a>
      </li>  
    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a href="/live-search" class="btn btn-info" style="margin-left:10px">go to live search</a>
    
  </div>
</nav><?php /**PATH C:\xampp\htdocs\laravel_1\resources\views/header.blade.php ENDPATH**/ ?>