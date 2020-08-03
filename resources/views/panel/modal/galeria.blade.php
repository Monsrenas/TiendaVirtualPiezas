<style type="text/css">
  .marco_producto {
            border: 1px solid #C4C4C4;
            float: left;
            border-radius: 8px ;
            position: relative;
              width: 80px;
              height: 100px;
              overflow: hidden;
              box-shadow: 1px 1px 5px rgba(50,50,50 0.5);
              text-align: center;

              margin: 1px;
              padding: 1px;
              background: white;
          }

     .marco_producto:hover {
  transform: scale(2.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
 /* -webkit-box-shadow: 1px 3px 2px 2px rgba(58,58,58,0.79); 
box-shadow: 1px 3px 2px 2px rgba(58,58,58,0.79);  */
transition-duration:0.2s;
  
    
}


.marco_producto a:hover { background: white; }

  .marco_foto {
      width: 88%;
      height: 60px;
      text-align: center;
      padding: 2px;
       
      overflow: hidden;
  }

  @supports(object-fit: cover){
    .marco_foto img{
      height: 100%;
      object-fit: cover;
      object-position: center center;
      padding: 4px;
    }      

  .descripcion {  padding: 5px;
          font-size: .8em;
          text-align: justify;
          
          height: 60px;
          overflow: hidden;
         }
  .descripcion p { color: #0055ff; 
           margin-top: 0px;}
</style>

 
<div id="xCentro">

</div>

 



<script type="text/javascript">

  cargarListaImagen();

    function cargarListaImagen()
  {
     $data='{{ csrf_token()}}&referencia=productos';  
     $('#xCentro').empty();

     $.get('ListaImagenes', $data, function(subpage){ 
        
          for (const imagen in subpage)
          {
            insertaImagen(subpage[imagen]);
          }

    }).fail(function() {
       console.log('Error en carga de Datos');
  });

  }

function insertaImagen($imagen)
{   
  
  $Marco="<div class='marco_producto'> <a class='btn btn-sm '><div class='marco_foto'><img class='foto' id='imagen' src='"+$imagen+"'/></div><div class='descripcion'><p></p> </div></a></div>";

      var txt = document.getElementById('xCentro');
      txt.insertAdjacentHTML('beforeend', $Marco);
}
</script>