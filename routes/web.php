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

Route::get('/', function () {
    return view('welcome');
});

// Front-end

Route::get('index', 'PageController@index')->name('trang-chu');

Route::get('lien-he', 'PageController@contact')->name('contact');

Route::get('blog', 'PageController@blog')->name('blog');

Route::get('san-pham/{id?}', 'PageController@getproducts')->name('san-pham');

Route::get('detail/{id}', 'PageController@detail')->name('chi-tiet-san-pham');

Route::get('dang-ky', 'PageController@create')->name('dang-ky');
Route::post('dang-ky', 'PageController@store')->name('dang-ky');

Route::get('login', 'PageController@login')->name('dang-nhap');




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

    Route::resource('product', 'ProductsController');

    Route::resource('users', 'UserController');

    Route::resource('customers', 'CustomerController');

    Route::resource('images', 'ImageController', ['except' => ['create, edit']] );
});




