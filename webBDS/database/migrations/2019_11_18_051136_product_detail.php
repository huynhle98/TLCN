<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsDetail', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('products_id')->unsigned()->index();
            $table->foreign('products_id')->references('id')->on('products');
            $table->string('MatTien');
            $table->string('Huong');
            $table->string('DuongVao');
            $table->string('HuongBanCong');
            $table->integer('soPhongNgu');
            $table->integer('soTang');
            $table->string('NoiThat');

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
