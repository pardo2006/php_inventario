<?php
include 'conexion.php';
$id = $_GET['id'];
$db->exec("DELETE FROM productos WHERE id = $id");
header("Location: listar.php");
?>
