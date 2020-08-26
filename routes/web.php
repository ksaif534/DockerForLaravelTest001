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

Route::group(['prefix'=>'form','namespace'=>'Forms'], function () {
    Route::get('/get-form-data','FormController@index')->name('forms.index');
    Route::get('/create-form-data','FormController@create')->name('forms.create');
    Route::post('/post-form-data','FormController@store')->name('forms.store');
    Route::get('/show-form-data/{formData}','FormController@show')->name('forms.show');
    Route::get('/edit-form-data/{formData}','FormController@edit')->name('forms.edit');
    Route::put('/put-form-data/{formData}','FormController@update')->name('forms.update');
    Route::delete('/delete-form-data/{formData}','FormController@destroy')->name('forms.delete');
});
