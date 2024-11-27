<?php
session_start();
include('../cliente/views/header.php');
include('db.php'); // Incluye la conexión a la base de datos

// Eliminar un producto del carrito si se recibe el parámetro 'eliminar'
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    unset($_SESSION['carrito'][$idEliminar]);
    header("Location: ../cliente/carrito.php"); // Redirige para evitar el reenvío del formulario
    exit();
}

?>

<div class="carrito-container">
    <?php
    if (!isset($_SESSION['carrito']) || count($_SESSION['carrito']) === 0) {
        echo "<p class='empty-cart-message'>Tu carrito está vacío.</p>";
    } else {
        $total = 0;
        echo "<h2>Tu Carrito</h2>";

        foreach ($_SESSION['carrito'] as $id => $cantidad) {
            // Obtener información del producto
            $query = "SELECT * FROM productos WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $producto = mysqli_fetch_assoc($result);

                $subtotal = $producto['precio'] * $cantidad;
                $total += $subtotal;

                echo "<div class='producto-carrito'>";
                echo "<div>";
                echo "<h3>{$producto['nombre']}</h3>";
                echo "<p>Cantidad: $cantidad</p>";
                echo "<p>Subtotal: $$subtotal</p>";
                echo "</div>";
                echo "<a href='carrito.php?eliminar=$id' onclick='return confirm(\"¿Estás seguro de que quieres eliminar este producto?\");'>Eliminar</a>";
                echo "</div>";
            } else {
                echo "<p>Producto con ID $id no encontrado.</p>";
            }
        }

        echo "<div class='carrito-total'>";
        echo "<h3>Total: $$total</h3>";
        echo "</div>";
    }
    ?>
</div>

<?php include('../cliente/views/footer.php'); ?>

