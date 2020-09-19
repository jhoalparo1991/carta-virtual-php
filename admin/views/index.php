<?php include_once 'header.php'; ?>
	<div class="container ">
		
		<div class="row">
			<div class="col-sm-12 col-md-6 mx-auto">
				<div class="card">
			        <div class="card-header">
				        <h1 class="card-title text-center">Iniciar Sesión</h1>
			        </div>
			        <div class="card-body">
			        	<form action="main.php" method="POST">
			        		<div class="form-group">
			        			<label for="email">Email</label>
			        			<input type="email" name="email" id="email" placeholder="Ingrese su correo" class="form-control input">
			        		</div>
			        		<div class="form-group">
			        			<label for="password">Clave de ingreso</label>
			        			<input type="password" name="password" id="password" placeholder="Clave de ingreso" class="form-control input">
			        		</div>
			        		<div class="form-group">
			        			<button type="submit" class="btn btn-block button">Ingresar</button>
			        		</div>
			        	</form>
			        </div>
		       </div>
			</div>
		</div>
	</div>
	<?php include_once 'footer.php'; ?>