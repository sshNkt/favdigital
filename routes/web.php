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



Auth::routes();

// Route::get('/home', 'HomeController@admin')->name('home');
Route::get('/', 'IndexController@index')->name('index');
Route::get('/cases/{id}', 'WorksController@show');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::post('/contact', 'IndexController@sendForm');
Route::get('checkSite', 'IndexController@checkSite');
