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

    Route::group(['prefix' => 'produce'], function () {
        Route::get('', 'ProduceController@index')->name('admin.produce');
        Route::get('create', 'ProduceController@create')->name('admin.produce.create');
        Route::post('store', 'ProduceController@store')->name('admin.produce.store');
        Route::get('{id}/edit', 'ProduceController@edit')->name('admin.produce.edit');
        Route::put('{id}/update', 'ProduceController@update')->name('admin.produce.update');
        Route::get('{id}/destroy', 'ProduceController@destroy')->name('admin.produce.destroy');
    });

    Route::group(['prefix' => 'statusOfDemand'], function () {
        Route::get('', 'StatusOfDemandController@index')->name('admin.statusOfDemand');
        Route::get('create', 'StatusOfDemandController@create')->name('admin.statusOfDemand.create');
        Route::post('store', 'StatusOfDemandController@store')->name('admin.statusOfDemand.store');
        Route::get('{id}/edit', 'StatusOfDemandController@edit')->name('admin.statusOfDemand.edit');
        Route::put('{id}/update', 'StatusOfDemandController@update')->name('admin.statusOfDemand.update');
        Route::get('{id}/destroy', 'StatusOfDemandController@destroy')->name('admin.statusOfDemand.destroy');
    });

});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
