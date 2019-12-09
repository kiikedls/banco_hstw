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

Route::get('/cobranza', 'CobranzaController@viewCobranza');

Route::post('/pagos_atrasados', 'CobranzaController@pagosAtrasados');

Route::get('/login', function () {
	return view('login');
});
Route::post('/sesion','UserController@iniciarsesion');

Route::get('/cerrar','UserController@cerrarsesion');

Route::get('/reporte', function (){
	return view('reportes');
});

Route::post('/buscar','UserController@buscar');

Route::get('/burodecredito','BuroController@viewBuro');



route::get('/tarjetas','CTarjeta@vista');
route::post('/infotarjeta1','CTarjeta@asigna1');
route::post('/infotarjeta2','CTarjeta@asigna2');

route::get('/prestamos',function (){
    return view('prestamo');
});
route::post('/verburo','Cprestamo@verifica_buro');

Route::get('/clientes','gestion@vista');
Route::get('/editar','gestion@editar');
Route::post('/pdf','gestion@vistapdf');
Route::post('/actualizar','gestion@actualizar');
Route::get('/eliminar','gestion@eliminar');
Route::post('/download','gestion@download');
Route::get('/calprestamo','gestion@calprestamo');
Route::post('/agregar','gestion@agregar');
