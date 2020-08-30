<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;
use View;
use App\Inventario;
use App\Pre_recepcion;
use App\Recepcion;
use App\Producto;
use Illuminate\Support\Collection;
use Auth;

class InventarioController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $variable;

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function addItemPre_recepcion(Request $request)
        {
            $todo=Pre_recepcion::where('codigo',$request->codigo)->first();
            if ($todo) {$todo->update($request->all());}    
            else {$todo=Pre_recepcion::create($request->all());}
            return View('inventario.Pre_recepcion')->with('lista',$todo);;
        }

    public function Recepcionar(Request $request)
    {
       
        $PreRecepcion=Pre_recepcion::where('usuario',Auth::user()->_id)->get();
        foreach ($PreRecepcion as $key => $value) 
        { 
            $recepcion=Inventario::orderBy('codigo')->find($value->codigo.$value->precio.$value->almacen);
            if ($recepcion) {
                             $recepcion->cantidad+=$value->cantidad;
                             $recepcion->save();
                             
                           } else {
                                    $recepcion=new Inventario;
                                    $recepcion=[
                                            'codigo'=>$value->codigo.$value->precio.$value->almacen,
                                            'producto'=>$value->codigo,
                                            'almacen'=>$value->almacen,
                                            'precio'=>number_format($value['precio'], 2, ',', ' '),
                                            'cantidad'=>$value->cantidad ];
                                            Inventario::create($recepcion);
                                  }
                                                     
            
        }
        $this->CreaInformeRecepcion($PreRecepcion);
        return redirect('Pre_recepcion');
    }
 
    public function CreaInformeRecepcion($pre_recepcion)
    {
       $id=strftime("%G%m%d%H%M%S").Auth::user()->_id;
       $usuario=Auth::user()->_id;
       foreach ($pre_recepcion as $key => $value) {
                                    $recepcion=new Recepcion;
                                    $recepcion=[
                                            'id'=>$id,    
                                            'usuario'=>$usuario,
                                            'proveedor'=>$value['proveedor'],
                                            'documento'=>$value['documento'],
                                            'codigo'=>$value['codigo'],
                                            'almacen'=>$value['almacen'],
                                            'precio'=>number_format($value['precio'], 2, ',', ' '),
                                            'cantidad'=>$value['cantidad'] ];
                                    Recepcion::create($recepcion);

                                    $borrar=Pre_recepcion::orderBy('_id')->find(($value['_id']));
                                    
                                    $borrar->delete();   
                                  }
         

       return;
    }


    public function ListadoRecepciones()
    {
        $lista=Recepcion::groupBy('id')->select('id','proveedor','documento','usuario','almacen','created_at')->orderBy('created_at', 'desc')->get();
        return View('inventario.lista_recepcion')->with('lista',$lista);
    }


    public function ListadoInventario()
    {
        $lista=Inventario::get();
        return View('inventario.existencia')->with('lista',$lista);
    }

    public function InfoPrevioARecepcon(Request $request)
    {

       $inventario=Inventario::where('producto',$request->codigo)->
                               select(['producto','almacen', 'precio', 'cantidad'])->
                               with(['detalles:codigo,producto,nombre'])->
                               when((isset($request->almacen)), function($q){
                                                         return $q->where('almacen',request('almacen'));
                                                      })->get();
       if (count($inventario)>0) { return $inventario; }

        $inventario=Inventario::where('producto',$request->codigo)->
                               select(['producto','almacen', 'precio', 'cantidad'])->
                               with(['detalles:codigo,producto,nombre'])->get();

       if (count($inventario)>0) { return $inventario; }

       $producto=Producto::orderBy('codigo')->where('codigo', $request->codigo)->get();
       
       
       return $producto;

       
    }
//Filtro
    public function pagina(Request $request)
    {
        //$ListDescuento=$this->DevuelveBase($request);
        $ListProducto=Inventario::when((isset($request->almacen)), function($q){
                                                         return $q->where('almacen',request('almacen'));
                                                      })->paginate(9); 
         $view = View::make('single');
        return $view->with('lista',$ListProducto);                           
    }

    public function enFiltro(Request $request, $producto)
    {
        $datos=$request->all(); 
        $condicion=[];
        $bndr=0;
        $modelo= $producto['modelo'] ?? [];
        $categoria= $producto['categoria'] ?? [];
        $Codigos=$producto['codigos_adicionales'] ?? '';
        $fabricante=$producto['codigo_fabricante'] ?? '';
        $bandera=[];
        foreach ($datos as $key => $value) {
            $condicion[$key]=explode(',', $value);
        }

        $cmpld=count($condicion);

        if (isset($condicion['palabra']))
        {      
            //$palabras=(count($condicion['palabra'])>1) ? count($condicion['palabra'])-1:0;
            //$cmpld=$cmpld+$palabras;
            foreach ($producto['descripcion'] as $key => $descripcion) {
                 foreach ($condicion['palabra'] as $ind => $valor) {

                    if (strpos( strtoupper($descripcion), strtoupper($valor) )>-1)  { 
                        //echo strtoupper($descripcion)."-".strtoupper($valor)."//" ;

                        $bndr=$bndr+1; $bandera['palabra']='1'; }

                    if ($producto['codigo']==$valor) { $bndr=$bndr+1; $bandera['palabra']='1';}

                   /*  foreach ($Codigos as $inco => $xCodigo) {
                        if ($xCodigo==$valor) { $bndr=$bndr+1; }
                    }*/
                 }     
            }      
        }

        if (isset($condicion['marca']))
        {  
            foreach ($modelo as $key => $descripcion) {
                 foreach ($condicion['marca'] as $ind => $valor) { 
                    if (substr( $descripcion,0,3)==$valor)  { 
                        //echo $producto['codigo'].": ".substr($descripcion,0,3)."  ".$valor."//";
                         $bndr=$bndr+1; $bandera['marca']='1';}
                 }     
            }      
        }        

        if (isset($condicion['modelo']))
        { 
            foreach ($modelo as $key => $descripcion) {
                 foreach ($condicion['modelo'] as $ind => $valor) {
                    if (strpos( $descripcion, $valor )!==FALSE)  { $bndr=$bndr+1; $bandera['modelo']='1';}
                 }     
            }      
        }        
        
        if (isset($condicion['categoria']))
        { 
            foreach ($categoria as $key => $descripcion) {
               for ($i=1; $i <((strlen($descripcion)+1)/3) ; $i++) {
                    $Subcategoria=substr($descripcion, 0, $i*3);
                    
                    foreach ($condicion['categoria'] as $ind => $valor) {     
                         
                         if ($valor==$Subcategoria)  { $bndr=$bndr+1; $bandera['categoria']='1';}
                    }       
                }      
            }      
        }            
$view->with('info',$request);
        if ((isset($condicion['fabricante']))and(strpos( $fabricante, $condicion['fabricante'][0] )!==FALSE))
        { 
            $bndr=$bndr+1;      $bandera['fabricante']='1';
        }    

        if ((count($bandera)==$cmpld)or($cmpld==0)) { return true; }

        $palacond=((isset($bandera['palabra']))and(isset($condicion['palabra'])));

        //echo $palacond;

        //if (($bndr>=$cmpld)and $palacond ) { return true; } 

        return false;
    }                                                           //Final de la Funcion enFiltro



    public function descuento()
    {
        return 10;
    }

    public function yxVista(Request $request){    
            $view = View::make($request->url);
            
            if($request->ajax()){
                return $view->with('info',$request); 
            }else return $view->with('info',$request);
    }

   public function Vista(Request $request){    
            $view = View::make($request->url);

            $pos = strpos($request->campo, "<*>");
            if ($pos>0) { $req=$this->EstructuraDatosCar($request); return $view->with('info',$req); }

            if($request->ajax()){
                return $view->with('info',$request); 
            }else return $view->with('info',$request);
    }

    public function EstructuraDatosCar(Request $request)
        {
            $paq = $request->campo;
            $ext = $request->descripcion;

            $Estruc=[];

            $ProdData=explode ( '<*>' ,$paq , 10 );
            $ProdExtr=explode ( '<*>' ,$ext , 10 );
             
            $Estructura['codigo']=$ProdData[0];                                             
            $Estructura['fabricante']=$ProdData[1];
            $Estructura['precio']=$ProdData[2];
            $Estructura['cantidad']=0;
            $Estructura['descripcion']=$ProdData[3];
            $Estructura['fotos']=array_slice($ProdData, 4);
            $Estructura['modelo']=$ext;  
           return $Estructura;
        }

    /* Panel de Administracion */

    public function OLDlistadoProductos(Request $request)
    {
        $request->referencia='productos';
        $ListProducto=$this->DevuelveBase($request);
        return view('administracion.productos')->with('producto',$ListProducto);
    }

     public function listadoProductos(Request $request)
    {
        $request->referencia='productos';
        $ListProducto=$this->DevuelveBase($request);
        return view('panel.producto')->with('producto',$ListProducto);
    }

    /* Operaciones Carrito */ 

    public function CarritoAgregarItem(Request $request)
    {   $Vista=$this->Vista($request);
        if(!isset($_SESSION)){
                         session_start();
                         if (!isset($_SESSION['MyCarrito'])) {$_SESSION['MyCarrito']= [];}
                       }

        $TmpCon = $_SESSION['MyCarrito'];

        if (isset($TmpCon[$Vista->info['codigo']])){
                        $TmpCon[$Vista->info['codigo']]['cantidad']+=$request->cantidad;
                 }
            else { 
                   $TmpCon[$Vista->info['codigo']]=$Vista->info;
                   $TmpCon[$Vista->info['codigo']]['cantidad']=$request->cantidad;
                 }
        //$tmn=count($TmpCon);
        //Session::put('MyCarrito', $TmpCon);
        $_SESSION['MyCarrito'] = $TmpCon;
        //session(['MyCarrito' => [$Vista->info['codigo']=>$Vista->info]]); 
        return $Vista;
    }

    public function CarritoEliminaItem(Request $request)
    {   $Vista=$this->Vista($request);
        if(!isset($_SESSION)){     session_start();     }
        $TmpCon = $_SESSION['MyCarrito'];
        unset($TmpCon[$request->codigo]);    
        $_SESSION['MyCarrito'] = $TmpCon;
        return $Vista;
    }

    public function CarritoCambiaCanti(Request $request)
    {   $Vista=$this->Vista($request);
        if(!isset($_SESSION)){     session_start();      }    
        $TmpCon = $_SESSION['MyCarrito'];
        $TmpCon[$request->codigo]['cantidad']=$request->valor;    
        $_SESSION['MyCarrito'] = $TmpCon;
        return $Vista;
    } 

    public   function getImageRelativePathsWfilenames()
    {
        $lista=array_merge(glob("*.jp*"),glob("*.png"));
     
        //foreach ($lista as $filename) {
        //echo "$filename -------- size " . filesize($filename) . "<br>";}
     
        return $lista;
    }

}