<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Marca;
use App\Modelo;
use App\Categoria;
use App\Fabricante;
use App\Generacion;

class MongoController extends Controller
{
    //

    public function Clase($ind)
    {
        switch ($ind) {
          case 'Marca': return $tmodelo= new Marca; break;
          case 'Modelo': return $tmodelo= new Modelo;break;
        }
    }



    public function store(Request $request)
	    {
	        // Validate the request...

	        Marca::create($request->all());
	    }

    public function ListaMarcas()
	    {

	        $todo=Marca::get();
	        
	      return View('panel.editaMarcaModelo')->with('lista',$todo);  
	    }
 

    public function nuevaMarca(Request $request, $id=null)
	    {
	    	if (isset($id)) {
	    		$todo=Marca::where('id_marca', $id)->first();
		    } else {
		    			$todo=Marca::orderBy('id_marca', 'desc')->first();	
		    			$nuevoID=str_pad($todo->id_marca+1, 3, "0", STR_PAD_LEFT);
		    			$todo=new Marca;
		    			$todo->id_marca=$nuevoID;
		    			$todo->nombre='';
		    		}

			return View('panel.NuevaMarca')->with('lista',$todo);	
	    }


	 public function Resgistro(Request $request)
	    {
	        
	       $indice=strval($request->indice);
	       $Clase=$this->Clase($request->coleccion);	
	       $todo=$Clase:: 
	       when((isset($request->indice)), function($q){
            											 return $q->where(request('indice'),request('ocurrencia'));
        											  })->
	       when((isset($request->columnas)), function($q){
	       												 $columnas=explode ( ',' ,request('columnas') , 10 );
            											 return $q->select($columnas);
        											  })->get();





	        
	      return $todo;  
	    }    

	public function ActualizaMarca(Request $request)
	{

	 	$todo=Marca::where('id_marca', $request->id_marca)->first();

	 	if (!$todo) {$todo=new Marca;}

		$todo->id_marca = $request->id_marca;
		$todo->nombre = $request->nombre;
		$todo->save();
		return redirect('EdicionMarcaModelo');
	}
}
