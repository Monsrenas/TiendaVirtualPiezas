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



    public function prerecepcion(Request $request)
	    {

	        Marca::create($request->all());
	        return;
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


//Marcas y Modelos 
    public function ListaMarcas()
	    {

	        $todo=Marca::get();
	        
	      return View('panel.editaMarcaModelo')->with('lista',$todo);  
	    }

    public function nuevaMarca(Request $request)
	    {
	    	if (isset($request->id)) {
	    		$todo=Marca::where('id_marca', $request->id)->first();
		    } else {
		    			$todo=Marca::orderBy('id_marca', 'desc')->first();	
		    			$nuevoID=str_pad($todo->id_marca+1, 3, "0", STR_PAD_LEFT);
		    			$todo=new Marca;
		    			$todo->id_marca=$nuevoID;
		    			$todo->nombre='';
		    		}

			return View('panel.NuevaMarca')->with('lista',$todo);	
	    }

 public function nuevoModelo(Request $request)
	    {
	    	 
	    	$id=$request->id;

	    	if (strlen($id)>3) {
	    		$todo=Modelo::orderBy('id_modelo')->where('id_modelo', $id)->first();
		    } else {		
		    			$todo=Modelo::orderBy('id_modelo', 'desc')->where('id_marca',$id)->first();
		    			if ($todo) {$nuevoID=str_pad($todo->id_modelo+1, 6, "0", STR_PAD_LEFT);}
		    			else ($nuevoID=$id."001");	
		    			

		    			$todo=new Modelo;
		    			$todo->id_modelo=$nuevoID;
		    			$todo->id_marca=$id;
		    			$todo->nombre='';
		    		}

		    $Marca=Marca::where('id_marca',$todo->id_marca)->select(['nombre'])->first();	
		    
			return View('panel.NuevoModelo')->with('lista',$todo)->with('marca',$Marca->nombre);	
	    }
	 

	public function ActualizaMarca(Request $request)
	{	
	 	$todo=Marca::where('id_marca', $request->id_marca)->first();

	 	if (!$todo) { Marca::create($request->all());
		     } else { $todo->update($request->all());}

		return redirect('EdicionMarcaModelo');
	}

	public function ActualizaModelo(Request $request)
	{	

	 	$todo=Modelo::orderBy('id_modelo')->where('id_modelo', $request->id_modelo)->first();
	 	 
	 	if (!$todo) { Modelo::create($request->all());
		     } else {      			
		     			$todo->nombre=$request->nombre;
		     			 
		     			$todo->update(); }
				
		return redirect('EdicionMarcaModelo');
	}




//Ficheros
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
