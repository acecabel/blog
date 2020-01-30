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

Route::get('/posts', 'PostsController@index');
Route::get('/posts/edit', 'PostsController@edit');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/update', 'TasksController@update');

Route::get('/p2', 'ItemsController@create');
Route::get('/p3/p4', 'ProjectsController@update');
Route::get('/p5', 'PagesController@delete');
Route::get('/p6', 'PagesController@store');

Route::get('/members', 'MembersController@index');

Route::get('/bookings', 'BookingsController@index');
Route::get('/bookings/create', 'BookingsController@create');
Route::get('/bookings/update', 'BookingsController@update');
Route::get('/bookings/delete', 'BookingsController@delete');
Route::get('/bookings/filter', 'BookingsController@filter');

Route::get('/movies/create', 'MoviesController@create');
Route::post('/movies/store', 'MoviesController@store');
Route::get('/movies/edit', 'MoviesController@edit');
Route::post('/movies/update', 'MoviesController@update');



Route::get('laptops', 'LaptopsController@index');
Route::get('laptops/create', 'LaptopsController@create');
Route::get('/laptops/update', 'LaptopsController@update');
Route::get('/laptops/delete', 'LaptopsController@delete');
