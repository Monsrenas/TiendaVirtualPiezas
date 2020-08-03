<div class="modal" id="xFotos" data-backdrop="false"  >
  <div class="modal-dialog" style="width: 1200px; max-width: 650px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title">Fotos del producto</h6>
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
      </div>
      
 
      <!-- Modal body -->
      <div class="card-deck" style="padding: 10px;">
      <div class="card"> 
        <div class="card-header">Imagenes seleccionadas</div>
      <div class="modal-body row" >
        <div class="card-body" id="FotoADC">
            @if (isset($lista->fotos))	
            	@foreach ($lista->fotos as $xItem)
          
                  <div class='col-md-12'>
                    <input type='text' class='col-md-8' name='modelos[]' value='{{$xItem}}' readonly>
                    <span class='col-md-2 control-sm'><button class='btn btn-default fa fa-trash-o' type='button'></button></span>
                  </div>

              @endforeach 
            @endif
          </div>
        </div> 
      </div>
      <div class="card"> 
         <input id="fotoUpl" type="file" style="display:none" name="fichero1" accept="image/*" onchange="alert(this.value)">
          <div class="card-header"> Galeria de imagenes 
            <span style="float: right;">
            <button type="button" id="fotofile" class="btn btn-success btn-sm fa fa-folder" ></button>
            </span>  
          </div><div class="card-body" id="FotoGaleria" style="max-height: 500px; overflow: scroll;"></div>  
      </div>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>


<script type="text/javascript">
	 
   $('body').on('click', '.foto', function(){      

    $camino=decodeURIComponent($(this)[0]['src']);
    $posicion=$camino.lastIndexOf("/"); 
    $fichero=($camino.substring($posicion+1));

    
        agregaFoto($fichero);
    //$('#'+$descr).text($(this)[0].innerText);
   // if ($(this).hasClass("caretX-down")||$(this).hasClass("xcaretX")){
   //   FiltrarCategoria($(this)['0']['id']);    }   

 });
  
   function agregaFoto(imagenName)
  {
  
      $ItmFoto=imagenName;
      var NewCateg="<div class='col-md-12'><input type='text' class='col-md-8' name='modelos[]' value='"+$ItmFoto+"' readonly><span class='col-md-2 control-sm'><button class='btn btn-default fa fa-trash-o' type='button'></button></span></div>";

      $('#FotoADC').append(NewCateg);
      
  }

       $data='{{ csrf_token()}}&url=panel.modal.galeria&campo=&descripcion=';
         $.get('Vista', $data, function(subpage){ 
                                $('#FotoGaleria').empty().append(subpage);
                                    }).fail(function() {
                                           console.log('Error en carga de Datos');
                                       });

  // http://duckranger.com/2012/06/pretty-file-input-field-in-bootstrap/ 
  // Cuando se pulsa el falso manda el click al autentico
  $('#fotofile').on('click', function(){
    $('#fotoUpl').click();
  });
  
  // Cuando el autentico cambia hace cambiar al falso
  $('input[type=file]').on('change', function(e){
    $(this).next().find('input').val($(this).val());
  });
 
</script>