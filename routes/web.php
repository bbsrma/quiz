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

Route::get('/', function () {
    return view('welcome');
});
//admin related route
Route::get('/dashboard','AdminController@dashboard');
Route::get('/createquiz','AdminController@createquiz');
Route::get('/question','AdminController@showquestion');
Route::get('/quiz','UserController@showhome');
Route::post('/createquiz','AdminController@createquizpost')->name('createquiz');
Route::post('/postquestion','AdminController@postquestion')->name('postquestion');

//user related route
Route::get('/userhome','UserController@showhome');
Route::get('/result','UserController@result');
