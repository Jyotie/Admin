<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;

class EventosController extends Controller
{



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

        $response = $client->request('GET', 'index.php/eventos');
       
        //Descodifica el Json que se devuelve en la API y muestra el contenido
        $eventos = json_decode ( $response->getBody()->getContents() );
       
       // var_dump($eventos);
        return view('AdminTheme.adminEventos', compact('eventos'));
    }


    
    public function create(){
        $eventos = evento::all();
        return view('AdminTheme.adEventos')->with(compact('eventos'));
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
        $eventos=Evento::find($id);
        return view('AdminTheme.adminEventos',compact('eventos'));
    }


    public function store(){
        
        Evento::create([
            'Nombre'=>request('Nombre'),
            'Descripcion'=>request('Descripcion'),
            'FechaInicio'=>request('FechaInicio'),
            'FechaFin'=>request('FechaFin'),
            'idUsuario'=>request('idUsuario'),
            'Lugar'=>request('Lugar')
        ]);

        return redirect('/adminEventos');
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
        $eventos = Evento::all(); 

        $pdf = PDF::loadView('AdminTheme.adminEventos', compact('eventos'));

        return $pdf->download('listado de eventos.pdf');
    }
    
}
