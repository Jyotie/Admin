<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Repositories\Eventos;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;

class EventosController extends Controller
{
    protected $eventos;

    public function __construct(Eventos $eventos){

        $this->eventos=$eventos;
    }

    
    /*
        -Funcion para mostrar todos los productos consumiendo desde una API
        -aminProd recibe la variable $productos.
    */
    public function index(){
       
        //Esto hace referencia a la clase productos donte esta la conexion a la API
        $eventos = $this->eventos->all();
        return view('AdminTheme.adminEventos', compact('eventos'));
    
    }


    public function show(Evento $idEvento){
        

        return view('AdminTheme.adminEventos', compact('idEvento'));
    }


    public function create(){

        //$productos = $this->productos->post();
        $eventos = Evento::all();
        return view('AdminTheme.adEventos')->with(compact('eventos'));
    }


    public function store(Request $request){

        //$eventos = new Evento();
        //$eventos->Nombre=$request->Nombre;
        //$eventos->Descripcion=$request->Descripcion;
        //$eventos->FechaInicio=$request->FechaInicio;
        //$eventos->FechaFin=$request->FechaFin;
        //$eventos->Lugar=$request->Lugar;
        //$eventos->save();
        Evento::create($request->all());
        //$eventos = $this->eventos->post();
        return redirect()->route('eventos.index');

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEvento)
    {
        //
        $eventos=Evento::find($idEvento);
        return view('AdminTheme.editEventos',compact('eventos'));
    }

    public function update(Evento $eventos){

        //
        $eventos->Nombre = request()->Nombre;
        $eventos->Descripcion = request()->Descripcion;
        $eventos->FechaInicio = request()->FechaInicio;
        $eventos->FechaFin = request()->FechaFin;
        $eventos->Lugar = request()->Lugar;
        $eventos->save();
 
        //Evento::find($id)->update($request->all());
        return redirect()->route('eventos.index');
 
 
    }


    /*
        Funcion para eliminar los productos
    */
    public function destroy($idEvento){

        Evento::find($idEvento)->delete();
        return redirect()->route('eventos.index');

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

        $pdf = PDF::loadView('AdminTheme.adminEventos', compact('eventos'));

        return $pdf->download('listado de eventos.pdf');
    }
}
