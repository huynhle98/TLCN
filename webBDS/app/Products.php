<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $fillable=[
        'title','form','type',
            //'status'=>$request->status,
            'description',
            'Price',
            'province',
            'district',
            'ward',
            'street',
            'address',
            'area',
            'unit',
            'urlImg',
            'name_contact',
            'address_contact',
            'phone_contact',
            'email_contact',
            'users_id'
    ];
    public $timestamps = true;
}
