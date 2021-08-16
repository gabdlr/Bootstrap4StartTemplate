<?php
//Validación del tipo de dato en el parametro GET
if (isset($_GET["id"])) {
    if (filter_var($_GET["id"], FILTER_VALIDATE_INT)){
        $producto_id = $_GET["id"];
    } else {
        header("Location: 404.html");
        exit;
    }
}
//Verificamos que exista el registro en la base de datos
//Nota: anidar estas dos funciones incrementa MUCHO el tiempo de carga de la pagina
include "includes/funciones.php";
$producto = obtenerProducto($producto_id);
if ($producto->num_rows == 0) {
    header("Location: 404.html");
    exit;
}
include "templates/header.php";
$producto = $producto->fetch_assoc();
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/<?php echo $producto["imagen_completa"] ?>" alt="nosotros" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php echo $producto["nombre"] ?></h2>
        </div>
    </div>
</div>
<div class="container pt-4 ">
    <div class="row no-gutters">
        <main class="col-lg-8 contenido-principal pr-4">
            <h2 class="d-block d-md-none text-uppercase text-center">
                <?php echo $producto["nombre"] ?>
            </h2>
            <p><?php echo $producto["descripcion"] ?></p>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar pt-5 descripcion-producto">
                <h2 class="text-center text-uppercase mt-4">
                    Descripción
                </h2>
                <p class="text-center p-2"><?php echo $producto["descripcion_corta"] ?></p>
                <h3 class="text-uppercase text-center mt-5 mb-0">Precio</h3>
                <p class="display-4 text-center p-2"><?php echo $producto["precio"] ?></p>
            </div>
        </aside>
    </div>
</div>

<?php include "templates/footer.php" ?>