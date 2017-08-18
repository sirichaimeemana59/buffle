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

Route::get('/', 'HomeController@index');
Route::get('/Login', 'HomeController@login');
Route::get('/index', 'HomeController@index');
Route::get('/LavelLogin', 'HomeController@LavelLogin');
Route::get('/LoginEmployee', 'HomeController@LoginEmployee');
Route::get('/LoginPerson', 'HomeController@LoginPerson');
Route::get('/LavelLogin', 'HomeController@LavelLogin');

