<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->users();
});

Route::group(['namespace'=>'Api',
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        Route::get('getidcurrentuser',"AuthController@getidcurrentuser");
    });
});

Route::group(['namespace'=>'Api',
    'prefix' => 'product'],
    function () {
    route::get('getallproducts','ProductController@getAllProducts');
    route::get('getproductsbyuser/{id}','ProductController@getProductsByUser');
    route::get('getproductsbyid/{id}','ProductController@getProductById');

    Route::post('product', 'ProductController@createProduct');
    Route::put('product/{id}', 'ProductController@updateProduct');
    Route::delete('product/{id}', "ProductController@delProduct");

});


