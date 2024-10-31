<?php
// db.php
$host = 'localhost';
$dbname = 'tienda_electrodomesticos';
$user = 'admin';
$password = 'Pr0y3ct0';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}
?>
