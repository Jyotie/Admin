<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Repositories\Productos;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;

class ProductosController extends Controller
{
    protected $productos;
    protected $eventos;

    public function __construct(Productos $productos){

        $this->productos=$productos;
    }


    //Funcion que devuelve la vista de gestion/administracion de productos
    public function gestion(){
        
        return view('AdminTheme.gestion');
    }
    
    /*
        -Funcion para mostrar todos los productos consumiendo desde una API
        -aminProd recibe la variable $productos.
    */
    public function index(){
        
        $productos = Producto::all();
        $categorias = Categoria::all();
        //Esto hace referencia a la clase productos donte esta la conexion a la API
        //$productos = $this->productos->all();
        return view('AdminTheme.adminProd', compact('productos','categorias'));
    
    }


    public function show(Producto $idProducto){
        
        return view('AdminTheme.adminProd', compact('idProducto'));
    }


    public function create(){

        //$productos = $this->productos->post();
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('AdminTheme.adProductos')->with(compact('productos','categorias'));
    }


    public function store(Request $request){


        Producto::create($request->all());
        //dd($request->all());
        //return 'store';
        //$productos = $this->productos->post();
        return redirect()->route('productos.index');

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = Producto::find($id);
        $categorias = Categoria::all();
        return view('AdminTheme.editProductos')->with(compact('productos', 'categorias'));
    }

    public function update(Producto $productos){

        //
        $productos->Nombre = request()->Nombre;
        $productos->Descripcion = request()->Descripcion;
        $productos->Precio = request()->Precio;
        $productos->idCategoria = request()->idCategoria;
        $productos->save();
        
        //Producto::find($id)->update($request->all());
        return redirect()->route('productos.index');
 
        //Producto::find($id)->update($request->all());
        //return redirect()->route('productos.index')->with('success','Producto actualizado correctamente');
 
    }


    
    /*---------------------------------------------------------+
     |  * Funcion para generar un PDF                          |
     |  * Método loadView carga una vista para generar el PDF  |
     +---------------------------------------------------------*/
    public function vistaHTMLPDF(Request $request)
    {
        
        $productos = Producto::all();//OBTENGO TODOS MIS PRODUCTO
        $categorias = Categoria::all();
        view()->share('productos',$productos,'categorias',$categorias);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.vista-html-pdf');//CARGO LA VISTA
            return $pdf->download('toda-la-lista-de-productos.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('adminProd');//RETORNO A MI VISTA
    }
}
