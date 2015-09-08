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

Route::get('/', 'WelcomeController@index');
Route::get('articulos/crear','ArticulosController@create');
Route::post('articulos','ArticulosController@store');
Route::get('contacto','PaginasController@contacto');
Route::get('acerca','PaginasController@acerca');

Route::resource('articulos','ArticulosController');

//Route::get('home', 'HomeController@index');
//Route::get('articulos', 'ArticulosController@index');
//Route::get('articulos/{id}', 'ArticulosController@show');
//
//
//Route::get('articulos/show',function(){
//	$articulos= App\Articulos::all();
//	return $articulos;
//});
//
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
