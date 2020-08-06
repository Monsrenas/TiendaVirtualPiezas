@extends('panel.menu')
@section('operaciones')

<div id="Centro" style="font-size: 0.8em;">
	<div class="header">
    
  </div>
	<form  method="POST"  action="" class="form-horizontal md-form" id="datosrecepcion" style="font-size: .85em;">
  @csrf

    <div class="card-header card">
        <h6>Recepción de productos</h6>
      </div>

    <div class="col-lg-12 card" style="background: white; padding: 20px; ">
    <div class="row" style="margin-bottom: 3px;">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">        
                                                <table id="tablamarcas" class="table table-striped table-bordered" style="width:100%">
                                                <thead id="cuerpo">
                                                    <tr>
                                                        <th>Fecha: <input type="date" class="form-control-sm" name="fecha" required></th>
                                                        <th>Almacen: <select class="form-control-sm" required>
                                                          <option value="001">Almacen 1</option> 
                                                          <option value="002" selected>Almacen 2</option>
                                                          <option value="003">Almacen 3</option>
                                                        </select></th>
                                                        <th>Numero documento: <input type="text" class="form-control-sm" name="documento" required> </th> 
                                                    </tr>
                                                </thead>
                                          </table>                  
                                            </div>
                                        </div>
                                </div>  
         <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="codigo_fabricante">Código Producto:</label>
                  <div class="col-sm-3 input-group" >
                    <input type="text" class="form-control form-control-sm" id="codigo" name="codigo" required>
                    <div class="input-group-btn input-group-append">
                          <button  type="button" class="btn btn-info btn-sm"data-toggle="modal" data-target="#myModal" onclick="Modal('codificador.ObtenCodigoFabricante','codigo_fabricante','descr_fabricante')"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                  <label class="col-lg-2 col-form-label text-left" id="descr_producto"></label>
        </div>

        
       <div class="form-group row"  style="margin-bottom: 3px; ">
            <label class="col-lg-2 col-form-label text-md-left text-lg-right" for="codigo">Cantidad:</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="codigo_producto" name="codigo"  required>
              <div class="col-sm-12" id="grupocodigo">  </div>
            </div>           
        </div>

        <div class="form-group row"  style="margin-bottom: 3px; ">
            <label class="col-lg-2 col-form-label text-md-left text-lg-right" for="codigo">Precio:</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="codigo_producto" name="codigo" required>
              <div class="col-sm-12" id="grupocodigo">  </div>
            </div>
        </div>
        <div class="col-lg-10 text-md-left text-lg-right ">
            <button class="btn btn-success btn-sm" id="GuardarForm" type="submit">agregar <i class="fa fa-plus"></i></button>
        </div>
                             
        <div class="container"  style="margin-top: 20px;">
          <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablamarcas" class="table table-striped table-bordered" style="width:100%">
                    <thead id="cuerpo">
                        <tr>
                            <th>Código</th>
                            <th>Cantidad</th>
                            <th>Precio</th>     
                         
                        </tr>
                    </thead>
                    <tbody>                              

                      <tr>
                        <td style="font-size: 0.7em;"> 
                        </td>
                        <td style="font-size: 0.7em;"> 
                        </td>
                        <td style="font-size: 0.7em;"> 
                        </td>
                       
                      </tr>
                                                       
                    </tbody>               
                    </table>    
              
                </div>
              </div>
            </div>  
          </div> 

      		  
    		  <div class="col-lg-10 text-md-left text-lg-right ">
  				  <button class="btn btn-success btn-sm" id="GuardarForm" type="submit">Recepcionar <i class="fa fa-save"></i></button>
    		  </div> 
    </div>
      
  </form>
</div>
 
@endsection