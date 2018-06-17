<?php



App::setLocale('es');
use App\Models\Producto;
use App\Models\Evento;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Categoria;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

Auth::routes();
//Route::get('/', 'HomeController@index');


Route::get('/', function () {
    return view('AdminTheme.master');
});


//Route::get('/','HomeController@index');

Route::get('/calendario', function () {
    return view('AdminTheme.calendario');
});

Route::get('/creditos', function () {
    return view('AdminTheme.creditos');
});

Route::get('/perfil', function () {
    return view('AdminTheme.perfil');
});

//-----------------AUTENTICACIÓN----------------------//
Route::get('/registro', 'RegistrationController@create');
Route::post('/registro', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
//-----------------AUTENTICACIÓN----------------------//




//------------------ADMINISTRACIÓN-------------------// 
//--->GENERAL:
Route::get('/gestion','ProductosController@gestion');

//--->PRODUCTOS:
Route::resource('productos', 'ProductosController');

//Route::get('/adminProductos', 'ProductosController@index');
Route::get('/adProductos', 'ProductosController@create');
Route::post('/adminProductos','ProductosController@store');
//--//
Route::get('/adminProductos/{id}','ProductosController@borrar');
Route::resource('adminProductos','ProductosController');



//--->EVENTOS:
Route::resource('eventos', 'EventosController');


//Route::get('/adminEventos','EventosController@index');
//Route::get('/adEventos','EventosController@create');
//Route::post('/adminEventos','EventosController@store');



//--->COMANDAS:
Route::get('/adminComandas', 'ComandasController@index');
Route::get('/adComandas','ComandasController@create');
Route::post('/adminComandas','ComandasController@store');


//--->MESAS
Route::get('/adminMesas','MesasController@index');
Route::get('/adMesas','MesasController@create');
Route::post('/adminMesas','MesasController@store');



//------------------ADMINISTRACIÓN-------------------// 



Route::get('descargar-productos', 'ProductosController@pdf');


Route::get('/tpv', function (){
    $productos = Producto::all();
    $categorias = Categoria::all();
    return view('layouts.tpv')->with(compact('productos','categorias'));
});

