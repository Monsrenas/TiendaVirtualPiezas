<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Marca;
use App\Modelo;
use App\Categoria;
use App\Fabricante;
use App\Generacion;
use App\Medida;
use App\Producto;

class MongoController extends Controller
{
    //

    public function Clase($ind)
    {
        switch ($ind) {
          case 'Marca': return $tmodelo= new Marca; break;
          case 'Modelo': return $tmodelo= new Modelo;break;
          case 'Categoria': return $tmodelo= new Categoria;break;
          case 'Fabricante': return $tmodelo= new Fabricante;break;
          case 'Medida': return $tmodelo= new Medida;break;
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
 
	public function GuardaProducto(Request $request)
		{	 
			$todo=Producto::where('codigo',$request->codigo)->first();
			if (!$todo) {
				Producto::create($request->all());
			} else { $todo->update($request->all()); }
		}

   public function EditaProducto(Request $request)
	    {  
	    	if (isset($request->id)) {
	    		$todo=Producto::where('codigo',$request->id)->first();
	    		if (!$todo) {$todo= new Producto;	$todo->codigo=$request->id;}
		    } else {
		    			$todo= new Producto;

		    		}
		    		
			return View('panel.editaProducto')->with('lista',$todo);	
	    }


    public function listadoProductos(Request $request)
    {
        $todo=Producto::get();
        return view('panel.producto')->with('producto',$todo);
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


	 

	public function ActualizaMarca(Request $request)
	{

	 	$todo=Marca::where('id_marca', $request->id_marca)->first();

	 	if (!$todo) {$todo=new Marca;}

		$todo->id_marca = $request->id_marca;
		$todo->nombre = $request->nombre;
		$todo->save();
		return redirect('EdicionMarcaModelo');
	}




	public function saveFiles(Request $request)
		{      
		       //for ($y=0; $y<count($request->file('ImgsTL')); $y++) 
		        foreach ($request->ImgsTL as $y => $value)
		        {     
		            if (isset($request->file('ImgsTL')[$y]))
		            {
		                 //obtenemos el campo file definido en el formulario
		             $file = $request->file('ImgsTL')[$y];
		            
		             //obtenemos el nombre del archivo
		             //$nombre = $file->getClientOriginalName();

		             $nombre = $request->images[$y][1];
		             
		             //indicamos que queremos guardar un nuevo archivo en el disco local
		             \Storage::disk('public')->put($nombre,  \File::get($file));
		            }
		            
		       }

		           
		       return;
		}

}
