<div id="Centro" style="font-size: 0.8em;">
  <div class="header">
    <h4>Registro de Personas</h4>
  </div>
  <form  id="RegPersona" method="POST"  action="{{ url('RegistrarUsuario') }}" class="form-horizontal md-form" id="RegPersona" style="font-size: .85em;">
  @csrf
    <input type="password" name="password" value="clave123456789" hidden>
    <div class="card-header card">
        <h5>Datos de la persona</h5>
      </div>
    <div class="col-lg-12 card" style="background: white; padding: 20px; ">

    <div class="col-lg-10 card-header">
              <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="estado">Estado:</label>
                  <div class="col-lg-2">
                    <select class="form-control" id="estado" name="persona[estado]" style="font-size: 1em;">
                      <option>Activo</option>
                      <option>Inactivo</option>
                    </select>
                  </div>
              </div>

              <div class="form-group row" style="margin-bottom: 3px; "> 
                  <label class="col-lg-2 col-form-label text-right" for="tipo">Rol:</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="rol" name="rol" style="font-size: 1em;">
                      <option value=1 >Super Administrador</option>
                      <option value=2 >Administrador de sistema</option>
                      <option value=3 >Administrador de Sucursal</option>
                      <option value=4 selected>Empleado</option>
                    </select>
                  </div>
              </div>

              <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="ruc">RUC/ Cédula:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="idpersonal" name="idpersonal" placeholder="" required  >
                  </div>
              </div>

             <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="nombre">Nombre:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="">
                  </div>
              </div>
 

             <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="telefono">Teléfono:</label>
                  <div class="col-sm-3">
                    <input type="tel" class="form-control form-control-sm" id="telefono" name="telefono" placeholder="">
                  </div>
              </div>

              <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="direccion">Dirección:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="direccion" name="direccion" placeholder="">
                  </div>
              </div>

               <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="correo">Correo electrónico :</label>
                  <div class="col-sm-3">
                    <input type="email" class="form-control form-control-sm" id="correo" name="email" placeholder="">
                  </div>
              </div>
      </div>    
  </div>



<div class="card-header card">
        <h5>Nivel de acceso</h5>
</div>
<div class="col-lg-12" style="background: white; padding: 20px; ">

          <div class="card-header" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv1" > Operaciones</>
          </div>
          <div id='collapsediv1' class='collapse p-4  border  col-lg-12 row' style="margin-left:1px;">
              <div class="col-lg-4">              
                          <input type="checkbox" class="control-sm col-lg-1" id="recepcion" name="acceso[or]">
                          <label class="col-lg-4 col-form-label" for="recepcion">Recepción:</label>
              </div>
          </div>
        


          <div class="card-header" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsedivX"> Catálogo</>
          </div>
          <div id='collapsedivX' class='collapse p-4  border  col-lg-12 row' style="margin-left:1px;">


          <div class="col-lg-4">         
                      <div class="form-group">
                          <input type="checkbox" class="control-sm col-lg-1" id="productos" name="acceso[cp]">
                          <label class="col-lg-4 col-form-label control-sm" for="productos">Productos:</label>
                      </div>
                                
                      <div class="form-group">
                          <input type="checkbox" class="control-sm col-lg-1" id="fabricantes" name="acceso[cf]">
                          <label class="col-lg-4 col-form-label" for="fabricantes">Fabricantes:</label>
                      </div>
                                
                      <div class="form-group">
                          <input type="checkbox" class="control-sm col-lg-1" id="marcas" name="acceso[cm]">
                          <label class="col-lg-8 col-form-label" for="marcas">Marcas y Modelos:</label>
                      </div>
                                
                      <div class="form-group">
                          <input type="checkbox" class="control-sm col-lg-1" id="categorias" name="acceso[cc]">
                          <label class="col-lg-4 col-form-label" for="categorias">Categorías:</label>
                      </div>
          </div>
      </div>





       
      <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
        <input type="checkbox" data-toggle="collapse" data-target="#collapsediv2"> Personas</>
      </div>
          <div id='collapsediv2' class='collapse p-4  border'>
                  <div class="col-lg-4">
                      <div class="form-group" style="margin-bottom: 3px; ">
                          <input type="checkbox" class="control-sm col-lg-1" id="personas" name="acceso[pp]">
                          <label class="col-lg-4 col-form-label" for="personas">Personas:</label>
                      </div>
                  </div>
          </div>
</div>
  
        <button id="btGuardaProd" class="btn fa fa-save btn-success float-right" disabled=""> Guardar</button>
     </form>
</div>

<script type="text/javascript">
    $('body').on('click', '.fa-trash-o', function()  //Boton que borra categoria
{
    $(this).parent().parent().remove();  
    //$(this).parent().siblings().find('input').val()
    //$(this).parent().parent().attr('class')
 
});
$('input').attr("autocomplete","off");
$('body').on('change', '#email', function()
{
    $data="id="+$(this).val(); 
    $.get(' ', $data, function(subpage){
       $('#EspacioAccion').html(subpage);        
    }).fail(function() {
       console.log('Error en carga de Datos');
  });
});

 
function GuardarPersona()
{
  var data=$('#RegPersona').serialize();
     var data="_token={{ csrf_token()}}&"+data;
     console.log(data);
      $.post('RegistrarUsuario', data, function(subpage){  
        
              $('#btGuardaProd').attr("disabled",true);
              $("#codigo_producto").focus();
    });
}

</script>