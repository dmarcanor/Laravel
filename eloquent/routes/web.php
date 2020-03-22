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

Route::get('/', function () {
    return view('welcome');
});

//SELECT*
Route::get('/estudiantes', function(){
    $estudiantes = App\Estudiante::all();
    show($estudiantes);
});

//SELECT con WHERE y ORDERBY
Route::get('/testing', function(){
    $estudiantes = App\Estudiante::where('edad', '>=', 22)->orderBy('apellido', 'asc')->get();
    show($estudiantes);
});

//INSERT
Route::get('/create', function(){
    $estudiante = new App\Estudiante();
    
    $estudiante->nombre = "Juan";
    $estudiante->apellido = "Marcano";
    $estudiante->cedula = 25123456;
    $estudiante->edad = 25;

    $estudiante->save();
});

//UPDATE con ID
Route::get('/update', function(){
    $estudiante = App\Estudiante::find(27483191);
    
    $estudiante->edad = 21;

    $estudiante->save();
});

//UPDATE con WHERE
Route::get('/updateWhere', function(){
    $estudiante = App\Estudiante::where('apellido', 'Marcano')->where('nombre', 'Daniel')
        ->update(['edad' => 21, 'cedula' => 27483191]);
});

//DELETE
Route::get('/delete', function(){
    $estudiante = App\Estudiante::find(1234567);
    $estudiante->delete();
});

//DELETE con WHERE
Route::get('/deleteWhere', function(){
    if (App\Estudiante::where('apellido', 'Marcano')->where('nombre', 'Juan')
        ->delete())
        return "Registros eliminados satisfactoriamente";
    else
        return "Hubo un error";
});

//Metodo CREATE
Route::get('/create2', function(){
    App\Estudiante::create([
        'nombre' => 'Perla',
        'apellido' => 'Margarita',
        'cedula' => 1234568,
        'edad' => 8
    ]);
});

                                //SOFTDELETE

Route::get('/softDelete', function(){
    App\Estudiante::find(1234568)->delete();
});

//WithTrashed
Route::get('/withTrashed', function(){
    $estudiantes = App\Estudiante::withTrashed()->get();
    show($estudiantes);
});

//WithTrashed
Route::get('/withTrashedWhere', function(){
    $estudiantes = App\Estudiante::withTrashed()->where('edad', 21)->get();
    show($estudiantes);
});

//OnlyTrashed
Route::get('/trashed', function(){
    $estudiantes = App\Estudiante::onlyTrashed()->get();
    show($estudiantes);
});

//Restore
Route::get('/restore', function(){
    $estudiantes = App\Estudiante::withTrashed()->where('edad', 21)->restore();
});

//ForceDelete
Route::get('/forceDelete', function(){
    $estudiantes = App\Estudiante::withTrashed()->where('edad', 8)->forceDelete();
});


function show($estudiantes){
    foreach($estudiantes as $estudiante){
        echo "Nombre: " . $estudiante->nombre . "<br>" . "Apellido: " . $estudiante->apellido . "<br>" . 
            "Cedula: " . $estudiante->cedula . "<br>" . "Edad: " . $estudiante->edad . "<hr>";
    }
}