<?php

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
    return $request->user();
});

Route::get('/product', 'Api\ApiProductController@index');
Route::get('/productbycat/{product}', 'Api\ApiProductController@getByCat');
Route::get('/productbysub/{product}', 'Api\ApiProductController@getBySub');
Route::get('/category', 'Api\ApiProductController@getCat');
Route::get('/subcategory', 'Api\ApiProductController@getSub');

Route::post('/addcart', 'Api\ApiCartController@cartin');
Route::post('/addproductcart', 'Api\ApiCartController@productin');

Route::post('/register', 'Auth\RegisterController@create');

Route::post('/transaksi', 'Api\ApiCartController@bayar');
