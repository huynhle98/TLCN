@extends('fontend.home')
@section('content')

<div class="form-group mt-5">
    <?php
        $urlImg_list  = $product->urlImg;
        $urlImg = explode(" ", $urlImg_list);
        $countLink = sizeof($urlImg);
    ?>
    <div class="form-group row mb-4">
        <h2>{{$product->title}}</h2>
    </div>
    <div class="row mb-4">
        <div class="mr-3">
            @if($countLink > 0)
                <img class="img-thumbnail" src="{{$urlImg[0]}}" width="350">
            @endif
        </div>
        <div class="col-lg-7 mt-3">

            <div class="form-group row mb-1">
                <b>Khu vực:</b>
                <label>&nbsp;{{$product->district}},{{$product->province}}</label>
            </div>
            <div class="form-group row mb-1">
                <b>Giá:</b>
                <label>&nbsp;{{$product->Price}}  {{$product->unit}}</label>
            </div>
            <div class="form-group row mb-1">
                <b>Diện tích:</b>
                <label>&nbsp;{{$product->area}} m<sup>2</sup></label>
            </div>
        </div>



    </div>
    <hr noshade="noshade" class="mr-5">
    <div class="form-group row mb-1">
        <b>Thông tin mô tả:</b>
    </div>
    <pre style="font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif">{{$product->description}}</pre>
    <hr noshade="noshade" class="mr-5">
    <div class="form-group row mb-1 mt-5">
    <table class="table col-md-5 border mr-5">
        <thead style="background-color: #bcd7ec; color: #055699">
            <tr>
            <th scope="col">Thông tin liên hệ</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" style="color: #055699"><b>Tên liên hệ</b></td>
                <td>{{$product->name_contact}}</td>
            </tr>
            <tr>
                <td scope="row" style="color: #055699"><b>Địa chỉ liên hệ</b></td>
                <td>{{$product->address_contact}}</td>
            </tr>
            <tr>
                <td scope="row" style="color: #055699"><b>Số điện thoại</b></td>
                <td>{{$product->phone_contact}}</td>
            </tr>
            <tr>
                <td scope="row" style="color: #055699"><b>Email</b></td>
                <td>{{$product->email_contact}}</td>
            </tr>
        </tbody>
    </table>
    <table class="table col-md-6 border">
        <thead style="background-color: #bcd7ec; color: #055699">
            <tr>
            <th scope="col"  >Đặc điểm tin</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" style="color: #055699"><b>Hình thức</b></td>
                <td>{{$product->form}}</td>
            </tr>
            <tr>
                <td scope="row" style="color: #055699"><b>Loại tin</b></td>
                <td>{{$product->type}}</td>
            </tr>
            <tr>
                <td scope="row" style="color: #055699"><b>Địa chỉ</b></td>
                <td>{{$product->street}}, {{$product->ward}}, {{$product->district}}, {{$product->province}}</td>
            </tr>
        </tbody>
    </table>
    </div>
    <hr noshade="noshade" class="mr-5">
    <div class="form-group row mb-2 mt-5">
        <b>Hình ảnh minh họa:</b>
    </div>
    <div class="form-group row">
        @if($countLink > 0 && $countLink < 2)
            <img class="img-thumbnail col-md-6" src="{{$urlImg[0]}}">
        @elseif($countLink < 3)
            <img class="img-thumbnail col-md-6" src="{{$urlImg[0]}}">
            <img class="img-thumbnail col-md-6" src="{{$urlImg[1]}}">
        @elseif($countLink < 4)
            <img class="img-thumbnail col-md-6" src="{{$urlImg[0]}}">
            <img class="img-thumbnail col-md-6" src="{{$urlImg[1]}}">
            <img class="img-thumbnail col-md-6" src="{{$urlImg[2]}}">
        @elseif($countLink < 5)
            <img class="img-thumbnail col-md-6" src="{{$urlImg[0]}}">
            <img class="img-thumbnail col-md-6" src="{{$urlImg[1]}}">
            <img class="img-thumbnail col-md-6" src="{{$urlImg[2]}}">
            <img class="img-thumbnail col-md-6" src="{{$urlImg[3]}}">
        @else
            <div class="alert alert-warning" role="alert">
                Không có hình ảnh !
            </div>
        @endif
    </div>
    <div class="text-center mt-5">
        <?php
            $dates  = $product->created_at;
            $date = explode("-", $dates);
        ?>
        <b>Ngày đăng:</b>
        <label>&nbsp;{{$date[2]}}/{{$date[1]}}/{{$date[0]}}</label>
    </div>

</div>
@endsection()
