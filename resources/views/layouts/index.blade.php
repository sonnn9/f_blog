<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tin Tức</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="">
</head>
<body>
@include('layouts.header')
<div class="row">
<div class="col-md-2">
@include('layouts.menu')
</div>
<div class="col-md-10">
  @yield('content')
</div>
</div>
</body>
</html>
