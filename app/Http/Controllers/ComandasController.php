<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Usuario;
use App\Models\Producto;
use App\Models\Categoria;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;

class ComandasController extends Controller
{


    /*----------------------------------------------------------------------+
    |   -Funcion para mostrar todas las comandas consumiendo desde una API  |
    |   -aminProd recibe la variable $productos.                            |
    +-----------------------------------------------------------------------*/
    public function index(){

        /*----------------+
        | Consumo de API  |
        +-----------------*/
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8888/Slim2/',
            // Tiempo de espera para obtener una respuesta.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'index.php/comandas');
       
        //Descodifica el Json que se devuelve en la API y muestra el contenido
        $comandas = json_decode ( $response->getBody()->getContents() );
       

        return view('AdminTheme.adminComandas', compact('comandas'));
       
    }




    public function create(){

        $comandas = Comanda::all();
        $mesas = Mesa::all();
        $usuarios = Usuario::all();
        return view('AdminTheme.adComandas')->with(compact('comandas','mesas','usuarios'));
    }

    public function store(Request $request){

        $comandas = new Evento();
        $comandas->idComanda=$request->idComanda;
        $comandas->idMesa=$request->idMEsa;
        $comandas->fechaEmision=$request->fechaEmision;
        $comandas->fechaFin=$request->fechaFin;
        $comandas->save();
        //Evento::create($request->all());
        //$eventos = $this->eventos->post();
        return redirect()->route('comandas.index');

    }
}
