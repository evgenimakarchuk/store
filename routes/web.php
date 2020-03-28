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



Route::get('/','BaseController@getIndex')->middleware('lang');

Route::get('currency', 'BaseController@getCurrency');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('catalog/{slug}','CatalogController@getOne');

Route::get('/product/{id}','ProductController@getOne');

Route::get('basket','BasketController@getIndex');

Route::get('/basket/delete/{id}','BasketController@getDelete');

Route::post('/basket/edit/{id}','BasketController@postEdit');

Route::post('basket/order','OrderController@postIndex');

Route::resources(['feedback'=>'FeedbackController']);

Route::post('ajax/datalist','Ajax\DatalistController@postIndex');

Route::post('ajax/modal','Ajax\ModalController@postIndex');

Route::get('{url}', 'PageController@getIndex');


