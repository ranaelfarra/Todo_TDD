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

Route::GET('/', ['as' => 'todo.index', 'uses' => 'portal\ToDoController@index']);

Route::POST('store', ['as' => 'todo.store', 'uses' => 'portal\ToDoController@store']);

Route::POST('done', ['as' => 'todo.done', 'uses' => 'portal\ToDoController@done']);

