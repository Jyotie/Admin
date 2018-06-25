<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Categoria;
use App\Repositories\Productos;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade as PDF;

class UserController extends Controller
{
    
    /*
        -Funcion para mostrar todos los productos consumiendo desde una API
        -aminProd recibe la variable $productos.
    */
    public function index(){
        
        $usuarios = User::all();
        return view('AdminTheme.perfil', compact('usuarios'));
    
    }


    public function show(User $id){
        
        return view('AdminTheme.perfil', compact('id'));
    }


    public function create(){

        //
    }


    public function store(Request $request){

        //

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
        $usuarios = User::find($id);
        return view('AdminTheme.perfil')->with(compact('usuarios'));
    }

    public function update(User $usuarios){

        //
        $usuarios->name = request()->name;
        $usuarios->email = request()->email;
        $usuarios->password = request()->password;
        $usuarios->save();
        
        return view('AdminTheme.perfil');
 
    }


    /*
        Funcion para eliminar los productos
    */
    public function destroy($id){

        
        User::find($id)->delete();
        return view('AdminTheme.perfil');

    
    }

}
