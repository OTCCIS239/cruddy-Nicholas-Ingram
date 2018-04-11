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


// Set up all the resource routes for my models
Route::resource('users', "UsersController");
Route::resource('orders', 'OrdersController');

// Can't use the Route::resource for the products since it's using a dynamic url based on category
Route::get('/products/{category}', 'ProductController@index');
Route::get('/products/{all}/create', 'ProductController@create');
Route::get('/products/{all}/{id}', 'ProductController@show');
