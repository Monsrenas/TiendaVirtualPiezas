<script type="text/javascript">
    function CadenaMarcaModelo(codigo)
  {
      $data="codigo="+codigo;
      
      $.get('/CadenaMarcaModelo', $data, function(subpage){
          
         NombraElemento(subpage, 'MMV'+codigo);

        }).fail(function() {
           console.log('Error en carga de Datos');
      });

  }

</script>
<div class="modal" id="xVersiones" data-backdrop="false"  >
  <div class="modal-dialog" style="width: 1200px; max-width: 600px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title">Modelos de vehiculos</h6>
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <button type="button" id="agregaVersion" class="btn btn-success fa fa-plus" ></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body row" id="VersionADC">
 
        <div class="row " style="margin-bottom: 8px; padding-left: 4px;">
            <div class="col-md-4 control-sm">
              <div class="input-group  ">
                <select class="custom-select col-12" id="slctMarca" onchange="cargaSeleccion(this, 'id_marca')">
                  <option  value=0 selected>Marca...</option>
                </select>
              </div>
            </div>

            <div class="col-md-4 control-sm">
       
              <div class="input-group  ">
                <select class="custom-select col-12" id="slctModelo" onchange="cargaSeleccion(this, 'id_modelo')">
                  <option selected>Modelo...</option>
                </select>
              </div>
            </div>

            <div class="col-md-4 control-sm">
              <div class="input-group  ">
                <select class="custom-select col-12" id="slctVersion">
                  <option selected>Versión...</option>
                </select>
              </div>
            </div>
        </div>
 
            @if (isset($lista->modelos))	
            	@foreach ($lista->modelos as $xItem)
        
                 <div style='margin-top:4px' class="row col-md-12">
                  <div class="col-md-12">
                    <input type='text' class='col-md-2' name='modelos[]' value='{{$xItem}}'  placeholder='Código' readonly>
                    <label class="col-md-8" id="MMV{{$xItem}}"></label>
                    <script type="text/javascript">CadenaMarcaModelo('{{$xItem}}');</script>
                    <span class="col-md-2 control-sm">
                      <button class='btn btn-default fa fa-trash-o' type='button'></button>
                    </span>
                  </div>  
                </div>

              @endforeach 
            @endif  
    
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ActNumero('VersionADC', 'codigo_modelo')">Cerrar</button>
      </div>

    </div>
  </div>
</div>


<script type="text/javascript">
	
  $seleccionado='';
  $CadDescr='';

  $('#agregaVersion').on('click', function(){
  	  if (! $seleccionado) {return;}
      
      var NewCateg="<div style='margin-top:4px' class='row col-md-12'><div class='col-md-12'><input type='text' class='col-md-2' name='modelos[]' value='"+$seleccionado+"' readonly> <label class='col-md-8'>"+$CadDescr+"</label><span class='col-md-2 control-sm'><button class='btn btn-default fa fa-trash-o' type='button'></button></span></div></div>";

      $('#VersionADC').append(NewCateg);
      $("#slctMarca").val('0');
      vaciaSelecct('slctModelo');
       $seleccionado='';
       $CadDescr='';


       ActNumero('VersionADC', 'codigo_modelo'); 
  });

        


  $data="coleccion=Marca&columnas=nombre,id_marca";

  $.get('/Resgistro', $data, function(subpage){
      
     for (const indice in subpage)
      {
   
               AgregaOpcion('slctMarca', subpage[indice]['nombre'], subpage[indice]['id_marca'] )
      }

    }).fail(function() {
       console.log('Error en carga de Datos');
  });
  

  function cargaSeleccion(valor, campo)
  {       
        $CadDescr+=valor.options[valor.selectedIndex].text+" ";
        $seleccionado=valor.value;

        if (campo=='id_marca') { 
                                  casilla='slctModelo';
                                  columnas='nombre,id_modelo';
                                  coleccion='Modelo'; 
                                  ID='id_modelo';
                                } else {
                                          casilla='slctVersion';
                                          columnas='nombre,id_version';
                                          coleccion='Version'; 
                                          ID='id_version';
                                        }

        vaciaSelecct(casilla);
        $data="coleccion="+coleccion+"&columnas="+columnas+"&indice="+campo+"&ocurrencia="+valor.value;
        
        $.get('/Resgistro', $data, function(subpage){ 
           for (const indice in subpage)
            {
                     AgregaOpcion(casilla, subpage[indice]['nombre'], subpage[indice][ID] );
            }

          }).fail(function() {
             console.log('Error en carga de Datos');
        });
  }


     function AgregaOpcion($id, $opcion, $valor)
   {
      var x = document.getElementById($id);
      var option = document.createElement("option");    
      option.text = $opcion ;
      option.value= $valor;
      x.add(option);
    }

    function vaciaSelecct($id)
    {
       var x = document.getElementById($id);

        for (let i = x.options.length; i >= 1; i--) {
                                                          x.remove(i);
                                                    }
        return x;
    }

   $(document).ready(function(){ ActNumero('VersionADC', 'codigo_modelo');  });
</script>



