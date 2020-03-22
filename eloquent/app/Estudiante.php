<?php
//Puse manualmente la columna deleted_at agregandola en phpMyAdmin como una columna tipo timestamp
//aceptando valores NULL y colocando como valor default NULL
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   //Importa el trait softDeletes

class Estudiante extends Model
{
    use SoftDeletes;    //Usa al trait softDeletes

    protected $primaryKey = 'cedula';   //Cambio primaryKey default (estudiante.id) de laravel a cedula

    protected $fillable = [             //'Permiso' que necesita laravel para acceder a estos campos
        'nombre',                       // de la tabla de este modelo a traves del metodo create
        'apellido',
        'edad',
        'cedula'
    ];
    protected $dates = ["deleted_at"];  //Sobreescribe un atributo $dates en Model para usar el deleted_at
}
