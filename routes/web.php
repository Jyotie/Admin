<?php



App::setLocale('es');

use App\Models\Producto;
use App\Models\Evento;
use App\Models\Comanda;
use App\Models\Mesa;
use App\User;
use App\Models\Categoria;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

Auth::routes();


Route::resource('main','HomeController');
Route::get('/', 'HomeController@index');


/*Route::get('/', function () {
    return view('AdminTheme.master');
});*/


//Route::get('/','HomeController@index');

Route::get('/calendario', function () {
    return view('AdminTheme.calendario');
});

Route::get('/estadisticas',function(){
    return view('AdminTheme.estadisticas');
});

Route::get('/creditos', function () {
    return view('AdminTheme.creditos');
});

Route::get('/perfil', 'UserController@index');

Route::get('/ayuda',function(){
   
    return view('AdminTheme.ayuda');
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

Route::get('/adminProductos', 'ProductosController@index');
Route::get('/adminProductos/{idProducto}/editProducto','ProductosController@edit');
Route::get('/adProductos', 'ProductosController@create');
Route::post('/adminProductos','ProductosController@store');
//--//
Route::get('/adminProductos/{id}','ProductosController@borrar');
Route::resource('adminProductos','ProductosController');



//--->EVENTOS:
Route::resource('eventos', 'EventosController');


//Route::get('/adminEventos','EventosController@index');
Route::get('/adEventos','EventosController@create');
Route::post('/adminEventos','EventosController@store');



//--->COMANDAS:
Route::get('/adminComandas', 'ComandasController@index');
Route::get('/adComandas','ComandasController@create');
Route::post('/adminComandas','ComandasController@store');


//--->MESAS
Route::resource('mesas','MesasController');


Route::get('/adminMesas','MesasController@index');
Route::get('/adMesas','MesasController@create');
Route::post('/adminMesas','MesasController@store');



//------------------ADMINISTRACIÓN-------------------// 



//------------------DESCARGA DE DOCUMENTOS-------------------//
Route::get('vista-html-pdf',array(
    'as'=>'vistaHTMLPDF',
    'uses'=>'ProductosController@vistaHTMLPDF'
));

Route::get('vista-comandas',array(
    'as'=>'vistaComandasPDF',
    'uses'=>'ComandasController@vistaComandasPDF'
));
//------------------DESCARGA DE DOCUMENTOS-------------------//


Route::resource('mesa','MesasController');

Route::get('/mesa', function (){
    $productos = Producto::all();
    $categorias = Categoria::all();
    $mesas = Mesa::all();
    return view('layouts.mesas')->with(compact('productos','categorias','mesas'));
});

Route::get('/mesa/{id}/tpv',function(){
    $productos = Producto::all();
    $categorias = Categoria::all();
    return view('layouts.tpv')->with(compact('productos','categorias'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
