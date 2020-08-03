<div class="modal" id="xMedidas" data-backdrop="false"  >
  <div class="modal-dialog" style="width: 1200px; max-width: 600px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title">Medidas del producto</h6>
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <button type="button" id="agregaMedida" class="btn btn-success fa fa-plus" ></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body row" id="MedidaADC">
 
        <div class="row " style="margin-bottom: 8px; padding-left: 4px;">
            <div class="col-md-6">
              <div class="input-group  ">
                <select class="custom-select" id="slctMedida" onchange="xSelecciona(this)">
                  <option  value=0 selected>Medida...</option>
                </select>
              </div>
            </div>

            <div class="col-md-5 control-lg"> <input type="text" class="form-control input-lg" id="DATNumerico" placeholder="Valor" style="display: none;"></div>
        </div>

            @if (isset($lista->medidas))	
            	@foreach ($lista->medidas as $xItem)
        
                 <div style='margin-top:4px' class="row col-md-12">
                  <div class="col-md-12">
                    <input type='text' class='col-md-2' name='medidas[]' value='{{$xItem}}'  placeholder='Código' readonly>
                    <label class="col-md-8"> </label>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ActNumero('MedidaADC', 'codigo_medida')">Cerrar</button>
      </div>

    </div>
  </div>
</div>


<script type="text/javascript">
	

$CadDescr="";  
$seleccionado='';

  $('#agregaMedida').on('click', function(){

      valor=parseInt($('#DATNumerico').val(), 10);
      console.log(valor);
  	  if ((! $seleccionado)||(valor==0)) {return;}
      
      var NewCateg="<div style='margin-top:4px' class='row col-md-12'><div class='col-md-12'><input type='text' class='col-md-2' name=\"medidas["+$seleccionado+"]\" value='"+valor+"' readonly> <label class='col-md-8'>"+$CadDescr+"</label><span class='col-md-2 control-sm'><button class='btn btn-default fa fa-trash-o' type='button'></button></span></div></div>";

      $('#MedidaADC').append(NewCateg);
      $("#slctMedida").val('0');
    
       $seleccionado='';
       $CadDescr='';
       $('#DATNumerico').val('');
       $('#DATNumerico').css("display", "none");

       ActNumero('MedidaADC', 'codigo_medida'); 
  });

        


  $data="coleccion=Medida";

  $.get('Resgistro', $data, function(subpage){ 
     for (const indice in subpage)
      {
               AgregaOpcion('slctMedida', subpage[indice]['nombre'], subpage[indice]['codigo'] )
      }

    }).fail(function() {
       console.log('Error en carga de Datos');
  });
  
     function AgregaOpcion($id, $opcion, $valor)
   {
      var x = document.getElementById($id);
      var option = document.createElement("option");    
      option.text = $opcion ;
      option.value= $valor;
      x.add(option);
    }

function xSelecciona(valor)
{
  if (valor.value==0) {
                        $seleccionado='';
                        $CadDescr=''; 
                        return; }  
  $CadDescr=valor.options[valor.selectedIndex].text+" ";  
  $seleccionado=valor.value;
  $('#DATNumerico').css("display", "block");
  $('#DATNumerico').focus();
}
</script>



