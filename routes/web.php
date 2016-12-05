<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'RecipeController@index');
Route::get('overview', 'RecipeController@index');
Route::get('/addrecipe', 'RecipeController@view');
Route::post('/', 'RecipeController@insert');
