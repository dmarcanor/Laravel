<?php

use Illuminate\Support\Facades\Route;

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

//Llama a la vista welcome desde el metodo index del custom controlador inicioControlador
Route::get('/', 'InicioController@index');

//Es normal que haya una ruta /inicio o /home o /index que llame al metodo index del controlador home
Route::get('/inicio', 'InicioController@index');

//Las rutas tambien pueden ser establecidas con funciones anonimas
Route::get('sobre', function () {
    return 'Pagina sobre nosotros.';
});

//Pasa por parametro las variables marca y numero desde la URL de la pagina 
Route::get('/cars/{marca}/{numero}', function ($marca, $numero) {
    return "Este es el carro de marca " . $marca . " de numero " . $numero;
});

//Crea un conjunto de rutas para cada metodo en el controlador MotocyclesController -> php artisan route:list
Route::resource('/motocycles', 'MotocyclesController');