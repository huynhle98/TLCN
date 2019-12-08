<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

  <!-- Page Content -->
<div class="container">
@yield('content')    <!-- /.row -->
</div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" id="contact">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 <br>Email: huynhlb225@gmail.com
    <br>Điện thoại: 0865774225 </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
