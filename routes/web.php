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
    

//     // return view('welcome', compact('users'));
// });

Route::get('/', 'UsersController@index');

Route::get('/stories', 'UsersController@story');

Route::get('/maker', 'UsersController@maker');

Route::post('/maker', 'StoryController@store');

 