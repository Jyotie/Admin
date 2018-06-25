<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Eventos;
use App\Models\Evento;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    protected $eventos;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Eventos $eventos)
    {
        $eventos = Evento::all();
        //$this->eventos=$eventos;
        return view('AdminTheme.master')->with(compact('eventos'));
    }
    
    public function perfil(){
 
        return view('AdminTheme.perfil');
    }

}
