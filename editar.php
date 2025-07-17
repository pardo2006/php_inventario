<?php
include 'conexion.php';
$id = $_GET['id'];
$row = $db->query("SELECT * FROM productos WHERE id = $id")->fetchArray();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h3>Editar Producto</h3>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Nombre: <input type="text" name="nombre" value="<?= $row['nombre'] ?>"><br>
        Marca: <input type="text" name="marca" value="<?= $row['marca'] ?>"><br>
        Tipo: <input type="text" name="tipo" value="<?= $row['tipo'] ?>"><br>
        Cantidad: <input type="number" name="cantidad" value="<?= $row['cantidad'] ?>"><br>
        Precio Compra: <input type="number" step="0.01" name="precio_compra" value="<?= $row['precio_compra'] ?>"><br>
        Precio Venta: <input type="number" step="0.01" name="precio_venta" value="<?= $row['precio_venta'] ?>"><br>
        Proveedor: <input type="text" name="proveedor" value="<?= $row['proveedor'] ?>"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
