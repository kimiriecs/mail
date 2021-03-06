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

Route::get('/{any}', 'Api\HomeController@index')
    ->middleware('auth')
    ->where('any', '^(?!auth|api|download|storage).*$');


//auth
Route::get('/auth/redirect' , 'Auth\LoginController@redirect')->name('auth');
Route::get('/auth/callback' , 'Auth\LoginController@callback');
Route::get('/auth/logout' , 'Auth\LoginController@logout');
Route::get('/auth/authByToken' , 'Auth\LoginController@authByToken');

Route::get('/download' , 'Api\MessagesController@download');



