<?php if (!isset($lista)) {$lista=[];} ?> 

<div id="Centro"  style="font-size: 1.2em;">
  <div class="card card-sm">
    <div class="card-header">
        <h6>Pre-recepción</h6>
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
                                            <th>Código</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Almacén</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        @foreach ($lista as $producto)
                                            <tr>
                                                <td width="5">{{$i++}}</td>
                                                <td width="5"><a href="javascript:Editar('{{$producto}}')"><i class="fa fa-pencil"> </i></a></td>
                                                <td>{{ $producto->codigo}}</td>
                                                <td><a href="#">{{ $producto->cantidad }}</a></td>
                                                <td>{{ $producto->precio }}</td>
                                                <td>{{ $producto->almacen }}</td>
                                                <td width="5"><a href="javascript:borraItem('BorraItem', 'Pre_recepcion', ['codigo','{{ $producto->codigo}}'])"  class="btn btn-sm fa fa-trash-o"> </a></td>
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
    <?php
        $infoCabezera=$lista ?? [];
        if (isset($lista[0])) {  $infoCabezera=$lista[$i-2]; }
                                    
        $fecha=$infoCabezera->fecha ?? '';
        $proveedor=$infoCabezera->proveedor ?? '';
        $documento=$infoCabezera->documento ?? '';
        $almacen=$infoCabezera->almacen ?? '';               
    ?>
   
    $('#fecha').val('{{$fecha}}');
    $('#proveedor').val('{{$proveedor}}');
    $('#documento').val('{{$documento}}');
    $("#almacen option[value={{$almacen}}]").attr("selected",true);

    function Editar($codigo)
    {
        $codigo=JSON.parse($codigo);    

        $('#codigo').val($codigo['codigo']);
        $('#cantidad').val($codigo['cantidad']);
        $('#precio').val($codigo['precio']);
    
    }



</script>