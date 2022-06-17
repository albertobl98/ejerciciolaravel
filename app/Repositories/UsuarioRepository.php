<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model
use App\Models\newModel;
/**
 * Class UsuarioRepository.
 */
class UsuarioRepository{
    public function all()
    {
        return newModel::all();
    }
}
