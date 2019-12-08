<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\View\View;

Route::get('/', 'ProductController@index');
Route::get('/detail-product/{id}', 'ProductController@detail');
Route::get('/search/{province_selected}/{type_selected}', 'ProductController@findProducts');



Route::get('/admin', function () {
    return view('fontend/layout-admin');
});
Route::get('/dang-tin',function() {
    return View('fontend/post');
});
Route::get('/dang-tin', 'PostController@province');
Route::get('/dang-tin/readdistrict', 'AjaxController@readDistrict');
Route::get('/dang-tin/readward', 'AjaxController@readWard');
Route::get('/dang-tin/readstreet', 'AjaxController@readStreet');
Route::get('/dang-tin/read', 'AjaxController@read');

Route::get('/login', function () {
    return view('fontend/login');
})->middleware('access');
Route::get('/register', function () {
    return view('fontend/register');
});
Route::get('/forgot-pass', function () {
    return view('fontend/forgot-password');
});
Route::post('/dang-tin/uploadImage', 'AjaxController@uploadImage')->name('ajaxupload.upload');
Route::post('/dang-tin/uploadImage2', 'AjaxController@uploadImage2');
Route::post('/dang-tin/uploadImage3', 'AjaxController@uploadImage3');
Route::post('/dang-tin/uploadImage4', 'AjaxController@uploadImage4');
Route::delete('/dang-tin/deleteImage', 'AjaxController@deleteImage');

Route::get('/admin-users/{id}', 'UserController@getUser');


