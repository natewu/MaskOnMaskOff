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
Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('/submit', 'App\Http\Controllers\PageController@submit');
Route::get('/rankings', 'App\Http\Controllers\PageController@rankings');
Route::get('/about', 'App\Http\Controllers\PageController@about');


Route::get('/getComments/{code}', 'App\Http\Controllers\CommentController@getComments');
Route::get('/newprofiledata', 'App\Http\Controllers\DataController@newprofiledata');

Route::post('sendsubmission', 'App\Http\Controllers\DataController@sendsubmission');
Route::post('sendcomment', 'App\Http\Controllers\CommentController@sendcomment');

Route::get('/${id}', 'App\Http\Controllers\ProfileController@profile');