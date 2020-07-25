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

Route::get('index', 'PageController@index');

Route::get('contact', 'PageController@contact');

Route::get('blog', 'PageController@blog');

Route::get('products', 'PageController@products');

Route::get('detail', 'PageController@detail');

Route::get('register', 'PageController@register');

Route::get('login', 'PageController@login')->name('customLogin');


Route::resource('asset', 'ImageController', ['only'=>['show']]);



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('module.dashboard.index');
    })->name('home');
    Route::resource('category', 'CategoryController');


    Route::resource('product', 'ProductsController');

    Route::resource('users', 'UserController');

    Route::resource('customers', 'CustomerController');

    Route::resource('images', 'ImageController', ['except' => ['create, edit']] );
});




// ?? sao co login day, khac ontrollc khac controller ma



