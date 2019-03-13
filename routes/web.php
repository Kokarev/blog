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
Route::get('/home', 'HomeController@index')->name('home')->middleware('chekage');
Route::get('/check/email', 'HomeController@index')->name('home')->middleware('checkEV');
Route::get('/forSubscriber', 'HomeController@index')->name('forSubscriber')->middleware('chekage');
Route::put('post/{id}', function ($id) {})->middleware('role:editor');
//Route::get('/chekEmailValidation', 'HomeController@index')->name('chekEmailValidation')->middleware('chekEV');

//Route::resource('peoples', 'PeoplesController'); // Наш контроллер - сразу с набором возможностей

//

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
