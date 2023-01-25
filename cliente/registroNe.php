
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>


<div class="container" style="background-color: #fff;">
			
				<div class="col">
					
					<p><i class="bi bi-info-circle"></i> La informacion proporcionada deberá ser validada, esto puede tomar de 3 a 5 dias habiles</p>
					<form class="needs-validation" action="" method="post" autocomplete="off" novalidate>
						<div class="row">
							<div class="col">
								<div class="form-floating">
                                <label for="rfc">RFC*</label>
									<input type="text" for="validationCustom01" class="form-control" id="rfc" name="rfc" placeholder="RFC" required minlength="4" maxlength="13" size="10">
									
                  <div class="valid-feedback">
                    ¡Validado!
                  </div>
                  <div class="invalid-feedback">
                    Ups!
                  </div>
								</div>
							</div>
							<div class="col">
								<div class="form-floating">
                                <label for="ced">Cedula*</label>
									<input type="text" for="validationCustom02" class="form-control" id="ced" name="ced" placeholder="Cedula" pattern="^([0-9])*$" required maxlength="8">
									
                  <div class="valid-feedback">
                    ¡Validado!
                  </div>
                  <div class="invalid-feedback">
                    Ups!
                  </div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<div class="form-floating">
									<input type="text" for="validationCustom03" class="form-control" id="neg" name="neg" placeholder="Negocio" required>
									<label for="neg">Nombre del negocio*</label>
                  <div class="valid-feedback">
                    ¡Validado!
                  </div>
                  <div class="invalid-feedback">
                    Ups!
                  </div>
								</div>
							</div>
							<div class="col">
								<div class="form-floating">
									<select class="form-select" id="cat" aria-label="Floating label select example" required>
								  		<option value="1">Alimentos y bebidas</option>
								    	<option value="2">Bodas</option>
								    	<option value="3">Entretenimiento</option>
								    	<option value="4">Entrenamiento</option>
								    	<option value="5">Educacion</option>
								    	<option value="6">Mascotas</option>
								    	<option value="7">Reparaciones</option>
								    	<option value="8">Salud</option>
								    	<option value="9">Servicios profesionales</option>
								    	<option value="10">Tiendas</option>
								  	</select>
									<label for="floatingSelect">Categoria*</label>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<div class="form-floating">
									<input type="text" for="validationCustom04" class="form-control" id="ubi" name="ubi" placeholder="Ubicacion con API" required>
									<label for="ubi">Ubicación*</label>
                  <div class="valid-feedback">
                    ¡Validado!
                  </div>
                  <div class="invalid-feedback">
                    Ups!
                  </div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<div class="form-floating">
								  	<textarea class="form-control" for="validationCustom05" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required maxlength="200"></textarea>
								  	<label for="floatingTextarea2">Descripcion*</label>
                    <div class="valid-feedback">
                      ¡Validado!
                    </div>
                    <div class="invalid-feedback">
                      Ups!
                    </div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="d-grid gap-2 d-md-flex justify-content-md-center">
									<button type="button" class="btn btn-link"><a href="">Terminos y condiciones</a></button>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
									<label class="form-check-label" for="flexCheckDefault">
									    He leido y acepto los términos
									</label>
                  <div class="invalid-feedback">
      							Usted debe aceptar los términos.
      						</div>
								</div>
							</div>
						</div>
            <br>
						<div class="d-grid gap-2 d-md-flex justify-content-md-center">
							<button type="button" class="btn btn-outline-warning"><h6>Mas tarde</h6></button>
							<button type="submit" class="btn btn-outline-info" 
							onclick="Swal.fire({
								icon: 'success',
								title: '¡Registro exitoso!',
								showConfirmButton: false
							})"
							name="register"><h6>Registrar</h6></button>
						</div>
						<br>

					</form>
				</div>
			</div>
		</div>
    
  

    <?php include "Includes/templates/footer.php"; ?>