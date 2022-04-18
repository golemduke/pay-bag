<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" type="text/css" href="../Views/estilos.css">
    <link rel="shortcut icon" type="image/png" href="../PayBagFavicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Pay Bag</title>
  </head>
  <body>
    <header class="header">
        <div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../Home/indexHome.php"><img class="logo" src="../Logo Pay Bag Azul.jpeg" alt="" height="90"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <?php 
              if ($_SESSION["tipo"] == 1){ ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rutas</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Rutas/indexRuta.php">Ver Rutas</a>
                    <a class="dropdown-item" href="../Rutas/createRuta.php">Crear Rutas</a>
                  </div>
                </li>
              <?php } ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Clientes/indexCli.php">Ver Clientes</a>
                    <a class="dropdown-item" href="../Clientes/createCli.php">Crear Clientes</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prestamos</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Prestamos/indexPres.php">Ver Prestamos</a>
                    <a class="dropdown-item" href="../Prestamos/createPres.php">Crear Prestamos</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gastos</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Gastos/indexGas.php">Ver Gastos</a>
                    <a class="dropdown-item" href="../Gastos/createGas.php?id=<?= $_SESSION['id'] ?>">Ingresar Gasto</a>
                  </div>
                </li>
                <?php 
                if ($_SESSION["tipo"] == 1){ ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Usuarios/indexUsu.php">Ver Usuarios</a>
                    <a class="dropdown-item" href="../Usuarios/createUsu.php">Crear Usuarios</a>
                  </div>
                </li>
                <?php } ?>
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuración</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Usuarios/editDatos.php?id=<?= $_SESSION['id'] ?>">Actualizar Datos de Sesión</a>
                  </div>
                </li>                
              </ul>
              <span class="mx-4"><?= $_SESSION["usuario"] ?></span>
              <a href="../cerrarSesion.php" class="btn btn-secondary" id="btnCerrar">Cerrar Sesión</a>
            </div>
          </nav>
        </div>
    </header>