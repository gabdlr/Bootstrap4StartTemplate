<?php

//Muestra multiples productos, cantidad de productos como parametro
function obtenerProductos($cantidad = 0)
{
    include "conexion.php";
    try {
        if ($cantidad > 0) {
            $sql = " SELECT * FROM productos LIMIT $cantidad ";
        } else {
            $sql = " SELECT * FROM productos ";
        }
        $resultado = $bd->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        return;
    }
    return $resultado;
}

//Muestra un solo producto
function obtenerProducto($producto_id)
{
    include "conexion.php";
    try {
        $sql = " SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $producto_id ";
        $resultado = $bd->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        return;
    }
    return $resultado;
}
