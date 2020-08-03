
@extends('panel.menu')
@section('operaciones')

<div id="Centro" style="font-size: 0.8em;">
	<div class="header">
    
  </div>
	<form  method="POST"  action="{{url('GuardaProducto')}}" class="form-horizontal md-form" id="datosproducto" style="font-size: .85em;">
  @csrf

    <div class="card-header card">
        <h6>Registro de productos</h6>
      </div>
    <div class="col-lg-12 card" style="background: white; padding: 20px; ">
      
        <div class="form-group row"  style="margin-bottom: 3px; ">
            <label class="col-lg-2 col-form-label text-md-left text-lg-right" for="codigo">Código Producto:</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="codigo_producto" name="codigo" placeholder="Código" required>
              <div class="col-sm-12" id="grupocodigo">  </div>
            </div>

            <div class="col-sm-7" id="grupodescripcion">
                  <input type="text" class="form-control form-control-sm" id="Xdescripcion" name="nombre" placeholder="Descripcion del producto" required=''> 
            </div>
        </div>

 
@include('modal')

@include('panel.modal.codigos')
@include('panel.modal.descripciones')
@include('panel.modal.modelos')
@include('panel.modal.fotos')
@include('panel.modal.medidas')

        <div class="form-group row NatJur" style="margin-bottom: 3px; ">
            <label class="col-lg-2 col-form-label text-md-left text-lg-right " for="codigo_adicionales">Códigos Adicionales:</label>
            <div class="col-sm-3 input-group" >
                  <input type="text" class="form-control form-control-sm" id="codigo_adicionales" placeholder="(0)" disabled>
                      <div class="input-group-btn input-group-append">
                          <button  type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#CodAdicionales" >
                              <i class="fa fa-th"></i>
                          </button>
                      </div>
              </div>
 
              <div class="col-sm-7 input-group" >
                  <input type="text" class="form-control form-control-sm" id="otras_descripciones" placeholder="Otras descripciones" disabled="">
                      <div class="input-group-btn input-group-append">
                          <button  type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#NomAdicionales" >
                              <i class="fa fa-th"></i>
                          </button>
                      </div>
              </div>
        </div>

              <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-md-left text-lg-right " for="codigo_fabricante">Fabricante:</label>
                  <div class="col-sm-3 input-group" >
                    <input type="text" class="form-control form-control-sm" id="codigo_fabricante" name="fabricante" placeholder="">
                    <div class="input-group-btn input-group-append">
                          <button  type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#myModal" onclick="Modal('codificador.ObtenCodigoFabricante','codigo_fabricante','descr_fabricante')"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                  <label class="col-lg-2 col-form-label text-left" id="descr_fabricante"></label>
              </div>

              <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                 <label class="col-lg-2 col-form-label text-md-left text-lg-right" for="codigo_categoria">Categoría:</label>
                 <div class="col-sm-3 input-group">
                    <input type="text" class="form-control form-control-sm" id="codigo_categoria" name="categorias" placeholder="">
                    <div class="input-group-btn input-group-append">
                          <button type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#myModal" onclick="Modal('codificador.ObtenCodigoCategoria','codigo_categoria','descr_categoria')"><i class="fa fa-search"></i></button>
                    </div>          
                 </div>
                  <label class="col-lg-2 col-form-label text-left" id="descr_categoria"></label>
              </div>

              <div class="form-group row NatJur " style="margin-bottom: 5px; ">
                  <label class="col-lg-2 col-form-label text-md-left text-lg-right " for="codigo_medida">Medidas:</label>
                  <div class="col-sm-3 input-group">
                    <input type="text" class="form-control form-control-sm" id="codigo_medida" placeholder="(0)">
                       <div class="input-group-btn input-group-append">
                          <button type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#xMedidas"><i class="fa fa-th"></i></button>
                    </div>
   
                  </div>
                   <label class="col-lg-2 col-form-label text-left" id="descr_modelo"></label><br>
              </div>
<!--
            <div id="precios" class="grupoDT">
             <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-md-left text-lg-right " for="precio_Venta">Precio de venta:</label>
                  <div class="col-sm-3 input-group">
                    <input type="text" class="form-control form-control-sm" id="precio_Venta" placeholder="">
                    <div class="input-group-btn input-group-append">
                      <button type="button" class="btn btn-success btn-sm" onclick="NuevoPrecio()"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>

              </div>
            </div>
-->
            <div id="foto" class="grupoDT">
             <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-md-left text-lg-right " for="foto">Fotos:</label>
                  <div class="col-sm-3 input-group">
                    
                      <input id="fotoNombre" class="form-control form-control-sm" type="text" placeholder="(0)" disabled>
                    <div class="input-group-btn input-group-append">
                      <button type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#xFotos"><i class="fa fa-th"></i></button>
                    </div>
                  </div>
              </div>
             </div>

             <div class="grupoDT" id="modelo">
             <div class="form-group row NatJur " style="margin-bottom: 5px; ">
                  <label class="col-lg-2 col-form-label text-md-left text-lg-right " for="codigo_modelo">Valido para los Modelos:</label>
                  <div class="col-sm-3 input-group">
                    <input type="text" class="form-control form-control-sm" id="codigo_modelo" placeholder="(0)">
                       <div class="input-group-btn input-group-append">
                          <button type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#xVersiones"><i class="fa fa-th"></i></button>
                    </div>
   
                  </div>
                   <label class="col-lg-2 col-form-label text-left" id="descr_modelo"></label><br>
              </div>
              </div>
      		  
      		  <div class="col-lg-10 text-md-left text-lg-right " id="espacioGuardar" hidden="">
    				<button class="btn btn-success" id="GuardarForm" type="submit">Guardar <i class="fa fa-save"></i></button>
 	  		  </div> 
       </div>
        <button class="btn fa fa-save btn-success float-right"> Guardar</button>
  	 </form>
</div>
<script type="text/javascript">
    $('body').on('click', '.fa-trash-o', function()  //Boton que borra categoria
{
    $(this).parent().parent().remove();  
    //$(this).parent().siblings().find('input').val()
    //$(this).parent().parent().attr('class')
 
});


function ActNumero(elemento, visual)
{
  $d='';
  if (elemento=="NombresADC") {$d=" descripciones adicionales"}

    $c=$("#"+elemento+" .fa-trash-o");
      $('#'+visual).attr("placeholder", "("+$c.length+")"+$d);
}
</script>
@endsection