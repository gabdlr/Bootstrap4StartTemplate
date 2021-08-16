<?php 
//Definir un nombre para cachear
$pagina = basename($_SERVER['PHP_SELF'], ".php");
//Definir archivo para cachear (puede ser .php tambien)
//Cuando se utiliza un parametro hay que generar una pagina diferente en el cache para
//cada uno (pagina producto.php)
if (isset($_GET["id"])){
  $archivoCache = 'cache/'.$pagina."-".$_GET["id"].'.html';
} else {
  $archivoCache = 'cache/'.$pagina.'.html';

}

//Cuanto tiempo debera estar este archivo almacenado
$tiempo = 36000;
//Chequear que el archivo exista, el tiempo sea el adecuado y mostrarlo
if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
    include($archivoCache);
    exit;
}
//Si el archivo no existe, o el tiempo de cacheo ya se vencio, se genera uno nuevo
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://kit.fontawesome.com/24fcc6f258.js" crossorigin="anonymous"></script>
  <title>Carolina Spa</title>
</head>

<body>
  <!-- Add Your HTML here -->
  <header class="encabezado-sitio container">
    <div class="row justify-content-md-between">
      <div class="col-lg-4 pt-4 pb-4">
        <a href="index.php">
          <img src="img/logo.svg" alt="logo" class="img-fluid mx-auto d-block">
        </a>
      </div>
      <div class="col-lg-4">
        <nav class="sociales text-center text-lg-right pt-4">
          <ul>
            <li><a href="https://facebook.com"><span class="sr-only">Facebook</span></a></li>
            <li><a href="https://twitter.com"><span class="sr-only">Twitter</span></a></li>
            <li><a href="https://instagram.com"><span class="sr-only">Instagram</span></a></li>
            <li><a href="https://pinterest.com"><span class="sr-only">Pinterest</span></a></li>
            <li><a href="https://youtube.com"><span class="sr-only">Youtube</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="navegacion mt-3 mt-lg-0 py-1">
    <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal"
        aria-label="Mostrar Navegacion">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" class="navbar-brand d-md-none">Carolina Spa</a>
      <div class="container">
        <div class="collapse navbar-collapse " id="nav_principal">
          <ul class="nav nav-justified w-100 flex-column flex-md-row">
            <li class="nav-item mt-2 mt-md-0"><a href="index.php" class="nav-link <?php echo $pagina === "index" ? "active" : "" ?>">Inicio</a></li>
            <li class="nav-item"><a href="nosotros.php" class="nav-link <?php echo $pagina === "nosotros" ? "active" : "" ?>">Nosotros</a></li>
            <li class="nav-item"><a href="servicios.php" class="nav-link <?php echo $pagina === "servicios" ? "active" : "" ?>">Servicios</a></li>
            <li class="nav-item"><a href="productos.php" class="nav-link <?php echo $pagina === "productos" || $pagina === "producto" ? "active" : "" ?>">Productos</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link <?php echo $pagina === "contacto" ? "active" : "" ?>">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>