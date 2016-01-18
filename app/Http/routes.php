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

Route::get('/',['middleware'=>'auth', function () {
    return view('template');
}]);

Route::get('/home', function () {
    return view('template');
});

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+'], 'middleware'=>'auth'], function() {

	Route::get('index','ProdutosController@index');

	Route::get('create','ProdutosController@create');

	Route::post('store','ProdutosController@store');

	Route::get('{id}/destroy','ProdutosController@destroy');

	Route::get('{id}/edit','ProdutosController@edit');

	Route::put('{id}/update','ProdutosController@update');

});

Route::group(['prefix'=>'ncm', 'middleware'=>'auth'], function() {

	Route::get('index','NCMController@index');

	Route::get('create','NCMController@create');

	Route::post('store','NCMController@store');

	Route::get('{id}/destroy','NCMController@destroy');

	Route::get('{id}/edit','NCMController@edit');

	Route::put('{id}/update','NCMController@update');	

});

Route::group(['prefix'=>'parceiros', 'middleware'=>'auth'], function() {

	Route::get('index','ParceirosController@index');

	Route::get('create','ParceirosController@create');

	Route::post('store','ParceirosController@store');

	Route::get('{id}/destroy','ParceirosController@destroy');

	Route::get('{id}/edit','ParceirosController@edit');

	Route::put('{id}/update','ParceirosController@update');	

});

Route::group(['prefix'=>'nfentradas', 'middleware'=>'auth'], function() {

	Route::get('index','NFEntradaController@index');

	Route::get('{id}/show','NFEntradaController@show');

	Route::get('create','NFEntradaController@create');

	Route::post('store','NFEntradaController@store');

	Route::get('{id}/destroy','NFEntradaController@destroy');

	

});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');