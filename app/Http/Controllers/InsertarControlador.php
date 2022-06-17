<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class InsertarControlador extends Controller
{
    //VAMOS A COGER LOS DATOS PASADOS POR POT USANDO LA VARIABLE $REQUEST Y LOS INSERTAMOS A TRAVÉS DEL METODO CREATE 

    public function insertar(Request $request){
        $nombre = $request-> input('nombre');
        $apellido = $request-> input('apellido');
        $usuario = $request-> input('usuario');
        $pass = $request-> input('pass');
        $array = array('nombre'=>$nombre, 'apellido'=>$apellido, 'usuario'=>$usuario, 'pass'=>$pass);
        DB::table('usuarios')->insert($array);
        return redirect('/');
    }
}
