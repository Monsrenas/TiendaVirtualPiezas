
@extends('panel.menu')
@section('operaciones')
 
<div id="Centro"  style="font-size: 0.8em;">
	<form  method="POST"  action="javascript:GuardarDatos()" class="form-horizontal md-form" id="datosproducto" style="font-size: .85em;">

  <div class="card card-sm">
        
    <div class="card-header">
        <h6>Listado de productos</h6>
    </div>
    <div class="card-body">
      <div class="card-deck" >  

        <div class="card">
            <div class="card-header bg-primary" style="color: white; " >
             
              <div class="row">  
               <strong class="col-lg-10" style="font-size: 1.6em;" ><i class="fa fa-list"></i> Productos </strong>
              <div class="col-lg-1"><a href="javascript:productos('')" class="btn fa fa-plus btn-success"></a></div>
              </div>
           
            </div>

            <div class="col-lg-12 card-body" style="background: white; padding: 0px; ">
            
                 <div style="height:50px"></div>
                             
                            <!--Ejemplo tabla con DataTables-->
                            <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">        
                                                <table id="tablamarcas" class="table table-striped table-bordered">
                                                <thead id="cuerpo">
                                                    <tr>
                                                        <th>Código</th>
                                                        <th>Nombre</th>
                                                        <th>Fabricante</th>
                                                        <th>Categoria</th>
                                                        <th style="text-align: center; font-size: 1.4em;">
                                                          <i class="fa fa-trash-o" ></i>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($lista as $indice =>$patmt)
                                                   
                                                        <tr codigo='{{$patmt['_id']}}'>
                                                            <td style="font-size: 0.8em;"> 
                                                             <a href="javascript:productos('{{$patmt['codigo']}}')">{{$patmt['codigo']}}</a> 
                                                            </td>
                                                            <td>{{$patmt['nombre'] ?? '' }}</td>                             
                                                            <td>{{$patmt['fabricantes']['nombre'] ?? '' }}</td>
                                                            <td>{{$patmt['categoria_detalle']['nombre'] ?? '' }}</td>
                                                            <td style="text-align: center;">
                                                             @if (!$patmt->existencia->isNotEmpty()) 
                                                                 <a href="#" id="{{$patmt['_id']}}" class="btn btn-sm fa fa-trash-o"></a>
                                                             @else 
                                                              <i class="fa fa-chain" style="color: gray;"></i>  
                                                             @endif 
                                                             </td>
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
      </div>    <!-- card-columns -->

    </div>
  </div>    
  </form>
</div>


<script type="text/javascript" src="{{Request::root()}}/jquery/main.js"></script>

<script type="text/javascript">
    $('#tablamarcas tbody').on( 'click', '.fa-trash-o', function () {
      $tablaMarcas.row( $(this).parents('tr') ).remove().draw();
           var data="_token={{ csrf_token()}}&clase=Producto&condicion=_id,"+$(this)[0]['id'];
            $.post('/BorraItem', data, function(subpage){  
            } );
      }); 
    

</script>
@endsection
 