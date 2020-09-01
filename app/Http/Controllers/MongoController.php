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
use App\Pre_recepcion;


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
 
class MongoController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function Clase($ind)
    {
    	$ind='App\\'.$ind;
    	return $tmodelo=new $ind;
    }

 	public function BorraItem(Request $request)
	 	{
	 		$Clase=$this->Clase($request->clase);
	 		$condicion=explode ( ',' ,$request->condicion , 6 );   		 
	 		$todo=$Clase::orderBy($condicion[0])->where($condicion[0],$condicion[1])->first();
	 		$todo->delete();
	 		return $todo;
	 	}



	public function GuardaCodigo(Request $request)
		{	 
			$Clase=$this->Clase($request->clase);
			$todo=$Clase::where('codigo',$request->codigo)->first();
			if (!$todo) {
				$Clase::create($request->all());
			} else { $todo->update($request->all()); }
			return redirect()->back();
		}

	public function GuardaEmpresa(Request $request)
		{	 
			$Clase=$this->Clase('Empresa');
			$todo=$Clase::first();

			if (!$todo) {
				$Clase::create($request->all());
			} else { $todo->update($request->all()); }
			return View('panel.editaEmpresa')->with('lista',$todo);
		}

	public function GuardaConfiguracion(Request $request)
		{	 
			$Clase=$this->Clase('Configuracion');
			$todo=$Clase::first();

			if (!$todo) {
				$Clase::create($request->all());
			} else { $todo->update($request->all()); }
			return View('panel.configuracion')->with('lista',$todo);
		}		

   public function EditaProducto(Request $request)
	    {  
	    	if (isset($request->id)) {
	    		$todo=Producto::where('codigo',$request->id)->first();
	    		if (!$todo) {$todo= new Producto;	$todo->codigo=$request->id;}
		    } else 	{
		    			$todo= new Producto;
		    		}
		    		
			return View('panel.editaProducto')->with('lista',$todo);	
	    }

	public function Resgistro(Request $request)
	    {	
	       $Clase=$this->Clase($request->coleccion);	
	       $todo=$Clase:: 
	       when((isset($request->indice)), function($q){
            											 return $q->where(request('indice'),request('ocurrencia'));
        											  })->
	       when((isset($request->signo)), function($q){
            											 return $q->where(request('indice'),request('signo'),request('ocurrencia'));
        											  })->
	       when((isset($request->columnas)), function($q){
	       												 $columnas=explode ( ',' ,request('columnas') , 10 );
            											 return $q->select($columnas);
        											  })->get();
	       if (isset($request->vista)) {   
										$view = View::make($request->vista);
										return $view->with('lista',$todo);
										}							
	       return $todo;
	    }    



public function Listas($clase, $vista)
	    {
	      if (!isset(Auth::user()->rol)) { return redirect('/panel');}	 	
	      $rol=Auth::user()->rol;
	      $cond='';
	      $rol='';
	      switch ($clase) {
          					case 'Usuario': $condicion='rol,>,'.$rol ; break;
        				  }

          $cond=$condicion ?? '';	  
	      $Clase=$this->Clase($clase);

	      $todo=$Clase:: when((isset($condicion)), function($q) use ($cond){
	      												$cndcn=explode ( ',' ,$cond , 3 );
	      												
	      												if (count($cndcn)==3)
	      												{
	      													return $q->where($cndcn[0],$cndcn[1],$cndcn[2]);	
	      												 }	else{
	      												            return $q->where($cndcn[0],$cndcn[1]);}
        											  })->
	      					get();

	      if ($clase=='Usuario') {$rol=['Super Administrador','Administrador de sistema','Administrador de Sucursal','Empleado'];}
	      if ($clase=='Persona') {$rol=['Cliente','Proveedor'];} 					


	      return View($vista)->with('lista',$todo)->with('rol',$rol);  
	    }

//Marcas y Modelos 
    public function ListaMarcas()
	    {
	        $todo=Marca::get();   
	      return View('panel.editaMarcaModelo')->with('lista',$todo);  
	    }

	public function CadenaMarcaModelo(Request $request)
	{
		
		if (strlen($request->codigo)==6)
		{
			$modelo=Modelo::where('id_modelo',$request->codigo)->first();
			return [$modelo->marca->nombre, $modelo->nombre];	
		}

		if (strlen($request->codigo)==3)
		{
			$modelo=Marca::where('id_marca',$request->codigo)->first();
			return [$modelo->nombre];	
		}
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
		if (isset($request->_id)) {
									$todo=Modelo::find($request->id_modelo); 
									$todo->nombre=$request->get('nombre'); 
									$todo->save();  
								  } else { 
								  			Modelo::create($request->all());
									     }

		return redirect('EdicionMarcaModelo');
	}

	public function nuevaFabricante(Request $request)
	    {

	    	$Clase=$this->Clase('Fabricante');	

	    	if (isset($request->codigo)) {
	    		$todo=$Clase::where('codigo', $request->codigo)->first();
		    } else {
		    			$todo=$Clase::orderBy('codigo', 'desc')->first();	
		    			$nuevoID=str_pad($todo->codigo+1, 4, "0", STR_PAD_LEFT);
		    			$todo=new $Clase;
		    			$todo->codigo=$nuevoID;
		    			$todo->nombre='';
		    		}

			return View('panel.NuevoFabricante')->with('lista',$todo);	
	    }

	public function ActualizaFabricante(Request $request)
	{	
		$Clase=$this->Clase('Fabricante');
	 	$todo=$Clase::where('codigo', $request->codigo)->first();

	 	if (!$todo) { $Clase::create($request->all());
		     } else { $todo->update($request->all());}

		return redirect('/Listas/Fabricante/panel.lista_fabricante');
	}

	//Ficheros

	public function getImageRelativePathsWfilenames(Request $request)
    {

        $lista=array_merge(glob($request->codigo."*.jp*"),glob($request->codigo."*.png"));
     
        //foreach ($lista as $filename) {
        //echo "$filename -------- size " . filesize($filename) . "<br>";}
     
        return $lista;
    }


	public function saveFiles(Request $request)
		{      
		        
			$id=strftime("%G%m%d%H%M%S").$request->codigo;
		      
		             //obtenemos el campo file definido en el formulario
		             $file = $request->file('ImgsTL');
		            
		             //obtenemos el nombre del archivo
		             //$nombre = $file->getClientOriginalName();

		             //$nombre = $file->getClientOriginalName();
		             $nombre=$request->codigo.strftime("%G%m%d%H%M%S").".".$file->extension();

		             //indicamos que queremos guardar un nuevo archivo en el disco local
		             \Storage::disk('public')->put($nombre,  \File::get($file));
		          
		       return $nombre;
		}

}
