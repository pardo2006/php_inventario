<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$proveedor = $_POST['proveedor'];

$db->exec("UPDATE productos SET 
    nombre='$nombre',
    marca='$marca',
    tipo='$tipo',
    cantidad=$cantidad,
    precio_compra=$precio_compra,
    precio_venta=$precio_venta,
    proveedor='$proveedor'
WHERE id = $id");

header("Location: listar.php");
?>
