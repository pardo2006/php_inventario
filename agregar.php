<!DOCTYPE html>
<html>
<head>
    <title>Agregar Producto</title>
</head>
<body>
    <h3>Agregar nuevo producto</h3>
    <form action="guardar.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Marca: <input type="text" name="marca"><br>
        Tipo: <input type="text" name="tipo"><br>
        Cantidad: <input type="number" name="cantidad"><br>
        Precio Compra: <input type="number" step="0.01" name="precio_compra"><br>
        Precio Venta: <input type="number" step="0.01" name="precio_venta"><br>
        Proveedor: <input type="text" name="proveedor"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
