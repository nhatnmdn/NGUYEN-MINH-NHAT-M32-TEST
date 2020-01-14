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
Route::group(['prefix' => 'user'], function () {
    Route::get('/list', 'UserController@show')->name('user.list');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit-form');
    Route::put('/edit/{id}', 'UserController@update')->name('user.edit');
    Route::get('/create', 'UserController@create')->name('user.create-form');
    Route::post('/create', 'UserController@store')->name('user.create');
    Route::get('/delete/{id}', 'UserController@destroy')->name('user.destroy');
});

Route::group(['prefix' => 'role'],function (){
    Route::get('/list', 'RoleController@show')->name('role.list');
    Route::get('/{id}','RoleController@listDetailRole')->name('role.list-detail');
});
