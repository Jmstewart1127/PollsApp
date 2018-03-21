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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/polls/create', 'PollsController@create')->middleware('auth');

Route::post('/polls/store', 'PollsController@store');

Route::resource('polls', 'PollsController');

Route::get('/choices/create', 'ChoicesController@create');

Route::post('/choices/store', 'ChoicesController@store');

Route::resource('choices', 'ChoicesController');
