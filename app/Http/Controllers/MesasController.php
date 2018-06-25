<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Mesa;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;




class MesasController extends Controller{



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

        $response = $client->request('GET', 'index.php/mesas');
       
        //Descodifica el Json que se devuelve en la API y muestra el contenido
        $mesas = json_decode ( $response->getBody()->getContents() );
       

        return view('AdminTheme.adminMesas', compact('mesas'));
    }

    public function create(){

        $mesas = Mesa::all();
        return view('AdminTheme.adMesas')->with(compact('mesas'));
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
        $mesas = Mesa::find($id);
        $productos = Producto::find($id);
        $categorias = Categoria::all();
        return view('layouts.tpv')->with(compact('mesas','productos', 'categorias'));
    }
    
    

    public function store(Request $request){
        
        Mesa::create($request->all());
        
        return redirect()->route('mesas.index');
    }
    
    
    /*
        Funcion para eliminar los productos
    */
    public function destroy($idMesa){

        
        Producto::find($idMesa)->delete();
        return redirect('/adminMesas');
    }
    
    public function mesas(){
       $mesas = Mesa::all();
       return view('layouts.mesas')->with(compact('mesas'));
    }
}

