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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/name', 'VisitorsController@name');
Route::get('/home', 'VisitorsController@name');
Route::get('/weather', 'VisitorsController@index');


//Route::get('ajaxRequest', 'VisitorsController@ajaxRequest');

Route::post('ajaxRequest', 'VisitorsController@store');
Route::get('downlaod', 'VisitorsController@getDownload');


//Chat app routes start here

//Route::get('/', 'ChatsController@index');
//Route::get('messages', 'ChatsController@fetchMessages');
//Route::post('messages', 'ChatsController@sendMessage');

