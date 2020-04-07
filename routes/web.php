<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/errands', function () {
    return view('errands');
});

Route::get('/errands/create', 'ErrandController@create')->name('errands.create'); 
Route::post('/errands', 'ErrandController@store')->name('errands.store');

Route::get('/errands', 'ErrandController@index')->name('errands.index'); 
Route::delete('/errands/{id}', 'ErrandController@destroy')->name('errands.destroy');

Route::get('/errands/{id}', 'ErrandController@show')->name('errands.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
