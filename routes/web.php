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
use App\user;
use App\flight;
use App\flight_user;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/addflight', 'flight_userController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myflights/{id}', 'userController@flights');

