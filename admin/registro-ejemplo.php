
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/inicioSesion.css">
    <title>Registros</title>
</head>
<body >
    

    <?php
    if(isset($_GET['mensaje']) and $_GET['mensaje']=='Hay campos vacios'){
    ?>
    <div clas=alert style="background-color:#FC583A;">
    <center><strong style="color:#fff;">Rellena todos los campos</strong></center>
    </div>
    <?php
    }
    ?>

    <?php
    if(isset($_GET['mensaje']) and $_GET['mensaje']=='registrado correctamente'){
    ?>
    <div clas=alert style="background-color:#ffff;">
    <center><strong style="color:rgb(0, 19, 129); ;">Registro correcto</strong></center>
    </div>
    <?php
    }
    ?>
 
    <div id="formulario"class="containert">
        <div class="container-form">    
            <form action="Registrar.php" class="form" id="formulario" method="POST">
                
                <h3>Usuario(s)</h3>
                <input name="username" id="usuario" type="text" require="" pattern="[a-zA-Z]+" minlength="4" maxlength="25">
                <h3>Nombre Completo</h3>
                <input name="full_name" id="full_name" type="text" required pattern="[a-zA-Z]+" minlength="5" maxlength="25">
                <h3>Correo</h3>
                <input name="email" id="email" type="email" required>
                <h3>Contraseña</h3>
                <input name="password" id="password" type="password" name="pas" minlength="5"  maxlength="15" required>
                <input type="hidden" name="oculto" value="1" >
                <input style="background-color: white;" class="regAndLoginButton" type="submit" value="Registrar">    
            
            </form> 
        </div>
    </div>

</body>
</html>