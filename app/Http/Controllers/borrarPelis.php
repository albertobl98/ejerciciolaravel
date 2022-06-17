<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class borrarPelis extends Controller
{
    public function borrar($id){
        DB::delete('delete from peliculas where id = ?', [$id]);
        return back();
    }
}
