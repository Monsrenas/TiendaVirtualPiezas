
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Panel Administrativo</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
             
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="{{Request::root()}}/datatables/datatables.min.css"/>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="{{Request::root()}}/datatables/datatables.min.js"></script>    



<link rel="stylesheet" href="{{Request::root()}}/css/style.css">


</head>
<body style="background: #ECF0F1;">
<!-- partial:index.partial.html -->
<html>

<div data-component="navbar">
<nav class="navbar  fixed-top">
<div>
  <div class="right-links float-right mr-4">
    <div class="d-inline dropdown">
      <a class="dropdown-toggle" id="messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
        <img src="http://1.gravatar.com/avatar/47db31bd2e0b161008607d84c74305b5?s=96&d=mm&r=g">
      </a> William
      <div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="messages">
        <a class="dropdown-item" href="#">Editar Datos</a>
        <a class="dropdown-item" href="#">Cerrar sesión</a>
      </div> <!-- /.dropdown-menu -->
    </div> <!-- /.dropdown -->
    
  </div> <!-- /.right-links -->
  
  </div>

</nav>
</div> <!-- END TOP NAVBAR -->

  <body><div class="area"></div>
    <nav class="main-menu" style="color: black; color: black; margin-top: 57px;">
            <ul>     
                <li>
                    <span  class='caret'>
                        <a href="#" >
                            <i class="fa fa-book fa-2x"></i>
                            <span class="fa">
                                Operaciones
                            </span>
                        </a>
                    </span>
                    <ul class='nested'>
                        <li><a href="#">Despacho</a></li>
                        <li><a href="#">Recepción</a></li>                        
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
                        <li><a href="#">Personas</a></li>                    
                    </ul>       
                </li>


                <li>
                    <span  class='caret'>
                        <a href="#"  >
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <span class="fa">
                                Parametros
                            </span>
                        </a>
                    </span>
                    <ul class='nested'>
                        <li><a href="#">Datos de la empresa</a></li>
                        <li><a href="#">Parametros de búsqueda</a></li>
                        <li><a href="#">Parametros de visualización</a></li>
                        <li><a href="#">Otros</a></li>                        
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
    <div class="modal-dialog">
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
 -->


<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>

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
}
</script>