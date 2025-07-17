<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$proveedor = $_POST['proveedor'];

$db->exec("INSERT INTO productos (nombre, marca, tipo, cantidad, precio_compra, precio_venta, proveedor)
VALUES ('$nombre', '$marca', '$tipo', $cantidad, $precio_compra, $precio_venta, '$proveedor')");

header("Location: listar.php");
?>
