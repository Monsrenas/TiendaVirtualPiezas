<?php 
   
   if (isset( $lista)) {echo 'Existe';} else {echo 'No existe';}
?>

<div class="container">
    <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablamodelos" class="table table-striped table-bordered" style="width:100%">
                    <thead >
                        <tr>
                            <th><i class="fa fa-list"></i></th>
                            <th>Puesto</th>
                            <th>Ciudad</th>
                             
                            <th><i class="fa fa-list"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Arquitecto</td>
                            <td>Edinburgh</td>
                             
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Contador</td>
                            <td>Tokyo</td>
                          
                            <td>$170,750</td>
                        </tr>                
                  
                    </tbody>        
                   </table>                  
                </div>
            </div>
    </div> 
 </div>          

<script type="text/javascript">
    $(document).ready(function() {    
    $('#tablamodelos').DataTable({
    //para cambiar el lenguaje a español
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                 },
                 "sProcessing":"Procesando...",
            }
    });     
});
</script>