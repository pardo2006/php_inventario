<?php
$db = new SQLite3('mysqlitedb.db');

$db->exec("CREATE TABLE IF NOT EXISTS productos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT,
    marca TEXT,
    tipo TEXT,
    cantidad INTEGER,
    precio_compra REAL,
    precio_venta REAL,
    proveedor TEXT
)");
?>
