<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\pelisRepositorio;
use PhpParser\Builder\Function_;

class pelisControlador extends Controller
{
    //CREAMOS UN CONSTRUCTOS PARA LLMAR AL REPOSITORIO
    public function __construct(pelisRepositorio $pelisRepositorio){
            $this->pelisRepositorio = $pelisRepositorio;
    }

    public function intex(){
        $peliculas = $this-> pelisRepositorio -> all();

        return view('peliculas/index', [
            'misPelis' => $peliculas
        ]);
    }
    
}