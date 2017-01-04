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
Route::get('/recipepage/{recipes}', 'RecipeController@show');
Route::get('/addrecipe', 'RecipeController@create');
Route::post('/', 'RecipeController@insert');
Route::post('/addcomment', 'RecipeController@insertComment');
Route::post('/deleteComment', 'RecipeController@deleteComment');
Route::post('/deleteRecipe', 'RecipeController@deleteRecipe');
Route::get('/insertRating', 'RecipeController@insertRating');



\Debugbar::enable(); //<-- Toont debugbar !!!! enable of disable!!!!