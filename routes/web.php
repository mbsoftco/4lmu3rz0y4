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


//que pasa si las rutas deben tener muchas funcionalidades,
//para ello hay que usar controladores
Route::get('/', 'TestController@welcome');

//Route::get('/bienvenido', 'TestController@bienvenido');


//Que pasa si hay muchas rutas
Route::get('/prueba', function(){
return 'Soy la ruta de prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
