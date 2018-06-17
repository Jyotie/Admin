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
       
        //Esto hace referencia a la clase productos donte esta la conexion a la API
        $productos = $this->productos->all();
        $eventos = $this->productos->getEventos();
        return view('AdminTheme.adminProd', compact('productos','eventos'));
    
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

        return redirect()->route('productos.index')->with('success','Producto creado correctamente');

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
        $productos=Producto::find($id);
        return view('productos.edit',compact('productos'));
    }





    public function update(){

        //
        //$productos = $this->productos->post();
        //return view('AdminTheme.adminProd', compact('productos'));
        Producto::find($id)->update($request->all());
        return redirect()->route('productos.index')->with('success','Producto actualizado correctamente');
 
    }


    /*
        Funcion para eliminar los productos
    */
    public function destroy($idProducto){

        
        Producto::find($idProducto)->delete();
        return redirect()->route('productos.index')->with('success','Encuesta eliminada correctamente');

    
    }




    /*---------------------------------------------------------+
     |  * Funcion para generar un PDF                          |
     |  * Método loadView carga una vista para generar el PDF  |
     +---------------------------------------------------------*/
    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $productos = Producto::all(); 

        $pdf = PDF::loadView('AdminTheme.adminProd', compact('productos'));

        return $pdf->download('listado.pdf');
    }
}
