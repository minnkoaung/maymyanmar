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
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
Route::get('/search', 'PagesController@search');
Route::get('/services', 'PagesController@services');
Route::get('/training', 'PagesController@training');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/faqs', 'PagesController@faqs');
Route::get('/joinus', 'PagesController@joinus');
Route::get('/contact', 'PagesController@contact');
