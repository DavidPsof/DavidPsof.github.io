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

Route::get('/', 'DiscController@showAll');

Route::get('/plate/{discId}/edit/', 'DiscController@showById');

Route::get('/plate/{discId}/delete/', 'FormController@delete');

Route::post('plate/update/', 'FormController@update');

