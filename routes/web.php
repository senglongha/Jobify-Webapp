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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/','HomeController@home')->name('home');
Route::get('/our-service', 'HomeController@service')->name("our-service");
Route::get('/company', 'HomeController@company')->name("company");
Route::get('/contact-us', 'HomeController@contact')->name("contact-us");

