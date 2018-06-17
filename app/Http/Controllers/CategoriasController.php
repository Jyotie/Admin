<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{

    
    /*-------------------------------------+
    |  * Método REST para API              |
    |  * @return \Illuminate\Http\Response |
    --------------------------------------*/
    public function getCategorias()
    {
        // De este modo se obtienen todos los registros de Categorias.
        $categorias = Categorias::all();
        return response()->json($categorias);
    }
}
