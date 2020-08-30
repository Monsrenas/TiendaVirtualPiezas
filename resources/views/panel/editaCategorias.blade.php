
@extends('panel.menu')
@section('operaciones')
 
<div id="Centro"  style="font-size: 1.2em; width: 50%; margin-left: 100px;">
  <div class="card card-sm">
    <div class="card-header">
        <h6>Estructura de categorías</h6>
    </div>
    <div class="card-body">

        <div class="card">
          <div class="card-header bg-primary" style="color: white; " >
            <div class="row">  
             <strong class="col-lg-10" style="font-size: 1em;" ><i class="fa fa-list"></i> Categorías </strong>
            </div>
          </div>
          <div class="col-lg-12 card-body" style="background: white; padding: 0px; ">           
            @include('codificador.categorias')
          </div>
        </div>

    </div>
  </div>    
</div>

<script type="text/javascript" src="{{Request::root()}}/jquery/main.js"></script>

<script type="text/javascript">

  $('#tablamarcas tbody').on( 'click', '.fa-trash-o', function () {
      $tablaMarcas.row( $(this).parents('tr') ).remove().draw();
           var data="_token={{ csrf_token()}}&clase=Producto&condicion=_id,"+$(this)[0]['id'];
            $.post('/BorraItem', data, function(subpage){  
            } );
  }); 
   
  $( document ).ready(function() {
     activaCategoria();
    //addCategoria('002007', "Prueba de categoria nueva <i class='btn fa fa-plus-square-o'></i><i class='btn fa fa-trash-o' style='color: red;'></i>");
    //addCategoria('001005', 'Otra categoria nueva');
  });

</script>
@endsection
 