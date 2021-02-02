<?php

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
Route::get('index', [
	'as'=>'trang-chu',
	'uses'=>'App\Http\Controllers\PageController@getIndex'
]);
Route::get('loai-san-pham/{type?}', [
	'as'=>'loai-san-pham',
	'uses'=>'App\Http\Controllers\PageController@getLoaiSp'
]);
Route::get('chi-tiet-san-pham/{id?}', [
	'as'=>'chi-tiet-san-pham',
	'uses'=>'App\Http\Controllers\PageController@getChiTiet'
]);


Route::get('home', 'App\Http\Controllers\Admin\HomeController@getHome');

Route::group(['prefix'=>'category'], function(){
	Route::get('/', 'App\Http\Controllers\Admin\CategoryController@getCate');
	Route::post('/', 'App\Http\Controllers\Admin\CategoryController@postCate');
	Route::get('edit/{id}', 'App\Http\Controllers\Admin\CategoryController@getEditCate');
	Route::get('delete/{id}', 'App\Http\Controllers\Admin\CategoryController@getDeleteCate');
});

Route::group(['prefix'=>'product'], function(){
	Route::get('/', 'App\Http\Controllers\Admin\ProductController@getProduct'
	);
	Route::get('add', 'App\Http\Controllers\Admin\ProductController@getAddProduct'
	);
	Route::post('add', 'App\Http\Controllers\Admin\ProductController@postAddProduct'
	);

	Route::get('edit/{id}', 'App\Http\Controllers\Admin\ProductController@getEditProduct'
	);
	Route::post('edit/{id}', 'App\Http\Controllers\Admin\ProductController@postEditProduct'
	);

	Route::get('delete/{id}', 'App\Http\Controllers\Admin\ProductController@getDeleteProduct'
	);
});