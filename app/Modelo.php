<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Modelo extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'modelos';
    protected $primaryKey = 'id_marca';
    protected $fillable = [
              'id_marca',
							'id_modelo',
							'nombre'
    ];


   public function versiones()
      {
          return $this->hasMany(Version::class,'id_modelo');
      }

}
