
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Panel Administrativo</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

             
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="{{Request::root()}}/datatables/datatables.min.css"/>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="{{Request::root()}}/datatables/datatables.min.js"></script>    



<link rel="stylesheet" href="{{Request::root()}}/css/style.css">


</head>
<body style="background: #ECF0F1;">
<!-- partial:index.partial.html -->
<html>

<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #FFFFFF;  -webkit-box-shadow: 0 8px 6px -6px #999;
   -moz-box-shadow: 0 8px 6px -6px #999;
   box-shadow: 0 8px 6px -6px #999;">

        <button class="navbar-toggler navbar-nav mr-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span> 
        </button>

        <a class="navbar-brand mx-auto" href="#">MAZ Partes</a>
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
            </li>
        @else
        <ul class="nav navbar-nav ml-md--auto"> 

                <li class="dropdown"> 

                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false"> 
                            {{ Auth::user()->nombre }} <b class="caret"></b>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Mi perfil</a>
                          
                                <div class="dropdown-divider"></div>
                               
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sección
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>

                </li> 
        </ul>
        @endguest


</nav>

  <body>
    <div class="area"></div>
    <nav class="main-menu" style="color: black; color: black; margin-top: 57px;">
            <ul>     
                <li>
                    <span  class='caret'>
                        <a href="#" >
                            <i class="fa fa-book fa-2x"></i>
                            <span class="fa">
                                Inventario
                            </span>
                        </a>
                    </span>
                    <ul class='nested'>
                        
                        <li><a href="{{url('Pre_recepcion')}}">Recepción</a></li>    
                        <li><a href="{{url('ListadoRecepciones')}}">Movimientos</a></li> 
                        <li><a href="{{url('ListadoInventario ')}}">Existencia</a></li> 
                                          
                    </ul>       
                </li>

                <li>
                    <span class="caret">
                        <a href="#" >
                            <i class="fa fa-list fa-2x"></i>
                            <span class="fa" >
                                Catálogo
                            </span>
                        </a>
                    </span>
                    <ul class='nested'>
                        <li>
                           
                           <a href="{{url('listaProductos')}}" style="float: left;" >Productos </a>
                            <a href="javascript: productos('')">
                                  <i class="fa fa-plus-square-o text-right" style=" font-size: 0.98em; vertical-align: middle; height: 21px; width: 121px; padding-right: 2px;"></i>
                       
                            </a>
                           
                                

                        </li>
                        
                        <li><a href="#">Fabricantes</a></li>
                        <li><a href="{{url('EdicionMarcaModelo')}}">Marcas y Modelos</a></li>
                        <li><a href="#">Categorias</a></li>                        
                    </ul>       
                </li>


                <li>
                    <span  class='caret'>
                        <a href="#" >
                            <i class="fa fa-users  fa-2x"></i>
                            <span class="fa">
                                Personas
                            </span>
                        </a>
                    </span>
                    <ul class='nested'>
                        <li>
                           
                           <a href="javascript:Registros('panel.Lista_personas', 'Usuario', '', '')" style="float: left;" >Personas </a>
                            <a href="javascript:Registros('panel.registraPersona', 'Usuario', '', '')">
                                  <i class="fa fa-plus-square-o text-right" style=" font-size: 0.98em; vertical-align: middle; height: 21px; width: 121px; padding-right: 2px;"></i>
                       
                            </a>
                           
                                

                        </li>     
                    </ul>           
                </li>


                <li>
                    <span  class='caret'>
                        <a href="#"  >
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <span class="fa">
                                Configuración
                            </span>
                        </a>
                    </span>
                    <ul class='nested'>
                        <li><a href="#">Datos de la empresa</a></li>
                        <li><a href="#">Opciones de búsqueda</a></li>
                        <li><a href="#">Parametros de visualización</a></li>
                        <li><a href="#">Modulos Instalados</a></li>                 
                    </ul>       
                </li>

        </nav>
<div class="row">
    <div class="col-sm-1"></div>
    <div id="EspacioAccion" class="col-sm-11" style="margin: 62px;">
            @yield('operaciones')
    </div>
</div>
<!-- partial -->


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Note</button>-->
  <div class="modal" id="myModal">
    <div class="modal-dialog" style="width: 1200px; max-width: 1000px;">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body" id="modal-body" style="max-height: 600px; overflow: auto;">
          Modal body..
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>     
      </div>
    </div>
  </div>
<!-- 
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>



<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>
  
<script type="text/javascript">
     var toggler = document.getElementsByClassName("caret");
            var i;
            for (i = 0; i < toggler.length; i++) {
              toggler[i].addEventListener("click", function() { 
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
              });
            }



function productos($id)
{ 
    $data="id="+$id;    
    $.get('productos', $data, function(subpage){
       $('#EspacioAccion').html(subpage);        

    }).fail(function() {
       console.log('Error en carga de Datos');
  });



     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });

}


function Registros(vista, coleccion, condiciones, columnas)
{
  let aux=['',''];
  if (condiciones) {
                      aux=condiciones.split(',');
                    }

  $data="vista="+vista+"&coleccion="+coleccion+"&indice="+aux[0]+"&ocurrencia="+aux[1];
   
  $.get('Resgistro', $data, function(subpage){ 
     $('#EspacioAccion').html(subpage);

    }).fail(function() {
       console.log('Error en carga de Datos');
  });}



//Activar boton de guardar para el formulario activo 
$('body').on('change', 'input', function()
{
     
      $("#btGuardaProd").attr('disabled',false);
});
</script>