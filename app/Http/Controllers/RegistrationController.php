<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistrationController extends Controller
{
    
    public function create(){

        return view('sessions.create');
    }


    public function store(){

        //Valida el formulario
        $this->validate(request(),[
            'Nombre'=>'required',
            'Email'=>'required|email',
            'Nick'=>'required',
            'Password'=>bcrypt(request('Password'))
        ]);

        //Crea y guarda el usuario
        $user = Usuario::create(request(['Nombre','Email','Nick','Password']));
    
        //Conecta el usuario
        auth()->login($user);

        //Redirige a la página principal
        return redirect('AdminTheme.master');
    }
}
