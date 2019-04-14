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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AuthAdmin\AdminController@index')->name('admin.home');

// Route Category
Route::get('/category/category', 'CategoryController@index')->name('category.category');
Route::post('/category/category', 'CategoryController@store')->name('category.store');
Route::patch('/category/{id}/category', 'CategoryController@update')->name('category.update');
Route::delete('/category/{id}/category', 'CategoryController@destroy')->name('category.destroy');

// Route Sub Category
Route::get('/category/sub', 'SubCategoryController@index')->name('subcategory.sub');
Route::post('/category/sub', 'SubCategoryController@store')->name('subcategory.store');
Route::patch('/category/{id}/sub', 'SubCategoryController@update')->name('subcategory.update');
Route::delete('/category/{id}/sub', 'SubCategoryController@destroy')->name('subcategory.destroy');

// Route Product
Route::get('/product/product', 'ProductController@index')->name('product.index');
Route::get('/product/add_product', 'ProductController@create')->name('product.create');
Route::post('/product/add_product', 'ProductController@store')->name('product.store');
Route::get('/product/{id}/show', 'ProductController@show')->name('product.show');
Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('/product/{id}/update', 'ProductController@update')->name('product.update');
Route::delete('/product/{id}/product', 'ProductController@destroy')->name('product.destroy');
