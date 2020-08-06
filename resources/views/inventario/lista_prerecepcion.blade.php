
<div id="Centro"  style="font-size: 0.68em;">
  <div class="card card-sm">
    <div class="card-header">
        <h6>Pre-recepción</h6>
    </div>
    <div class="card-body">
       
        <div class="card">
            <div class="card-header bg-primary" style="color: white; " >
              <div class="row">  
              <strong class="col-lg-10" style="font-size: 1.6em;" ><i class="fa fa-list"></i> Productos a recepcionar </strong>
              <div class="col-lg-1"><a href="#" class="btn fa fa-plus btn-success" data-toggle="modal" data-target="#ModalAuxiliar" onclick="javascript:EditaMarca('', 'nuevaMarca')"></a></div>
              </div>
            </div>

            <div class="col-lg-12 card-body" style="background: white; padding: 20px; ">
            
                                          
                <!--Ejemplo tabla con DataTables-->
                <div class="container">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">     

                                    <table id="tablamarcas" class="table table-striped table-bordered" style="">
                                    <thead id="cuerpo">
                                        <tr HEIGHT="10">
                                            
                                            <th>Código</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Almacén</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lista as $producto)
                                            <tr>
                                                <td>{{ $producto->codigo}}</td>
                                                <td><a href="#">{{ $producto->cantidad }}</a></td>
                                                <td>{{ $producto->precio) }}</td>
                                                <td>{{ $producto->almacen) }}</td>
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
    </div>
  </div>    
</div>
     
<script type="text/javascript" src="/jquery/main.js"></script>