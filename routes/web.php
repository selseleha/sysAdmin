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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('more.index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/indexuser', function () {
    return view('user.index');
});

Route::get('/panel', function () {
    return view('layouts.user_panel');
});

Route::get('/upload','UploadController@uploadForm');
Route::post('/upload','UploadController@uploadSubmit');



Route::get('/infos/{id}', 'infocontroller@show');

Route::get('/user/{id}', 'usercontroller@show');

Route::get('/infos', 'infocontroller@list');

Route::get('/validation', 'infovalidation@list');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adds/create','addcontroller@create');

Route::post('/adds','addcontroller@store')->name('add.store');

Route::get('/adds/{id}/edit','addcontroller@edit');

Route::put('/adds/{id}','addcontroller@update')->name('user.update');

Auth::routes();

Route::get('/info/create','infocontroller@create');

Route::post('/info','infocontroller@store')->name('info.store');


Route::get('/infos/{id}/edit','infovalidation@edit');

Route::put('/infos/{id}','infovalidation@update')->name('info.update');

Route::get('/categories','categorycontroller@list');

Route::get('/categories/{id}','categorycontroller@show');

Route::post('/newcomment/{id}','CommentController@storecomment');
Route::get('/newcomment/list','CommentController@index');
Route::get('/newcomment/{id}/edit', 'CommentController@edit');
Route::put('/newcomment/{id}','CommentController@update')->name('newcomment.update');
Route::get('/newcommentaccept/{id}', 'CommentController@accept');
Route::get('/newcommentdelete/{id}', 'CommentController@destroy');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('gategory','categorycontroller');