<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comanda extends Model
{


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'comandasproductos';
    protected $primaryKey = 'idComandaProducto';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['idComanda','idProducto','Cantidad','Precio'];
     protected $hidden = ['idComandaProducto'];
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

    public function productos(){
        
        return $this->hasMany('App\Models\Producto', 'idProducto');
    }

    public function mesas(){
        
        return $this->belongsTo('App\Models\Mesa', 'idMesa');
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
