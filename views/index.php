<div class="container py-4">
    <div class="row">
    	<div class="col-md-6 col-sm-12 mx-auto">
    		<div class="card">
    			<div class="card-header">
    				<h3 class="card-title text-center title-survey" style="color: #472210;">
                        ENCUESTA DIAGNOSTICO CLIENTES PANADERIA KUTY
    				</h3>
                    <p class="text-center"><b>Resolución 1050 de 2020</b></p>
    			</div>
    			<div class="card-body">
    				<form action="<?=URL.'survey/create' ?>" method="POST">

    					<div class="form-group">
    						<label for="fullname">Nombres y apellidos</label>
    						<input type="text" value="<?=isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''?>" name="fullname" class="form-control" placeholder="Ingrese nombres y apellidos" autofocus="on" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<label for="phone">Telefono</label>
    						<input type="number" value="<?=isset($_SESSION['phone']) ? $_SESSION['phone'] : ''?>" name="phone" step="1" min="1" max="99999999999" class="form-control" placeholder="Ingrese un número telefonico" autocomplete="off" >
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
    						<input type="number" value="<?=isset($_SESSION['document']) ? $_SESSION['document'] : ''?>" name="document" step="1" min="1" max="99999999999" class="form-control" placeholder="Ingrese un documento" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<label for="temperature">Temperatura</label>
    						<input type="number" value="<?=isset($_SESSION['temperature']) ? $_SESSION['temperature'] : ''?>" step=".1" min="1" max="100" name="temperature" class="form-control" placeholder="0°" autocomplete="off" >
    					</div>
    					<div class="form-group">
    						<div class="alert" style="border: 1px solid #472210;">
    						<p>
    							<b>¿Ha tenido durante los ultimos 14 días síntomas de gripa o dificultad respiratoria ?</b> 
    						</p>	    				
    						<label for="symptons"><input type="radio" name="symptons" value="Si"><b>Si</b> </label> 
    						<label for="symptons"><input type="radio" name="symptons" value="No" checked><b>No</b></label>
    						</div>    				
    					</div>
    				    <div class="form-group">
    				    	<input type="hidden" name="enterprise" value="Kuty Bogota" required>
    				    	<input type="hidden" name="campus" value="<?php echo $_SESSION['id_enterprise']; ?>" required>
    				    </div>
    					<div class="form-group">
    						<input type="submit" value="Registrar" class="btn btn-success btn-block">
							<small class="text-danger"><?=isset($data['msg']) ? $data['msg'] : ''; ?></small>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</div>