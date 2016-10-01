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

Route::get('/', function () {
    return view('main');
});
Route::get('domains',['as' =>'getDomain', 'uses'=>'DomainController@getDomain']);
Route::get('test', function () {
      return view('domains.add');
});
Route::get('login', ['as'=>'getLogin', 'uses' =>'LoginController@getLogin']);
Route::post('login', ['as' =>'postLogin', 'uses'=>'LoginController@postLogin']);
Route::get('logout',['as'=>'getLogout', 'uses'=>'LoginController@getLogout']);
