<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirputController;
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

Route::get('/', 'DirputController@index')->name('index');
Route::get('/dirput/admin/create', 'DirputController@create')->name('create');
Route::post('/dirput/admin/store', 'DirputController@store')->name('store');
Route::get('/dirput/admin/edit/{id}', 'DirputController@edit')->name('edit');
Route::post('/dirput/admin/update/{id}', 'DirputController@update')->name('update');
Route::get('/dirput/admin/delete/{id}', 'DirputController@destroy')->name('delete');




Route::get('/home', 'HomeController@index')->name('home');
