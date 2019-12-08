@extends('fontend.home')
@section('content')
<h3>Đăng tin</h3>

<h5 class="mt-5 ml-3">Lưu ý: (*) là thông tin bắt buộc</h5>
<form id="post_product" class="m-4 border pt-4 pl-4" method="post" enctype="multipart/form-data" >
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="form-group" >
        <h4 class="mb-4">Thông tin cơ bản</h4>

        <div class="form-group row">
            <label class="col-sm-2">Tiêu đề(*):</label>
            <input name="title" type="text" class="form-control col-sm-9 " id="title" placeholder="Tiêu đề">
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Hình thức(*)</label>
            <select id="formProduct" class="mb-1 mr-5 form-control col-sm-3 colorful-select dropdown-toggle">
                                <option value="" disabled selected hidden>Hình thức</option>
                                <option value="Nhà đất bán">Nhà đất bán</option>
                                <option value="Nhà đất cho thuê">Nhà đất cho thuê</option>
            </select>
            <label class="col-sm-2">Loại(*)</label>
            <select id="typeProduct" class="mb-1 form-control col-sm-3 colorful-select dropdown-toggle">
                                <option value="" disabled selected hidden>Loại nhà</option>
                                <option value="Nhà riêng">Nhà riêng</option>
                                <option value="Nhà chung cư">Nhà chung cư</option>
            </select>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Tỉnh/Thành phố(*)</label>
            <select id="read" name="province" onchange="readDistrict('{{$provinces}}');" class="mb-1 mr-5 form-control col-sm-3 colorful-select dropdown-toggle " >
                                <option id="read-data" value="0" disabled selected >Tỉnh/Thành phố</option>
                                @foreach($provinces as $province)
                                <option id="read-data" data-id="{{$province->id}}" value="{{$province->_name}}">{{$province->_name}}</option>
                                @endforeach
            </select>

            <label class="col-sm-2">Quận/Huyện(*)</label>
            <select id="readDis" name="district" onchange="readListward()" class="mb-1 form-control col-sm-3 colorful-select dropdown-toggle">
                                <option value="0" disabled selected></option>

            </select>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Phường/Xã(*)</label>
            <select id="readWard" name="ward" class="mb-1 mr-5 form-control col-sm-3 colorful-select dropdown-toggle">
                                <option value="0" disabled selected></option>
            </select>
            <label class="col-sm-2">Đường/Phố(*)</label>
            <select id="readStreet" name="street" class="mb-1 form-control col-sm-3 colorful-select dropdown-toggle">
                                <option value="0" disabled selected></option>

            </select>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Diện tích(*)</label>
            <input id="area" type="text" class="form-control col-sm-2 "  placeholder="Diện tích">
            <label class="ml-1">m<sup>2</sup></label>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Giá(*)</label>
            <input id="price" type="number" step="0.01" class="mb-1 mr-5 form-control col-sm-3 colorful-select dropdown-toggle">
            <label class="col-sm-2">Đơn vị(*)</label>
            <select id="unit" class="mb-1 form-control col-sm-3 colorful-select dropdown-toggle">
                                <option value="" disabled selected hidden>Đơn vị</option>
                                <option value="triệu VNĐ" >triệu VNĐ</option>
                                <option value="tỷ VNĐ" >tỷ VNĐ</option>
            </select>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Địa chỉ(*)</label>
            <input id="address" type="text" class="form-control col-sm-9 "  placeholder="Địa chỉ">
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Mô tả:</label>
            <textarea id="description" rows="5" class="form-control col-sm-9"></textarea>
        </div>
    </div>

    <hr>
    <div class="form-group mt-5">

            <h4>Hình ảnh</h4>
            <label class="alert alert-info">Bạn được chọn tối đa 4 hình và ít nhất 1 hình</label>
            <div class="row ml-5">
                <div class="input-group col-md-3 mt-3">
                    <div class="custom-file">
                        <input form ="uploadForm" id="select_file" name="select_file" type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon04">
                        <label form ="uploadForm" class="custom-file-label" for="inputGroupFile04" >Chọn file</label>
                    </div>
                </div>
            </div>
            <div class="ml-5 mt-2 col-md-3" >
                <input form="uploadForm" type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">
            </div>
            <div class="row">
            <div class="ml-5 mt-2 col-md-5">
                <div form="uploadForm" class="alert" id="message" style="display: none"></div>
                <span form="uploadForm" id="uploaded_image"></span>
            </div>
            <div class="ml-5 mt-2 col-md-5">
                <div form="uploadForm" class="alert" id="message2" style="display: none"></div>
                <span form="uploadForm" id="uploaded_image2"></span>
            </div>
            <div class="ml-5 mt-2 col-md-5">
                <div form="uploadForm" class="alert" id="message3" style="display: none"></div>
                <span form="uploadForm" id="uploaded_image3"></span>
            </div>
            <div class="ml-5 mt-2 col-md-5  ">
                <div form="uploadForm" class="alert" id="message4" style="display: none"></div>
                <span form="uploadForm" id="uploaded_image4"></span>
            </div>
            </div>

    </div>
    <hr>
    <div class="form-group mt-5">
        <h4 class="mb-4">Thông tin liên hệ</h4>
        <div class="form-group row">
            <label class="col-sm-2">Tên liên hệ(*):</label>
            <input id="name_contact" type="text" class="form-control col-sm-5 "  placeholder="...">
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Địa chỉ liên hệ:</label>
            <input id="address_contact" type="text" class="form-control col-sm-5 "  placeholder="...">
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Số điện thoại(*):</label>
            <input id="phone_contact" type="text" class="form-control col-sm-5 "  placeholder="...">
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Email:</label>
            <input id="email_contact" type="text" class="form-control col-sm-5 " placeholder="...">
        </div>

    </div>

    <div class="text-center mb-5">
        <button id="newpost" type="submit" class="btn btn-primary">Đăng tin</button>
    </div>
</form>
<form id="uploadForm" method="post" enctype="multipart/form-data">{{csrf_field()}}</form>
<form id="deleteImage" method="post" enctype="multipart/form-data">{{csrf_field('DELETE')}}
<meta name="csrf-token" content="{{ csrf_token() }}"></form>
<form id="deleteImage2" method="post" enctype="multipart/form-data">{{csrf_field('DELETE')}}
<meta name="csrf-token" content="{{ csrf_token() }}"></form>
<form id="deleteImage3" method="post" enctype="multipart/form-data">{{csrf_field('DELETE')}}
<meta name="csrf-token" content="{{ csrf_token() }}"></form>
<form id="deleteImage4" method="post" enctype="multipart/form-data">{{csrf_field('DELETE')}}
<meta name="csrf-token" content="{{ csrf_token() }}"></form>

<!--
<script>
    const arr=[];
    function getSelectValue(arrdistrict)
    {
        console.log();
        let district;

        var selected = document.getElementById("pronvince").value;


        for(var i=0;i<arrdistrict.length;i++)
        {
            if(arrdistrict[i]._province_id == selected)
            {
                district=arrdistrict[i];
                arr.push(district);
                document.getElementById("b").innerHTML =
                arrdistrict[0]._name;
                //console.log(arr[i]._name);
                //districts_selected.push(districts[i]);

            }

        }
        arrdistrict=arr;


        return arr;
        const res = arr;
        console.log(res);
        '<?php echo "<script>document.writeln(res);</script>";?>'

        //console.log($districts);

    }


</script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">


    //alert(abc);
    /*
    $('#read-data').on(onchange = function(){
        var abc = str.link(document.getElementById("read-data").value);


        $.get("{{URL::to('/dang-tin/readdistrict/'."1")}}",{id=abc},function(data){
            console.log(id);
        })
    })*/
    $('#post_product').on('submit',function(event){
        event.preventDefault();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var title = document.getElementById("title").value;
        var formProduct = document.getElementById("formProduct").value;
        var typeProduct = document.getElementById("typeProduct").value;
        var province = document.getElementById("read").value;
        var district = document.getElementById("readDis").value;
        var ward = document.getElementById("readWard").value;
        var street = document.getElementById("readStreet").value;
        var area = document.getElementById("area").value;
        var price = document.getElementById("price").value;
        var unit = document.getElementById("unit").value;
        var address = document.getElementById("address").value;
        var description = document.getElementById("description").value;
        var name_contact = document.getElementById("name_contact").value;
        var address_contact = document.getElementById("address_contact").value;
        var phone_contact = document.getElementById("phone_contact").value;
        var email_contact = document.getElementById("email_contact").value;
        var urlImg="";
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image2").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image3").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        else
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image2").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image3").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        else
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image3").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        else
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image2").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        else
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount != 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image2").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image3").firstElementChild.src;
        }
        else
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image3").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image2").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount != 2)
        {
            urlImg = document.getElementById("uploaded_image2").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image3").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image4").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount != 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image3").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount != 2)
        {
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
            urlImg = urlImg+" "+document.getElementById("uploaded_image2").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount == 2)
        {
            urlImg = document.getElementById("uploaded_image4").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount == 2
            && document.getElementById("uploaded_image4").childElementCount != 2)
        {
            urlImg = document.getElementById("uploaded_image3").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount == 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount != 2)
        {
            urlImg = document.getElementById("uploaded_image2").firstElementChild.src;
        }
        if(document.getElementById("uploaded_image").childElementCount == 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount != 2){
            urlImg = document.getElementById("uploaded_image").firstElementChild.src;
        }
        else if(document.getElementById("uploaded_image").childElementCount != 2
            && document.getElementById("uploaded_image2").childElementCount != 2
            && document.getElementById("uploaded_image3").childElementCount != 2
            && document.getElementById("uploaded_image4").childElementCount != 2){
            //alert("Bạn hãy chọn hình ảnh");
        }

        if(title != "" && formProduct != "" && typeProduct != "" && province != "" &&
        district!= "" && ward != "" && street != "" && area != "" && price != "" && unit != "" &&
        address != "" && description != "" && name_contact != "" &&
        address_contact != "" && phone_contact != "" && urlImg!= "")
        {

            //console.log(urlImg);
        //console.log(urlImg);
        //console.log(formProduct,typeProduct,province,district);

            $.ajax({
                type: 'post',
                url: "{{asset('/api/product/product')}}",
                data: {"title":title,"form":formProduct,"type":typeProduct,"province":province,"district":district,
                        "ward":ward,"street":street,"area":area,"price":price,"unit":unit,"address":address,
                        "description":description,"name_contact":name_contact,"address_contact":address_contact,
                        "phone_contact":phone_contact,"email_contact":email_contact,"urlImg":urlImg},
                method: "post",
                //dataType: 'JSON',
                //contentType: false,
                //cache: false,
                //processData: false,
                success:function(){
                    window.location="{{asset('/')}}";
                }
            });
            alert("Đăng tin thành công");
        }
        else{
            alert("Bạn vui lòng điền đầy đủ thông tin");
        }

    });
    $('#deleteImage').on('submit',function(event){
       event.preventDefault();
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       //var urlImg = document.getElementById("uploaded_image").firstElementChild.src;
        //var x = document.getElementById("uploaded_image").childElementCount;
        var urlImg = document.getElementById("uploaded_image").firstElementChild.src;
        $("#uploaded_image").children().remove();
        $('#message').css('display', 'none');
        /*
        $.ajax({
            type: 'delete',
            url: "http://localhost:8080/webBDS2/public/dang-tin/deleteImage",
            data: {"url":urlImg},
            method: "DELETE",
            //dataType: 'JSON',
            //contentType: false,
            cache: false,
            //processData: false,
            success: function(data){
                console.log(data.message);
            }
        });*/
    });
    $('#deleteImage2').on('submit',function(event){
       event.preventDefault();
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       //var urlImg = document.getElementById("uploaded_image").firstElementChild.src;
        //var x = document.getElementById("uploaded_image").childElementCount;
        var urlImg2 = document.getElementById("uploaded_image2").firstElementChild.src;
        $("#uploaded_image2").children().remove();
        $('#message2').css('display', 'none');
        /*
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/deleteImage",
            data: {"urlImg":urlImg2},
            method: "POST",
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                console.log(data.message);
            }
        });*/
        //console.log(urlImg2);
    });
    $('#deleteImage3').on('submit',function(event){
       event.preventDefault();
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       //var urlImg = document.getElementById("uploaded_image").firstElementChild.src;
        //var x = document.getElementById("uploaded_image").childElementCount;
        var urlImg3 = document.getElementById("uploaded_image3").firstElementChild.src;
        $("#uploaded_image3").children().remove();
        $('#message3').css('display', 'none');
        /*
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/deleteImage",
            data: {"urlImg":urlImg3},
            method: "POST",
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                console.log(data.message);
            }
        });*/
        //console.log(urlImg2);
    });
    $('#deleteImage4').on('submit',function(event){
       event.preventDefault();
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       //var urlImg = document.getElementById("uploaded_image").firstElementChild.src;
        //var x = document.getElementById("uploaded_image").childElementCount;
        var urlImg4 = document.getElementById("uploaded_image4").firstElementChild.src;
        $("#uploaded_image4").children().remove();
        $('#message4').css('display', 'none');
        /*
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/deleteImage",
            data: {"urlImg":urlImg3},
            method: "POST",
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                console.log(data.message);
            }
        });*/
        //console.log(urlImg2);
    });
    $('#uploadForm').on('submit',function(event){
       event.preventDefault();
       var x = document.getElementById("uploaded_image").childElementCount;
       var y = document.getElementById("uploaded_image2").childElementCount;
       var z = document.getElementById("uploaded_image3").childElementCount;
       var c = document.getElementById("uploaded_image4").childElementCount;
       //console.log(x);
       if(x==0){
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/uploadImage",
            method:"POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){

                $('#message').css('display', 'block');
                $('#message').html(data.message);
                if(data.uploaded_image!="")
                {
                    $('#message').removeClass("alert-danger");
                }
                $('#message').addClass(data.class_name);
                $('#uploaded_image').html(data.uploaded_image);
            }
        });
       }
       else
        if(y==0){
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/uploadImage2",
            method:"POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('#message2').css('display', 'none');
                $('#message2').css('display', 'block');
                $('#message2').html(data.message);
                if(data.uploaded_image!="")
                {
                    $('#message2').removeClass("alert-danger");
                }
                $('#message2').addClass(data.class_name);
                $('#uploaded_image2').html(data.uploaded_image);
            }
        });
       }
       else
        if(z==0){
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/uploadImage3",
            method:"POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('#message3').css('display', 'none');
                $('#message3').css('display', 'block');
                $('#message3').html(data.message);
                if(data.uploaded_image!="")
                {
                    $('#message3').removeClass("alert-danger");
                }
                $('#message3').addClass(data.class_name);
                $('#uploaded_image3').html(data.uploaded_image);
            }
        });
       }
       else{
        $.ajax({
            type: 'post',
            url: "http://localhost:8080/webBDS2/public/dang-tin/uploadImage4",
            method:"POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('#message4').css('display', 'none');
                $('#message4').css('display', 'block');
                $('#message4').html(data.message);
                if(data.uploaded_image!="")
                {
                    $('#message4').removeClass("alert-danger");
                }
                $('#message4').addClass(data.class_name);
                $('#uploaded_image4').html(data.uploaded_image);
            }
        });
       }
    });
    function readDistrict(arr){
        var name = document.getElementById("read").value;
        let arrprovince=<?php echo $provinces; ?>;
        var id=0;
        for(var i=0;i<arrprovince.length;i++){
            if(arrprovince[i]._name == name){
                id=arrprovince[i].id;
            }
        }
        console.log(id);
        $("#readDis").children().remove();
        $("#readWard").children().remove();
        $("#readStreet").children().remove();
        $.ajax({
                    type: 'get',
                    url: "http://localhost:8080/webBDS2/public/dang-tin/readdistrict",
                    data:{"id":id},
                    success: function(data){
                        var tr = $("<option/>");
                        tr.append($("<option/>",{
                            value : 0,
                            text : "",
                        }))
                        $('#readDis').append(tr);
                        $.each(data,function(i,value){
                        var tr = $("<option/>");
                        tr.append($("<option/>",{
                            id : value._name,
                            //name : value._name,
                            value : value.id,
                            text : value._name
                        }))
                        $('#readDis').append(tr);
                        })
                    }
                    });

    }
    function readListward(){
        var name = document.getElementById("read").value;
        let arrprovince=<?php echo $provinces; ?>;
        //console.log(arrprovince[0]._name);
        var id=0;
        for(var i=0;i<arrprovince.length;i++){
            if(arrprovince[i]._name == name){
                id=arrprovince[i].id;
            }
        }
        var id_province = id;
        var name_district = document.getElementById("readDis").value;
        var id_district = document.getElementById(name_district).value;
        $("#readWard").children().remove();
        $("#readStreet").children().remove();
        $.ajax({
                    type: 'get',
                    url: "http://localhost:8080/webBDS2/public/dang-tin/readward",
                    data: {'idprovince': id_province, 'iddistrict': id_district},
                    success: function(data){
                        var tr = $("<option/>");
                        tr.append($("<option/>",{
                            value : 0,
                            text : "",
                        }))
                        $('#readWard').append(tr);
                        $.each(data,function(i,value){
                        var tr = $("<option/>");
                        tr.append($("<option/>",{
                            value : value.id,
                            text : value._name
                        }))
                        $('#readWard').append(tr);
                        })
                    }
                });
        $.ajax({
                    type: 'get',
                    url: "http://localhost:8080/webBDS2/public/dang-tin/readstreet",
                    data: {'idprovince': id_province, 'iddistrict': id_district},
                    success: function(data){
                        console.log(data);
                        var tr = $("<option/>");
                        tr.append($("<option/>",{
                            value : 0,
                            text : "",
                        }))
                        $('#readStreet').append(tr);
                        $.each(data,function(i,value){
                        var tr = $("<option/>");
                        tr.append($("<option/>",{
                            value : value.id,
                            text : value._name
                        }))
                        $('#readStreet').append(tr);
                        })
                    }
                });
    }
</script>

@endsection()
