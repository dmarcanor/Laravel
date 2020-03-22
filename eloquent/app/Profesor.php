<?php
//Coloco el softDeletes con la ayuda de laravel a traves del archivo migration
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;   //Importa el trait softDeletes

class Profesor extends Model
{
    use softDeletes;    //Usa al trait softDeletes

    protected $table = "profesores";    //Cambio la tabla a la que esta asociada este modelo (Profesors) por la convencion
    protected $primaryKey = "cedula";   //Cambio primaryKey default (profesores.id) de laravel a cedula
    protected $dates = ['deleted_at'];  //Sobreescribe un atributo $dates en Model para usar el deleted_at

}
