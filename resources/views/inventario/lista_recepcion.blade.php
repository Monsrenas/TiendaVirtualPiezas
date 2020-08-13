@extends('panel.menu')
@section('operaciones')
<?php if (!isset($lista)) {$lista=[];} 
?> 

<div id="Centro"  style="font-size: .7em;">
  <div class="card card-sm">
    <div class="card-header">
        <h6>Listado de Recepción</h6>
    </div>
    <div class="card-body">
       
            <div class="col-lg-12 card-body" style="background: white; padding: 20px; ">
                                               
                <!--Ejemplo tabla con DataTables-->
                <div class="container">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">     
                                    <?php $i=1;?> 
                                    <table id="tablamarcas" class="table table-striped table-bordered" style="">
                                    <thead id="cuerpo">
                                        <tr HEIGHT="10">
                                            <th>No.</th>
                                            <th></th>
                                            <th>Fecha</th>
                                            <th>Recepción</th>
                                            <th>Proveedor</th>
                                            
                                            <th>Usuario</th>
                                            <th>Almacén</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        @foreach ($lista as $recp)
                                            <tr>
                                                <td width="5">{{$i++}}</td>
                                                <td><a href="#"><i class="fa fa-eye"> </i></a></td>
                                                <td >{{ $recp->created_at ?? '' }}</td>
                                                <td>{{ $recp->id ?? ''}}</td>
                                                <td >{{ $recp->proveedor ?? ''}}</td>
                                                <td >{{ $recp->persona->nombre ?? ''}}</td>
                                                <td width="5"> {{ $recp->almacen ?? ''}}</td>
                                            </tr>
                                        @endforeach                  
                                    </tbody>        
                                   </table>
                                </div>
                            </div>
                    </div>  
                </div>    
            </div>
      
    </div>
  </div>    
</div>

<script type="text/javascript" src="{{Request::root()}}/jquery/main.js"></script>
<script type="text/javascript">
    $('body').on('blur', '#codigo', function()
    { 
      $data="indice=codigo&ocurrencia="+this.value+"&columnas=codigo,nombre&coleccion=Producto";
      $.get('Resgistro', $data, function(subpage){ 
            if (subpage[0]) {  $('#descr_producto').text(subpage[0]['nombre']);
                              $('#descr_producto').css('color','blue');  
                            }
                else { $('#descr_producto').text('CÓDIGO DESCONOCIDO');
                        $('#descr_producto').css('color','red');  
                        $('#codigo').focus();}

        }).fail(function() {
           console.log('Error en carga de Datos');
        });   
    });
</script>
@endsection