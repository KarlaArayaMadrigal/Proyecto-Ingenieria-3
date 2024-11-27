<?php
include('../cliente/views/header.php');
include('db.php');

// Consulta SQL para obtener los productos
$query = "SELECT * FROM productos";
$result = mysqli_query($conn, $query);

// Verificación de errores en la consulta
if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}
?>

<div class="productos">
    <h2>Nuestros Productos</h2>
    <?php while ($producto = mysqli_fetch_assoc($result)) { ?>
        <div class="producto">
            <!-- Mostrar imagen del producto -->
            <img src="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/Proyecto%20Ingenieria%203/Proyecto-Ingenieria-3/cliente/images/Productos/<?php echo htmlspecialchars($producto['imagen_url']); ?>" 
     alt="<?php echo htmlspecialchars($producto['nombre']); ?>" width="200" height="200">


            <!-- Mostrar detalles del producto -->
            <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
            <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
            <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>

            <!-- Formulario para agregar al carrito -->
            <form method="POST" action="../backend/controllers/carritoController.php" class="botonproducto">
                <input type="hidden" name="producto_id" value="<?php echo htmlspecialchars($producto['id']); ?>">
                <button type="submit" class="btn-agregar">Agregar al carrito</button>
            </form>
        </div>
    <?php } ?>
</div>

<?php include('../cliente/views/footer.php'); ?>