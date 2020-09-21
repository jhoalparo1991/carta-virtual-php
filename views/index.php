<?php include_once './views/includes/header.php' ?>
<div class="container py-4">
    <div class="row">
    	<div class="col-md-6 col-sm-12 mx-auto">
    		<div class="card">
    			<div class="card-header">
    				<h3 class="card-title text-center" style="color: #472210;">
    					Encuesta diagnostico Kuty
    				</h3>
    			</div>
    			<div class="card-body">
    				<form action="<?php echo constant('URL'); ?>main/survey" method="POST">

    					<div class="form-group">
    						<label for="fullname">Nombres y apellidos</label>
    						<input type="text" name="fullname" class="form-control" placeholder="Ingrese nombres y apellidos" autofocus="on" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<label for="phone">Telefono</label>
    						<input type="number" name="phone" class="form-control" placeholder="Ingrese un número telefonico" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<label for="type_document">Tipo Documento</label>
    						<select name="type_document" class="form-control">
    							<option value="CC">Cédula</option>
    							<option value="TI">Tarjeta Identidad</option>
    							<option value="RC">Registro Civil</option>
    							<option value="CE">Cédula Extranjera</option>
    						</select>
    						<label for="document">Número de documento</label>
    						<input type="number" name="document" class="form-control" placeholder="Ingrese un documento" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<label for="temperature">Temperatura</label>
    						<input type="number" name="temperature" class="form-control" placeholder="0°" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<div class="alert alert-info">
    						<p>
    							<b>¿Ha tenido presentado usted síntomas como gripa, tos, perdida de algun sentido en los ultimos 14 días?</b> 
    						</p>	    				
    						<label for="symptons"><input type="radio" name="symptons" value="Si">Si </label> 
    						<label for="symptons"><input type="radio" name="symptons" value="No" checked>No</label>
    						</div>    				
    					</div>
    				    <div class="form-group">
    				    	<input type="hidden" name="enterprise" value="Kuty Bogota">
    				    	<input type="hidden" name="campus" value="<?php $_SESSION['id']; ?>">
    				    </div>
    					<div class="form-group">
    						<input type="submit" value="Registrar" name="survey" class="btn btn-success btn-block">
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<?php include_once './views/includes/footer.php' ?>