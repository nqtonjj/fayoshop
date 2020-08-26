<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
//     return view('welcome');
// });

// Front-end

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'PageController@index')->name('trang-chu');

    Route::get('lien-he', 'PageController@contact')->name('contact');

    Route::get('blog', 'PageController@blog')->name('blog');

    Route::get('san-pham/{id?}', 'PageController@getproducts')->name('san-pham');

    Route::get('san-pham-thuong-hieu/{id?}', 'PageController@getBrand_products')->name('thuong-hieu');


    Route::get('detail/{id}', 'PageController@detail')->name('chi-tiet-san-pham');

    Route::get('register', 'PageController@register');

    Route::get('gio-hang', 'PageController@getCart')->name('gio-hang');
    Route::get('thanh-toan', 'PageController@getOrder')->name('thanh-toan');

    Route::get('dang-nhap', 'PageController@login')->name('dang-nhap');
    Route::post('dang-nhap', 'PageController@postLogin')->name('dang-nhap');
    Route::get('dang-ky', 'PageController@create')->name('dang-ky');
    Route::post('dang-ky', 'PageController@store')->name('dang-ky');
    Route::get('search', 'PageController@search')->name('search');
});



Route::resource('asset', 'ImageController', ['only' => ['show']]);

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('category', 'CategoryController');

    Route::resource('brands', 'BrandController');

    Route::resource('sliders', 'SliderController');
    Route::resource('slides', 'SlideController');

    Route::resource('product', 'ProductsController');

    Route::resource('users', 'UserController');

    Route::resource('customers', 'CustomerController');

    Route::resource('images', 'ImageController', ['except' => ['create, edit']]);
});


 // // cart
 Route::get('carts', 'PageController@indexCart')->name('carts');
 Route::get('/cart/addcart/{id}', 'PageController@addCart');
 Route::get('/cart/deleteCart/{id}', 'PageController@delCart');
 Route::get('/cart/updateCart/{id}', 'PageController@upCart');
 Route::get('/cart/delete', 'PageController@deleteCart');

 Route::post('/order', 'PageController@creatOrder')->name('order');

 // //End cart


//  Comment
Route::post('comment/{id?}', 'CommentController@postComment')->name('comment');


