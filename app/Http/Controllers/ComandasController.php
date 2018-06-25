<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Usuario;
use App\Models\Producto;
use App\Models\Categoria;
use App\Repositories\Comandas;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;

class ComandasController extends Controller {

    protected $productos;
    protected $eventos;
    protected $comandas;

    public function __construct(Comandas $comandas) {

        $this->comandas = $comandas;
    }

    /* ----------------------------------------------------------------------+
      |   -Funcion para mostrar todas las comandas consumiendo desde una API  |
      |   -aminProd recibe la variable $productos.                            |
      +----------------------------------------------------------------------- */

    public function index() {

        $productos = Producto::all();
        $categoroias = Categoria::all();
        //Esto hace referencia a la clase productos donte esta la conexion a la API
        $comandas = $this->comandas->all();
        return view('AdminTheme.adminComandas', compact('productos','categorias','comandas'));
      
    }

    public function create() {

        $comandas = Comanda::all();
        $mesas = Mesa::all();
        $usuarios = Usuario::all();
        return view('AdminTheme.adComandas')->with(compact('comandas', 'mesas', 'usuarios'));
    }

    public function store(Request $request) {

        $comandas = new Evento();
        $comandas->idComanda = $request->idComanda;
        $comandas->idMesa = $request->idMEsa;
        $comandas->fechaEmision = $request->fechaEmision;
        $comandas->fechaFin = $request->fechaFin;
        $comandas->save();
        //Evento::create($request->all());
        //$eventos = $this->eventos->post();
        return redirect()->route('comandas.index');
    }

    /* ---------------------------------------------------------+
      |  * Funcion para generar un PDF                          |
      |  * Método loadView carga una vista para generar el PDF  |
      +--------------------------------------------------------- */

    public function vistaComandasPDF(Request $request) {
        $productos = Producto::all();
        $comandas = $this->comandas->all();
        view()->share('comandas',$comandas,'productos',$productos); //VARIABLE GLOBAL PRODUCTOS
        if ($request->has('descargar')) {
            $pdf = PDF::loadView('pdf.vista-comandas'); //CARGO LA VISTA
            return $pdf->download('toda-la-lista-de-productos.pdf'); //SUGERIR NOMBRE A DESCARGAR
        }
        return view('adminComandas'); //RETORNO A MI VISTA
    }

}
