<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){
            $table->BigIncrements('id');
            $table->String('title');
            $table->dateTime('NgayDang');
            $table->integer('LoaiTin');
            $table->String('TrangThai');
            $table->String('Description');
            $table->integer('Price');
            $table->String('TinhThanh');
            $table->String('QuanHuyen');
            $table->String('PhuongXa');
            $table->String('TenDuong');
            $table->string('Address');
            $table->bigInteger('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
