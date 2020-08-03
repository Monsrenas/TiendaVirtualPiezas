<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Producto extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'productos';
    protected $primaryKey = 'codigo';
    protected $fillable = [
							'codigo',
              'codigosAd',
              'descripciones',
              'medidas',
              'cod_fabricante',
              'categorias',
              'modelos'
              'fotos'
							 
							 
    ];


    public function fabricante()
      {
          return $this->belongsTo(Fabricante::class);
      }

}