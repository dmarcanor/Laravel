<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;          //Los controllers no traen este use 

class playerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nombre)
    {
        try{
            DB::insert("INSERT INTO `data`(id, nombre) VALUES (NULL, '{$nombre}')");
            return "Registro creado. \nNombre:{$nombre}";
        }catch(Exception $e){
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        try{
            $result = DB::select('SELECT* FROM `data`');
            var_dump($result);
            /*foreach($result as $res){
                
            }*/
        }catch(Exception $e){
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($table, $id, $nombre)
    {
        try{
            if(DB::update("UPDATE `{$table}` SET nombre = '{$nombre}' WHERE id = '{$id}'"))
                return "Registro actualizada";
            else
                return "Id no existe";
        }catch(Exception $e){
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($table)
    {
        //
    }

    public function deleteAll($table)
    {
        try{
            DB::delete("DELETE FROM `{$table}`");
            return "Tabla vaciada";
        }catch(Exception $e){
            return "Error: " . $e->getMessage();
        }
    }

    public function delete($table, $id)
    {
        try{
            if(DB::delete("DELETE FROM `{$table}` WHERE id = '{$id}'"))
                return "Registro eliminado";
            else
                return "Id no existe";
        }catch(Exception $e){
            return "Error: " . $e->getMessage();
        }
    }
}
