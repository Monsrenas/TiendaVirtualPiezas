<form action="{{url('Traslado')}}" method="post">
	@csrf
      <input type="text" name="nombre" value="admin">
      <input type="email" name="email" value="admin@administrador.com">
		<input type="text" name="password">	
	     <div class="col-lg-10 text-md-left text-lg-right ">
            <button class="btn btn-success btn-sm"  type="submit">Crear</button>
        </div>
 
	
</form>	