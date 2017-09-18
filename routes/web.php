n<?php

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
    return view('app');
});

Route::post('/get-auth', function (){
    return response()->json(Auth::user());
});

Route::get('/ai', function () {
    return view('ai');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registernow', 'HomeController@ggg')->name('reg');
Route::post('/search', 'BusinessController@search')->name('search');
