@extends('master')
@section('content')

@if($errors->any())
    @foreach($errors->all() as $err)
        <p style="color:red;text-align:center;">{{$err}}</p>
    @endforeach
@endif      

<div class="container mycls1" >
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
<form action="/register" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Register</button>
</form>
     </div>
</div>
</div>

@endsection