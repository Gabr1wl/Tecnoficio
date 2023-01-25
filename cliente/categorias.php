
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

<div class="container2" style="background-color: white;">
      <div class="card-header">
        <h3 class="fw-bold"><i class="bi "></i> Categoria general</h3>
      </div>
      <div class="container">
        <br>

        <div class="row">
            <!-- Primera Seccion -->
            <div class="col">   
                <div class="card" style="width: 15rem;  border-radius:7px">
                    <img src="imgs/Alimentos y bebidas.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Alimentos y Bebidas</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaAyB.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/bodas.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Bodas</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaBodas.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/entrenamiento.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Entrenamiento</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaEntrena.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <!-- Fin Primera Seccion -->
        </div>
        <br>
        <div class="row">
            <!-- Segunda Seccion -->
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/entretenimiento.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Entretenimiento</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaEntret.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/educacion.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Educación</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaEdu.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/mascotas.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mascotas</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaMasco.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <!-- Fin Segunda Seccion -->
        </div>
        <br>
        <div class="row">
            <!-- Tercera Seccion -->
            <div class="col">   
                <div class="card" style="width: 15rem;">
                    <img src="imgs/Reparaciones.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Reparaciones</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaRepara.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/salud.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Salud</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaSalud.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="imgs/profesional.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Servicios profesionales</h5>
                        <a type="button" class="btn btn-outline-primary" href="/Practica4ProWeb/Cliente/CategoriaSP.php"><i class="bi bi-eye-fill"></i> Visitar</a>
                    </div>
                </div>
                <br>
            </div>
            <!-- Fin Tercera Seccion -->
      </div>
    </div>
    
  

    <?php include "Includes/templates/footer.php"; ?>