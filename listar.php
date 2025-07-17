<?php
include 'conexion.php';
$result = $db->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h3>Productos Registrados</h3>
    <table border="1">
        <tr>
            <th>ID</th><th>Nombre</th><th>Marca</th><th>Tipo</th>
            <th>Cantidad</th><th>Compra</th><th>Venta</th><th>Proveedor</th><th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetchArray()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['marca'] ?></td>
            <td><?= $row['tipo'] ?></td>
            <td><?= $row['cantidad'] ?></td>
            <td><?= $row['precio_compra'] ?></td>
            <td><?= $row['precio_venta'] ?></td>
            <td><?= $row['proveedor'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
