<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 


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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('index');
});

// Route::group(['prefix'  =>  'Admin'], function () {

//     Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
//     Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login.post');
//     Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
    
//     Route::get('/', function () {
//         return view('admin.dashboard.index');
//     });
    
//     });

    // Route::group(['middleware' => 'guest'], function(){
    //     Route::match(['get', 'post'],'/admin/login', 'App\Http\Controllers\Admin\LoginController@getAdminLogin');
    // });
    // Route::group(['middleware' => 'auth'], function(){
        Route::get('/admin', 'App\Http\Controllers\Admin\LoginController@getHome');
    // });


    //dangnhap|dangky
    Route::get('/dangnhap','App\Http\Controllers\Site\HomeController@dangNhap')->name('dangnhap');
    Route::post('/dangnhap','App\Http\Controllers\Site\HomeController@postdangNhap');

    Route::get('/dangky','App\Http\Controllers\Site\HomeController@dangKy')->name('dangky');
    Route::post('/dangky','App\Http\Controllers\Site\HomeController@postdangKy');
    //giohang
    Route::get('/cart','App\Http\Controllers\Site\HomeController@gioHang')->name('giohang');
    Route::post('/cart','App\Http\Controllers\Site\HomeController@postgioHang');

    //Nav
    Route::get('/collections','App\Http\Controllers\ProductController@collections')->name('collections');
    Route::post('/collections','App\Http\Controllers\ProductController@postcollections');

    Route::get('products/black-link','App\Http\Controllers\Site\HomeController@blacklink')->name('blacklink');
    Route::post('products/black-link','App\Http\Controllers\Site\HomeController@postblack-link');

    Route::get('/','App\Http\Controllers\ProductController@product');

    // Route::get('admin/login','App\Http\Controllers\Admin\LoginController@getAdminLogin');
    // Route::post('admin/login','App\Http\Controllers\Admin\LoginController@getAdminLogin');

// Route::get('admin', function () {
//     return view('admin/dashboard.index');
// });
