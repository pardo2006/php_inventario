<!DOCTYPE html>
<html>
<head>
    <title>Inventario Principal</title>
    <style>
        button { margin: 10px; padding: 10px; }
        iframe { width: 100%; height: 500px; border: none; }
    </style>
</head>
<body>
    <h2>Inventario de Productos Tecnológicos</h2>
    <button onclick="cargar('agregar.php')">Agregar Producto</button>
    <button onclick="cargar('listar.php')">Listar Productos</button>
    <iframe id="contenido"></iframe>

    <script>
        function cargar(pagina) {
            document.getElementById('contenido').src = pagina;
        }
    </script>
</body>
</html>
