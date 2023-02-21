<?php
// use Illuminate\Support\Facades\Session;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('bootstrap/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/bootstrap.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
    @include('header') 
   
     @yield ('content')
    @include('footer')
</body>
</html>