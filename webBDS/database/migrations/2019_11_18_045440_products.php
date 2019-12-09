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
            $table->String('title')->nullable();
            $table->date('post_day')->nullable();
            $table->string('form')->nullable();
            $table->string('type')->nullable();
            $table->String('status')->nullable();
            $table->String('description')->nullable();
            $table->float('Price')->nullable();
            $table->String('province')->nullable();
            $table->String('district')->nullable();
            $table->String('ward')->nullable();
            $table->String('street')->nullable();
            $table->string('address')->nullable();
            $table->integer('area')->nullable();
            $table->string('unit')->nullable();
            $table->string('urlImg')->nullable();
            $table->string('name_contact')->nullable();
            $table->string('address_contact')->nullable();
            $table->string('phone_contact')->nullable();
            $table->string('email_contact')->nullable();
            $table->bigInteger('users_id')->unsigned()->index()->nullable();
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
