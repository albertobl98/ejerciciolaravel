<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EditarControlador extends Controller
{
    public function usuario($id){
        $usuario = DB::select('select * from usuarios where id = ?', [$id]);
    return view('editar.index', ['usuario' =>$usuario]);
    }
    public function editar(Request $request, $id){
        $nombre = $request-> input('nombre');
        $apellido = $request-> input('apellido');
        $usuario = $request-> input('usuario');
        DB::update('update usuarios set nombre=?, apellido=?, usuario=? where id=?',
    [$nombre, $apellido, $usuario, $id]);
    return redirect('/usuarios');
    }
}
