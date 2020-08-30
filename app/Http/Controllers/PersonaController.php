<?php
namespace App\Http\Controllers;  
use Illuminate\Http\Request;
use View;
use App\User; //modelo User del ORM eloquent  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonaController extends Controller 
{     

   public function Clase($ind)
    {
      $ind='App\\'.$ind;
      return $tmodelo=new $ind;
    }
 
   public function RegistrarUsuario(Request $request)
   {     
      $Clase=$this->Clase($request->clase);
      $vista='personas';

      $todo=$Clase::orderBy('email')->where('email', $request->email)->first();
      if ($request->clase=='Usuario')
      {
            if (isset($request->password))
            {
               $request['password']=Hash::make($request->password);
            } 
            else {
                  $request['password']=$todo->password;
                }
         $vista='usuarios';       
      }

      if (!$todo) {
                  $Clase::create($request->all());
               } 
               else { 

                     $todo->update($request->all()); 
                   }
      
      if ($request->clase=='Usuarios') { return redirect('/Listas/Usuario/auth.personas.Lista_usuarios'); }

      return redirect('/Listas/'.$request->clase.'/auth.personas.Lista_'.$vista);  
   }




}