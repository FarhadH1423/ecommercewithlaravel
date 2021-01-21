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
// Route::get('/test',function(){

// })->name('login');

Route::get('/', 'Front\FrontController@index')->name('front.index');
Route::get('/details/{id}', 'Front\FrontController@details')->name('front.details');
Route::get('/details/{id}', 'Front\FrontController@details')->name('front.details');

Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('/Admin', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/product','Admin\ProductController@index')->name('product.index');
Route::get('/product/create','Admin\ProductController@create')->name('product.create');
Route::post('/product/store','Admin\ProductController@store')->name('product.store');
Route::get('/product/edit/{id}','Admin\ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}','Admin\ProductController@update')->name('product.update');
Route::get('/product/delete/{id}','Admin\ProductController@delete')->name('product.delete');

Route::get('/category','Admin\CategoryController@index')->name('category.index');
Route::get('/category/create','Admin\CategoryController@create')->name('category.create');
Route::post('/category/store','Admin\CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}','Admin\CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}','Admin\CategoryController@update')->name('category.update');
Route::get('/category/delete/{id}','Admin\CategoryController@delete')->name('category.delete');

Route::get('/user/login', 'User\LoginController@showLoginForm')->name('user.login');
Route::post('user/login/submit', 'User\LoginController@login')->name('user.login.submit');
Route::get('user/logout', 'User\LoginController@logout')->name('user.logout');
Route::get('/User', 'User\DashboardController@index')->name('user.dashboard');

Route::get('admin/user','Admin\UserController@index')->name('userp.index');

Route::get('/logo','Admin\SettingController@index')->name('logo.index');
Route::get('/logo/edit/{id}','Admin\SettingController@edit')->name('logo.edit');
Route::post('/logo/update/{id}','Admin\SettingController@update')->name('logo.update');

Route::get('/banner','Admin\BannerController@index')->name('banner.index');
Route::get('/banner/create','Admin\BannerController@create')->name('banner.create');
Route::post('/banner/store','Admin\BannerController@store')->name('banner.store');
Route::get('/banner/edit/{id}','Admin\BannerController@edit')->name('banner.edit');
Route::post('/banner/update/{id}','Admin\BannerController@update')->name('banner.update');
Route::get('/banner/delete/{id}','Admin\BannerController@delete')->name('banner.delete');

Route::get('cart', 'User\CartController@cart')->name('cart.index');
Route::get('add-to-cart/{id}', 'User\CartController@addToCart')->name('cart.addtocart');
Route::get('removecart/{id}', 'User\CartController@remove')->name('cart.remove');
Route::get('increment/{id}', 'User\CartController@increment')->name('cart.increment');
Route::get('decrement/{id}', 'User\CartController@decrement')->name('cart.decrement');

Route::get('myorder', 'User\UserController@index')->name('user.order');
Route::get('order-details/{id}', 'User\UserController@details')->name('user.details');

Route::get('userorder', 'Admin\OrderController@index')->name('admin.order');
Route::get('user/order-details/{id}', 'Admin\OrderController@details')->name('order.details');

Route::get('order', 'User\OrderController@index')->name('order.index');
Route::post('/ordersubmit', 'User\OrderController@submit')->name('order.submit');

