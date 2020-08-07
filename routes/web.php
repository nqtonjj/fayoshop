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

    Route::get('detail/{id}', 'PageController@detail')->name('chi-tiet-san-pham');
    Route::get('search', 'PageController@search')->name('search');

    Route::get('dang-nhap', 'khachhang\LoginController@showLoginForm')->name('dang-nhap');
    Route::post('dang-nhap', 'khachhang\LoginController@login')->name('dang-nhap-submit');
    Route::post('dang-xuat', 'khachhang\LoginController@logout')->name('dang-xuat');


    // // Reg
    // Route::get('dang-ky', 'khachhang\RegisterController@showRegistrationForm')->name('dang-ky');
    // Route::post('dang-ky', 'khachhang\RegisterController@showRegistrationForm')->name('dang-ky-submit');

});



Route::resource('asset', 'ImageController', ['only'=>['show']]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('module.dashboard.index');
    })->name('home');
    Route::resource('category', 'CategoryController');

    Route::resource('brands', 'BrandController');

    Route::resource('sliders', 'SliderController');
    Route::resource('slides', 'SlideController');

    Route::resource('product', 'ProductsController');

    Route::resource('users', 'UserController');

    Route::resource('customers', 'CustomerController');

    Route::resource('images', 'ImageController', ['except' => ['create, edit']]);
});
