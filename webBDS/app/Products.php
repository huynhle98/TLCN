<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $fillable=[
        'title','LoaiTin','TrangThai','Description',
        'TinhThanh','QuanHuyen','PhuongXa',
        'TenDuong','Address','Price','users_id'

    ];
    public $timestamps = true;


}
