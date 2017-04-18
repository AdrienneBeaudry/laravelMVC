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

Route::get('about', function() {
   return 'About content goes here.';
});

Route::get('index', function() {
    return 'index.html';
});

Route::get('about/directions/classes/{randomWord}', function($randomWord)
{
    return "Content about {$randomWord} classes go here.";
});

Route::get('cart/get', 'CartController@get');