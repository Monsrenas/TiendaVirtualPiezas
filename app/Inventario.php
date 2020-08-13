<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Inventario extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'inventarios';
    protected $primaryKey = 'codigo';
    protected $fillable = [
							'codigo',
              'producto',
							'almacen',
							'precio',
              'cantidad'
    					  ];
   public function detalle()
      {
          return $this->belongsTo(Producto::class, 'codigo','producto');
      }

}