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
Route::resource('games', 'GamesController');
Route::resource('consoles', 'ConsolesController');
Route::resource('accessories', 'AccessoriesController');
