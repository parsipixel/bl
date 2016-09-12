<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@index']);
Route::get('airports', ['as' => 'airports', 'uses' => 'IndexController@airports']);
Route::get('about-us', ['as' => 'about-us', 'uses' => 'IndexController@aboutUs']);
Route::get('contact-us', ['as' => 'contact-us', 'uses' => 'IndexController@contactUs']);
Route::post('contact-us', ['as' => 'post.contact-us', 'uses' => 'IndexController@sendMail']);

Route::get('reservation', ['as' => 'reservation', 'uses' => 'ReservationController@index']);
Route::get('reservation/from-airport', ['as' => 'from', 'uses' => 'ReservationController@from']);
Route::get('reservation/to-airport', ['as' => 'to', 'uses' => 'ReservationController@to']);
Route::get('reservation/from-your-location-to-another', ['as' => 'ltl', 'uses' => 'ReservationController@ltl']);
Route::post('reservation/reserve', ['as' => 'reserve', 'uses' => 'ReservationController@sendMail']);
