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
})->name('home');

Route::get('/products/{all}', 'ProductController@index');
Route::get('/products/{all}/create', 'ProductController@create');
Route::get('/products/{all}/{id}', 'ProductController@show');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{id}', 'UsersController@show');

Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/orders/create', 'OrdersController@create');
Route::get('/orders/{id}', 'OrdersController@show');
