@extends('fontend.layout-page-login')
@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Bất động sản</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
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
            <a class="nav-link" href="#contact">Liên hệ</a>
          </li>
          <li class="nav-item ml-5 mt-1">
            <a class="btn btn-secondary" href="{{asset('/dang-tin')}}">Đăng tin</a>
          </li>
          <li class="nav-item dropdown ml-5 mr-5">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$user->name}}</span>
                <img class="img-profile rounded-circle" src="{{asset('/img/user-default.png')}}" style="object-fit:cover; height: 30px; width: 30px">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Thông tin cá nhân
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Quản lí tin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{asset('/')}}">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
                <!--
                <button form="logoutform" type="submit" class="dropdown-item" >
                  <i form="logoutform" class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </button>-->
              </div>
            </li>
        </ul>
      </div>

    </div>

</nav>
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <h4 class="mt-5">Tìm kiếm</h4>
            <form class="p-3 border mr-5" id="formSearch" method="get" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <select id="read_province" class="mb-1 form-control  mdb-select md-form md-outline colorful-select dropdown-toggle" >
                                <option id="read-data" value="0" disabled hidden selected >Tỉnh/Thành phố</option>
                                @foreach($provinces as $province)
                                <option id="read-data" data-id="{{$province->id}}" value="{{$province->_name}}">{{$province->_name}}</option>
                                @endforeach
                    </select>
                    <select id="type" class="mb-1 form-control  mdb-select md-form md-outline colorful-select dropdown-toggle">
                            <option value="0" disabled selected hidden>Loại nhà</option>
                            <option value="Nhà riêng">Nhà riêng</option>
                            <option value="Nhà chung cư">Nhà chung cư</option>
                    </select>
                    <select class="mb-1 form-control  mdb-select md-form md-outline colorful-select dropdown-toggle">
                            <option value="0" disabled selected hidden>Diện tích</option>
                            <option value="1">< 30 m<sup>2</sup></option>
                            <option value="2">30 - 100 m<sup>2</sup></option>
                            <option value="3">100 - 150 m<sup>2</sup></option>
                            <option value="3">>150 m<sup>2</sup></option>
                    </select>


                    <select class="mb-1 form-control  mdb-select md-form md-outline colorful-select dropdown-toggle">
                            <option value="0" disabled selected hidden>Giá</option>
                            <option value="1">< 500 triệu</option>
                            <option value="2">500 triệu - 1 tỷ</option>
                            <option value="3">1 - 2 tỷ</option>
                    </select>
                </div>
                <div class="text-center">
                <input type="submit" class="text-center btn btn-primary" value="Tìm kiếm">
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
                <img class="d-block img-fluid" src="{{asset('img/listbox5.jpg')}}" alt="First slide" style="object-fit:cover; height: 350px; width: 900px">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('img/listbox6.jpg')}}" alt="Second slide" style="object-fit:cover; height: 350px; width: 900px">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('img/listbox7.jpg')}}" alt="Third slide" style="object-fit:cover; height: 350px; width: 900px">
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
<div class="row">
        @for($i = sizeof($products)-1; $i >0; $i--)

        @endfor
        @foreach($products as $product)
        <div class="col-lg-4 col-md-6 mb-4"><!-- col-lg-4 col-md-1 mb-3 -->
            <div class="card h-100">
                <?php
                    $urlImg_list  = $product->urlImg;
                    $urlImg = explode(" ", $urlImg_list);
                ?>
              <a href="{{URL::to('/detail-product/'.$product->id)}}"><img class="img-thumbnail" src="{{$urlImg[0]}}" style="object-fit:cover; height: 250px; width: 350px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{URL::to('/detail-product/'.$product->id)}}">{{$product->title}}</a>
                </h4>
                <h5>Giá: {{$product->Price}} {{$product->unit}}</h5>
                <h5>Diện tích: {{$product->area}} m<sup>2</sup></h5>
                <h5>Khu vực: {{$product->district}},{{$product->province}}</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">
                <?php
                    $dates  = $product->created_at;
                    $date = explode("-", $dates);
                ?>
                <small class="text-muted">Ngày đăng: {{$date[2]}}/{{$date[1]}}/{{$date[0]}}</small>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        {{ $products->links() }}
        {{csrf_field()}}

</div>
<form id="logoutform" method="get" enctype="multipart/form-data">{{csrf_field()}}
<meta name="csrf-token" content="{{ csrf_token() }}"></form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
/*
$('#logoutform').on('submit',function(event){
        event.preventDefault();
        var user=<?php echo($user) ?>;
        var token=<?php echo($token) ?>;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Authorization":
            }
        });

        //console.log(token['id']);
        $.ajax({
            type: 'get',
            url: "{{asset('/api/auth/logout')}}",
            data: {"users":user},
            //dataType: 'JSON',
            //contentType: false,
            //cache: false,
            //processData: false,
            success:function(data){
                //window.location="{{asset('/')}}";
                console.log(data.message);
            }
        });
});
/*
function logout(user,token){
    //console.log(token);
    $.ajax({
            type: 'get',
            url: "{{asset('/api/auth/logout')}}",
            data: {"users":user},
            headers: {
            "Authorization": token},
            //dataType: 'JSON',
            //contentType: false,
            //cache: false,
            //processData: false,
            success:function(data){
                //window.location="{{asset('/')}}";
                console.log(data.message);
            }
        });
}*/
</script>
@endsection()
