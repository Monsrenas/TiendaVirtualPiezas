@extends('panel.menu')
@section('operaciones')
@include('modal')
<style type="text/css">
    table td { text-align: center; }

</style>
<div id="Centro" class="col-lg-6" style="font-size: 0.8em;">
	
	<form  method="POST"  action="{{url('/configura')}}" class="form-horizontal md-form" id="">
  @csrf
    <div class="card-header card">
        <h6>Configuración Tienda Virtual</h6>
      </div>
    <div class=" card" style="background: white; padding: 20px; ">
        <div class="row" style="margin-bottom: 3px;">
            <div class="table-responsive">
                        
                    <table  class="table table-striped table-bordered" style="width:100%">
                    <thead id="cuerpo">
                      <tr>
                            <th>CAMPOS</th>
                            <th>BÚSQUEDA</th> 
                            <th>VISUALIZAR</th> 
                      </tr>       
                      <tr>
                        <th>Código</th> 
                          <td><input type="checkbox" name="config[cg]"></td>
                          <td><input type="checkbox" name="config[cv]"></td>
                      </tr>
                      <tr>   
                        <th>Nombre</th>
                          <td><input type="checkbox" name="config[ng]"></td>
                          <td><input type="checkbox" name="config[nv]"></td>                      </tr>
                      <tr>
                        <th>Fabricante</th>
                          <td><input type="checkbox" name="config[fg]"></td>
                          <td><input type="checkbox" name="config[fv]"></td>                      </tr>
                      <tr>  
                        <th>Códigos Adicionales</th>
                          <td><input type="checkbox" name="config[ag]"></td>
                          <td><input type="checkbox" name="config[av]"></td>                      </tr>
                      <tr>  
                        <th>Nombres Adicionales</th>      
                          <td><input type="checkbox" name="config[dg]"></td>
                          <td><input type="checkbox" name="config[dv]"></td>                      </tr>   
                    </thead>
              </table>                  
                
            </div>
         </div>  
    
   
     
 
        <div class="col-lg-10 text-md-left text-lg-right ">
            <button class="btn btn-success btn-sm" id="GuardarForm" type="submit" disabled>Guardar <i class="fa fa-save"></i></button>
        </div>
   
    </div>
  </form>
</div>
@if (isset($lista->config))
  @foreach ($lista->config as $key=>$opciones)  

       <script type="text/javascript">
         ($('input[type="checkbox"][name="config[{{$key}}]"]'))[0]['checked']='true';
         ($('input[type="checkbox"][name="config[dv]"]'))['checked']='true';
       </script> 
  @endforeach
@endif
<script type="text/javascript">
  $('body').on('change', 'input', function()
{
     
      $("#GuardarForm").attr('disabled',false);
});
</script>
@endsection