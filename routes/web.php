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
Route::group(['prefix' => 'user1'], function () {
    Route::get('/','User1Controller@index')->name('user1.index');
    Route::get('/list', 'User1Controller@show')->name('user1.list');
    Route::get('/edit/{id}', 'User1Controller@edit')->name('user1.edit-form');
    Route::put('/edit/{id}', 'User1Controller@update')->name('user1.edit');
    Route::get('/create', 'User1Controller@create')->name('user1.create');
    Route::post('/store', 'User1Controller@store')->name('user1.store');
    Route::get('/delete/{id}', 'User1Controller@destroy')->name('user1.destroy');
});

Route::group(['prefix' => 'role'],function (){
    Route::get('/','RoleController@index')->name('role.index');
    Route::get('/list', 'RoleController@show')->name('role.list');
    Route::get('/edit/{id}', 'RoleController@edit')->name('role.edit-form');
    Route::put('/edit/{id}', 'RoleController@update')->name('role.edit');
    Route::get('/create', 'RoleController@create')->name('role.create');
    Route::post('/store', 'RoleController@store')->name('role.store');
    Route::get('/delete/{id}', 'RoleController@destroy')->name('role.destroy');
});
