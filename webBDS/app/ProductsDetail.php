<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsDetail extends Model
{
    //
    protected $table = 'productsdetail';
    protected $fillable = [
        'product_id', 'MatTien',
        'Huong', 'DuongVao','HuongBanCong',
        'soPhongNgu',
        'soTang',
        'NoiThat'
    ];
}
