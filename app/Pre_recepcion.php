<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pre_recepcion extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'pre_recepcion';
    protected $primaryKey = 'codigo';
    protected $fillable = [
              'usuario',
              'proveedor',
							'documento',
              'fecha',
              'almacen',
              'codigo',
              'cantidad',
              'precio',
    ];

      public function producto()
      {
          return $this->belongsTo(Producto::class);
      }

}