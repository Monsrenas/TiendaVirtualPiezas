
@extends('panel.menu')
@section('operaciones')

<div id="Centro"  style="font-size: 0.8em;">
	<form  method="POST"  action="" class="form-horizontal md-form" id="datosproducto" style="font-size: .85em;">

  <div class="card card-sm">
        
    <div class="card-header">
        <h6>Listado de fabricantes</h6>
    </div>
    <div class="card-body">
      <div class="card-deck" >  

        <div class="card">
            <div class="card-header bg-primary" style="color: white; " >
             
              <div class="row">  
               <strong class="col-lg-10"><i class="fa fa-list"></i> Fabricantes </strong>
              <div class="col-lg-1"><a href="#" data-toggle="modal" data-target="#ModalAuxiliar" onclick="javascript:EditaFabricante('', '/nuevaFabricante')"  class="btn fa fa-plus btn-success"></a></div>
              </div>
            </div>

            <div class="col-lg-6 card-body" style="background: white; padding: 0px; ">
            
                 <div style="height:50px"></div>
                             
                            <!--Ejemplo tabla con DataTables-->
                            <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">        
                                                <table id="tablamarcas" class="table table-striped table-bordered">
                                                <thead id="cuerpo">
                                                    <tr>
                                                        <th></th>
                                                        <th>Código</th> 
                                                        <th>Nombre</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($lista as $indice =>$patmt)
                                                        <tr>
                                                            <td width="5"><a href="#" data-toggle="modal" data-target="#ModalAuxiliar" onclick="javascript:EditaFabricante('{{ $patmt['codigo'] }}', '/nuevaFabricante')" class="btn btn-sm" style="font-size: em;"><i class="fa fa-pencil" ></i></a>  </td>
                                                            <td >{{$patmt['codigo'] ?? ''}}</td>
                                                            <td>{{$patmt['nombre'] ?? '' }}</td>                             
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
@include('panel.modal.Auxiliar')

<script type="text/javascript">

  function EditaFabricante($id, controlador)
{
  $data="codigo="+$id;
  $.get(controlador, $data, function(subpage){ 
        $('#modal-cuerpo-AUX').html(subpage);
    }).fail(function() {
       console.log('Error en carga de Datos');
  });
}
</script>

<script type="text/javascript" src="{{Request::root()}}/jquery/main.js"></script>
@endsection