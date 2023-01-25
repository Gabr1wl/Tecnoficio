
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

<div class="container" style="background-color: white;">
          <br>     
          <div class="col mb-5">
            <div class="text-center">
                <img class="img-fluid rounded-circle mb-1 px-3" src="imgs/Fer.jpg" width="350px" height="350px"/>
                <div class="fst-italic text-muted"></div>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <ul class="list-group list-group-flush">
                <li class="list-group-item active" aria-current="true"><h5>Datos</h5></li>
                <li class="list-group-item">Nombre: Fernando Gabriel</li>
                <li class="list-group-item">Apellido Paterno: Cruz</li>
                <li class="list-group-item">Apellido Materno: Zepeda</li>
                <li class="list-group-item">Correo electrónico: superbal27@gmail.com</li>
                <li class="list-group-item">Contraseña: 271121</li>
                <li class="list-group-item">Número telefónico: 2285134054</li>
                <li class="list-group-item">Dirección: C. Pinos 93, Fracc. Vista, Malintzi</li>
                <li class="list-group-item">Num. Int: 5</li>
                <li class="list-group-item">Num. Ext: 93</li>
                <li class="list-group-item">CP: 90010</li>
                <li class="list-group-item">Estado: Tlaxcala</li>
                <li class="list-group-item">Municipio: Tlaxcala de Xicohténcatl</li>
                <li class="list-group-item"></li>
              </ul>
            </div>
            <div class="col">
              <div class="list-group ">
                <li class="list-group-item bg-warning" aria-current="true"> <h5>Ultimas solicitudes</h5></li>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Plomería</h5>
                    <small>Ayer</small>
                  </div>
                  <p class="mb-1" style="padding: 1px;">Hace días que mi grifo me arroja basura por el agua, como si se tratara de sarro.</p>
                  <small></small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Carpintería</h5>
                    <small class="text-muted">Hace 15 dias</small>
                  </div>
                  <p class="mb-1" style="padding: 1px;">Necesito un perchero con medidas de un 1,80 mts, estantes flotantes y la reparación de una mesa de centro.</p>
                  <small></small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Asesoría legal</h5>
                    <small class="text-muted">Hace 2 semana</small>
                  </div>
                  <p class="mb-1" style="padding: 1px;">Fui estafado hace unos días, ya que adquirí una propiedad que supuestamente no tenía dueño y resulto lo contrario.</p>
                  <small></small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Médico</h5>
                    <small class="text-muted">Hace 1 mes</small>
                  </div>
                  <p class="mb-1" style="padding: 1px;">El día de ayer me sentí mal, tuve vómito, congestión nasal como si se tratara de un resfriado.</p>
                  <small></small>
                </a>
                <br>
              <table class="table table-hover">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atendió</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Costo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Hector Ortíz</td>
                    <td>30/10/2021</td>
                    <td>$200</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Javier Hernández</td>
                    <td>16/10/2021</td>
                    <td>$1460</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Andrea Navarrete</td>
                    <td>11/10/2021</td>
                    <td>$1200</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Federico Mastranzo</td>
                    <td>24/09/2021</td>
                    <td>$380</td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <br><br>
    
  

    <?php include "Includes/templates/footer.php"; ?>