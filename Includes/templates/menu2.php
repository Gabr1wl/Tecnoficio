<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous">  
  </script>
</head>
<body>
  <div class="jumbotron">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="/Practica4ProWeb/Cliente/imgs/Tecnoficio1.png" alt="" width="200" height="50">
        <a class="navbar-brand" href="/Practica4ProWeb/Cliente/index.php" style="margin-left: 17px;"><i class="bi bi-house-door-fill"></i> Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/Cliente/PerfilUs.php"><i class="bi bi-person-circle"></i> Perfil</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="/Practica4ProWeb/Cliente/CategoriaGral.php" role="button" aria-expanded="false"><i class="bi bi-newspaper"></i> Categorias</a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaGral.php"><i class="bi bi-list-check"></i> Todo</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaAyB.php"><i class="bi bi-cup-fill"></i> Alimentos y bebidas</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaBodas.php"><i class="bi bi-arrow-through-heart-fill"></i> Bodas</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaEntret.php"><i class="bi bi-joystick"></i> Entretenimiento</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaEntrena.php"><i class="bi bi-trophy-fill"></i> Entrenamiento</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaEdu.php"><i class="bi bi-mortarboard-fill"></i> Educacion</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaMasco.php"><i class="bi bi-dribbble"></i> Mascotas</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaRepara.php"><i class="bi bi-wrench-adjustable"></i> Reparaciones</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaSalud.php"><i class="bi bi-heart-pulse-fill"></i> Salud</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaSP.php"><i class="bi bi-award-fill"></i> Servicios profesionales</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/Practica4ProWeb/Cliente/CategoriaTiendas.php"><i class="bi bi-basket-fill"></i> Tiendas</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/Cliente/registroNe.php"><i class="bi bi-briefcase-fill"></i> Colabora con nosotros</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/Cliente/Contactos2.php"><i class="bi bi-mailbox2"></i> Contactos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/Cliente/acercaDe2.php"><i class="bi bi-question-circle-fill"></i> Acerca de</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/Cliente/UsuariosAdmin.php"><i class="bi bi-person-lines-fill"></i> Administración</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/Cliente/reportes.php"><i class="bi bi-clipboard2-fill"></i> Reportes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Practica4ProWeb/" onclick="Swal.fire({
                        icon: 'info',
                        title: '¡Adios!',
                        showConfirmButton: false
                })">
                <i class="bi bi-box-arrow-right"></i> Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</body>
</html>
