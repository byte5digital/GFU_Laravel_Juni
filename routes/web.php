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

Route::get('/', 'HomeController@showIndex')->name('web.home');
Route::get('/brand/{brand_name}', 'HomeController@showBrand')->name('web.brand');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/project', 'ProjectController@store')->name('project.store');
Route::get('/project/new', 'ProjectController@newView')->name('project.new');