<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{asset('')}}">Bất động sản</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('')}}">Trang chủ
              <!--<span class="sr-only">(current)</span>-->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Thông tin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dịch vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Liên hệ</a>
          </li>
        </ul>
        <a class="btn btn-secondary" href="{{asset('/dang-tin')}}">Đăng tin</a>
        <a class="btn btn-outline-secondary mr-1 ml-5" href="{{asset('/login')}}">Đăng nhập</a>
        <a class="btn btn-outline-secondary mr-3" href="{{asset('/register')}}">Đăng ký</a>

      </div>

    </div>

  </nav>


<div class="container">
@yield('content')
</div>


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
