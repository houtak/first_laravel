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
    return view('main_page');
});

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contacts', 'ContactController');

Route::apiResource('contacts', 'ContactController');

//////////////// apiResource is the shortcut of below route ///////////////////////////

//Route::get('/contacts', 'ContactController@index')->name('testing');
Route::get('/contacts/create', 'ContactController@create')->name('create');
//Route::post('/contacts', 'ContactController@store')->name('store');
//Route::get('/contacts/{contact}', 'ContactController@show')->name('show');
Route::get('/contacts/{contact}/edit', 'ContactController@edit')->name('edit_222_test');
//Route::put('/contacts/{contact}', 'ContactController@update')->name('update');
//Route::patch('/contacts/{contact}', 'ContactController@update')->name('update2');
//Route::delete('/contacts/{contact}', 'ContactController@destroy')->name('destroy');

//////////////// apiResource is the shortcut of above route ///////////////////////////



