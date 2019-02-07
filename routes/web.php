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

Route::get('foo', function () {
    return 'Hello World';
});

// recibir parametros dentro de cada ruta
	/*Route::get('/name/{name}',function($name){
		return "Yo Soy ".$name;
	});*/

	/*Route::get('/name/{name}/lastname/{lastname}',function($name,$lastname){
		return "Yo Soy ".$name." ".$lastname;
	});*/

	/*Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname=null){
		return "Yo Soy ".$name." ".$lastname;
	});*/

	/*Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname='Yepez'){
		return "Yo Soy ".$name." ".$lastname;
	}); */

// referirce a una ruta por controlador
	Route::get('prueba/{name}','PruebaController@prueba');
	Route::resource('trainers','TrainerController');

	
