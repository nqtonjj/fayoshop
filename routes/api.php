<?php

use App\Model\Custom_attributes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return $request->user();
});


Route::group(['prefix' => '/', 'as' => 'api.', 'namespace' => 'API'], function () {
    Route::resource('carts', 'Cart\CartsController',  ['except' => ['create, edit', 'destroy']]);
    Route::group(['prefix' => 'order', 'namespace' => 'Cart'], function () {
        Route::get('/create_order', 'OrderController@createOrderId');
        Route::post('/add_item', 'OrderController@addOrderItem');
        Route::get('/{order_id}', 'OrderController@getOrderItems');
        Route::put('/{order_id}/{item_id}', 'OrderController@updateOrderItem');
        Route::delete('/{order_id}', 'OrderController@destroyOrder');
        Route::delete('/{order_id}/{item_id}', 'OrderController@destroyOrderItem');
    });
});
Route::delete('attr/{id}', function ($id) {
    Custom_attributes::where('id', $id)->delete();
})->name('api.attr');

Route::resource('product', 'ProductsController', ['only' => ['show']]);
