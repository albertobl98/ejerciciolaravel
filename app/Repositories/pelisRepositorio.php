<?php

namespace App\Repositories;

use App\Models\modelPelis;

//use Your Model

/**
 * Class pelisRepositorio.
 */
class pelisRepositorio 
{
    /**
     * @return string
     *  Return the model
     */
    public function all()
    {
        return modelPelis::all();
    }
}
