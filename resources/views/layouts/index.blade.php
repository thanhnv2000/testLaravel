
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 
  @yield('title')
</head>
<body>


<style type="text/css" media="screen">
  .col-fresh{position: relative;}
  .absolute{position: absolute;}
  .fresh-img{position: relative;}
  .color-white{color: white}
  .fresh-button{position: absolute;bottom: 300px;
  right: 75px;background: black}
  
</style>

  @include('layouts.client_share.header')

 
  @yield('noidung')

  @include('layouts.client_share.footer')

  @include('layouts.client_share.script')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>