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

Route::get('/', 'PagesController@index')->name('welcome');
// Route::get('about', 'PagesController@about')->name('about');
Route::get('gallery', 'PagesController@gallery')->name('gallery');
Route::get('services', 'PagesController@services')->name('services');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('contact', 'SendMailController@send')->name('send');

Auth::routes(['verify' => true, 'register' => false]]);

