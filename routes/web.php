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
    return view('home');
});

Route::get('/login', function () {
	return view('login');
});
Route::post('/sesion','UserController@iniciarsesion');

Route::get('/cerrar','UserController@cerrarsesion');

Route::get('/reporte', function ()
{
	return view('reportes');
});

Route::post('/buscar','UserController@buscar');

Route::get('/burodecredito', function () {
    return view('burodecredito');
});



route::get('/tarjetas',function (){
    return view('tarjetas');
});
Route::get('/clientes','gestion@vista');
Route::post('/agregar','gestion@agregar');



