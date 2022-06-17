<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UsuarioRepository;
use PhpParser\Builder\Function_;

class UsuarioController extends Controller
{
    //CREAMOS UN CONSTRUCTOS PARA LLMAR AL REPOSITORIO
    public function __construct(UsuarioRepository $usuarioRepository){
            $this->usuarioRepository = $usuarioRepository;
    }

    public function intex(){
        $usuarios = $this-> usuarioRepository -> all();

        return view('usuarios/index', [
            'misUsuarios' => $usuarios
        ]);
    }
    
}
