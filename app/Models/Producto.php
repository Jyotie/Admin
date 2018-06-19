<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['idCategoria','Nombre','Descripcion','Precio'];
    // protected $hidden = ['updated_at','created_at'];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function categorias(){
        
        return $this->belongsTo(Categoria::class,'idCategoria');
    }

    public function comanda(){
        
        return $this->belongsTo(Comanda::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
