<?php
	session_start();

	// IF THE USER HAS ALREADY LOGGED IN
	if(isset($_SESSION['super_admin']) && isset($_SESSION['super_password']))
	{
		header('Location: index.php');
		exit();
	}
	// ELSE
	$pageTitle = 'Super Admin';
	include 'connect.php';
	include 'Includes/functions/functions.php';


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<!-- FONTS FILE -->
		<link href="Design/fonts/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Nunito FONT FAMILY FILE -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- CSS FILES -->
		<link href="Design/css/sb-admin-2.min.css" rel="stylesheet">
		<link href="Design/css/main.css" rel="stylesheet">
		<style type="text/css">
			body {
			background-image: url(/barberia/imgs/bgd1.png);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			}
		</style>
	</head>
	<body>
		<div class="login">
			<form class="login-container validate-form" name="login-form" method="POST" action="login.php" onsubmit="return validateLogInForm()">
				<span class="login100-form-title p-b-32">
					<img src="/barberia/imgs/Tecnoficio1.png" width="400px">
				</span>
				<!-- PHP SCRIPT WHEN SUBMIT -->

				<?php

					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin-button']))
					{
						$username = test_input($_POST['username']);
						$password = test_input($_POST['password']);

						//Check if User Exist In database

						$stmt = $con->prepare("SELECT admin_id, username,password FROM barber_admin WHERE username = ? AND password = ?");
						$stmt->execute(array($username,$password));
						$row = $stmt->fetch();
						$count = $stmt->rowCount();

						// Check if count > 0 which mean that the database contain a record about this username

						if($count > 0)
						{

							$_SESSION['super_admin'] = $username;
							$_SESSION['super_password'] = $password;
							$_SESSION['super_admin_id'] = $row['admin_id'];
							header('Location: index.php');
							die();
						}
						else
						{
							?>

							<div class="alert alert-danger">
								<button data-dismiss="alert" class="close close-sm" type="button">
									<span aria-hidden="true">×</span>
								</button>
								<div class="messages">
									<div><i class="bi bi-exclamation-circle-fill"></i> ¡Nombre de usuario o contraseña incorrectos!</div>
								</div>
							</div>

							<?php
						}
					}

				?>

				<!-- USERNAME INPUT -->

				<div class="form-input">
					<span class="txt1"></i>Correo electrónico o nombre de usuario</span>
					<input type="text" name="username" class = "form-control" oninput = "getElementById('required_username').style.display = 'none'" autocomplete="off">
					<span class="invalid-feedback" id="required_username"><i class="bi bi-exclamation-circle-fill"></i> ¡Se requiere nombre de usuario!</span>
				</div>

				
				
				<!-- PASSWORD INPUT -->

				<div class="form-input">
					<span class="txt1">Contraseña</span>
					<input type="password" name="password" class="form-control" oninput = "getElementById('required_password').style.display = 'none'" autocomplete="new-password">
					<span class="invalid-feedback" id="required_password"><i class="bi bi-exclamation-circle-fill"></i> ¡Se requiere contraseña!</span>
				</div>
				
				<!-- SIGN IN BUTTON -->

				<p>
					<button type="submit" name="signin-button" ><i class="bi bi-box-arrow-right"></i> Ingresar</button>
				</p>

				<!-- FORGOT YOUR PASSWORD LINK -->

				<span class="forgotPW"><i class="bi bi-info-circle-fill"></i> ¿Olvidó su contraseña? <a href="#">Recuperela aqui.</a></span>
			</form>
		</div>
		
		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
		  		<div class="copyright text-center my-auto">
					<span>Copyright &copy; Barbershop Website by JAIRI IDRISS 2020</span>
		  		</div>
			</div>
	  	</footer>
		<!-- End of Footer -->

		<!-- INCLUDE JS SCRIPTS -->
		<script src="Design/js/jquery.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="Design/js/bootstrap.bundle.min.js"></script>
		<script src="Design/js/sb-admin-2.min.js"></script>
		<script src="Design/js/main.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	</body>
</html>