<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BorrarControlador extends Controller
{
    public function borrar($id){
        DB::delete('delete from usuarios where id = ?', [$id]);
        return back();
    }
}
