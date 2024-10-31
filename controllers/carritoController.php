<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto_id = $_POST['producto_id'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id] += 1;
    } else {
        $_SESSION['carrito'][$producto_id] = 1;
    }

    header("Location: ../carrito.php");
}
?>
