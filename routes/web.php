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

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix' => 'state'], function () {
        Route::get('', 'StateController@index')->name('admin.state');
        Route::get('create', 'StateController@create')->name('admin.state.create');
        Route::post('store', 'StateController@store')->name('admin.state.store');
        Route::get('{id}/edit', 'StateController@edit')->name('admin.state.edit');
        Route::put('{id}/update', 'StateController@update')->name('admin.state.update');
        Route::get('{id}/destroy', 'StateController@destroy')->name('admin.state.destroy');
    });

    Route::group(['prefix' => 'city'], function () {
        Route::get('', 'CityController@index')->name('admin.city');
        Route::get('create', 'CityController@create')->name('admin.city.create');
        Route::post('store', 'CityController@store')->name('admin.city.store');
        Route::get('{id}/edit', 'CityController@edit')->name('admin.city.edit');
        Route::put('{id}/update', 'CityController@update')->name('admin.city.update');
        Route::get('{id}/destroy', 'CityController@destroy')->name('admin.city.destroy');
    });

});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
