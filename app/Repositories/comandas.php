<?php

/*-----------------------------------------------------------------------------------+
 |  *Ésta es la clase de productos que contiene la conexión con la API               |
 |  *Dentro de esta clase se definen los diferentes métodos de acceso a la API       |
 |      -all();     -->Muestra los elementos de la API                               |
 |      -post();    -->Introduce la informacion que enviamos a través de la API.     |
 |      -put();     -->Actualiza los elementos a través de la API.                   |
 |      -delete();  -->Elimina los elementos a través de la API.                     |
+------------------------------------------------------------------------------------*/
namespace App\Repositories;
use GuzzleHttp\Client;



/*----------------+
| Consumo de API  |
+-----------------*/
class Comandas {

    protected $client;

    public function __construct(){

        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8888/Slim2/',
            // Tiempo de espera para obtener una respuesta.
            'timeout'  => 2.0,
        ]);
    }


    //Función que devuelve todos los productos consumiendo desde la API
    public function all(){

        $response = $this->client->request('GET', 'index.php/comandas');
       
        //Descodifica el Json que se devuelve en la API y muestra el contenido
        return json_decode ( $response->getBody()->getContents() );
    }
    
   

    public function post(){

        $response = $this->client->request('POST','index.php/comandas');
        return json_decode( $response->getBody()->getContents());
    }

    public function store(){

        $data = new GuzzlePost();
        $data->name=$request->get('name');
        $data->save();


        return response()->json('Añadido correctamente');

    }

    public function delete(){

        $url = "http://myexample.com/api/posts/1";
        $request = $client->delete($url);
        $response = $request->send();

        dd($response);
    }

    

}