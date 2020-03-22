<?php

namespace App\Http\Controllers;

//Custom controller
class InicioController extends Controller{
    public function index(){
        return view ('welcome');
    }

    //otras funciones
}
