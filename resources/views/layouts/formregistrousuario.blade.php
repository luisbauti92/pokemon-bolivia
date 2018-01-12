<!-- Content -->
  @if($errors->any())
 <script type="text/javascript">
          $(window).load(function(){
        $('#modal-register').modal('show');
    });
</script>
@endif

        <!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">

        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">REGISTRATE AHORA!!</h3>
        				<p>Es necesario registrarte para poder acceder a todo el contenido de la pagina</p>
        			</div>

        			<div class="modal-body">
        				@if($errors->any())
								<div class="alert alert-danger">
								<strong><p>Tiene los siguientes errores:</p></strong>
        										@foreach($errors->all() as $error)
  													<li>{{$error}}</li>
												@endforeach
								</div>
        				@endif
	                    <form enctype="multipart/form-data" role="form" action="{{url('')}}/newuser.store" method="post" class="registration-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-first-name">Nombres</label>
	                        	<input type="text" name="nombre" placeholder="Nombres..." class="form-first-name form-control" id="form-first-name" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-last-name">Apellido Paterno</label>
	                        	<input type="text" name="apellido_paterno" placeholder="Apellidos..." class="form-last-name form-control" id="form-last-name" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-last-name">Apellido Materno</label>
	                        	<input type="text" name="apellido_materno" placeholder="Apellidos..." class="form-last-name form-control" id="form-last-name" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-usuario">Nombre de Usuario</label>
	                        	<input type="text" name="usuario" placeholder="Ingrese el nombre de usuario..." class="form-last-name form-control" id="form-usuario" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="password" placeholder="Email..." class="form-last-name form-control" id="form-password" required>
	                        </div>
	                        <!-- <div class="form-group">
	                        	<label class="sr-only" for="form-email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
	                        </div> -->
	                        <div class="form-group">
	                    		<label class="sr-only" for="form-nick">CI</label>
	                        	<input type="text" name="ci" placeholder="Ingrese su CI" class="form-nick form-control" id="form-nick" required>
	                        </div>
	                        <!-- <div class="form-group">
	                        	<label class="sr-only" for="form-fc">FRIENDCODE</label>
	                        	<input type="text" name="fc" placeholder="Ingrese su friendcode" class="form-last-name form-control" id="form-fc" required>
	                        </div> -->

							<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	                        <button class="btn btn-success" type="submit" class="btn">COMPLETAR REGISTRO	</button>
	                    </form>

        			</div>

        		</div>
        	</div>
        </div>

<script type="text/javascript">
	document.getElementById("form-password").placeholder = "Ingrese su password";
</script>
