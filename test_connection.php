<?php
include 'db.php';

if ($conn) {
    echo "Conexión exitosa a la base de datos";
} else {
    echo "Error en la conexión a la base de datos";
}
?>
