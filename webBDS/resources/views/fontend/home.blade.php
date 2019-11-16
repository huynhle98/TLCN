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
          <li class="nav-item active">
            <a class="nav-link" href="#">Trang chủ
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Thông tin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dịch vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Liên hệ</a>
          </li>

        </ul>
        <button type="button" class="btn btn-secondary">Đăng tin</button>
        <button type="button" class="btn btn-outline-secondary mr-1 ml-5">Đăng nhập</button>
        <button type="button" class="btn btn-outline-secondary mr-3">Đăng ký</button>
      </div>

    </div>

  </nav>

  <!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

        <h4 class="mt-5">Tìm kiếm</h4>
            <form class="p-3 border mr-5 ">
                <div class="form-group">
                    <input type="text" class="form-control mb-1" id="exampleInputEmail1"    placeholder="Địa điểm">
                    <div class="dropdown mb-1">
                        <button class=" form-control dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Loại nhà
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Nhà riêng</a>
                            <a class="dropdown-item" href="#">Nhà chung cư</a>
                        </div>
                    </div>
                    <div class="dropdown mb-1">
                        <button class=" form-control dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Diện tích
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">< 30 m<sup>2</sup></a>
                            <a class="dropdown-item" href="#">30 - 100 m<sup>2</sup></a>
                            <a class="dropdown-item" href="#">100 - 150 m<sup>2</sup></a>
                            <a class="dropdown-item" href="#">> 150 m<sup>2</sup></a>
                        </div>
                    </div>
                    <div class="dropdown mb-1">
                        <button class=" form-control dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Giá
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">< 500 triệu</a>
                            <a class="dropdown-item" href="#">500 triệu - 1 tỷ</a>
                            <a class="dropdown-item" href="#">1 - 2 tỷ</a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                <button type="submit" class="text-center btn btn-primary ">Tìm kiếm</button>
                </div>
        </form>

        </div>
      <!-- /.col-lg-3 -->

        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-interval="4000" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active ">
                <img class="d-block img-fluid" src="{{asset('img/listbox1.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('img/listbox1.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>



        <!-- /.row -->
        </div>
      <!-- /.col-lg-9 -->

    </div>
    <div class="mt-3 mb-3 border " >
    </div>
    @yield('content')    <!-- /.row -->
</div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
