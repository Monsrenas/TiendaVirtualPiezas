<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Recepcion extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'recepcion';
    protected $primaryKey = 'codigo';
    protected $fillable = [
              'id',
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

      public function persona()
      {
          return $this->belongsTo(Usuario::class,'usuario','_id');
      }
}