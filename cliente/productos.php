<?php
include('../cliente/views/header.php');
include('db.php');

$query = "SELECT * FROM productos";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}
?>

<div class="productos">
    <h2>Nuestros Productos</h2>
    <?php while ($producto = mysqli_fetch_assoc($result)) { ?>
        <div class="producto">
            <img src="uploads/<?php echo htmlspecialchars($producto['imagen_url']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
            <?php echo htmlspecialchars($producto['nombre']); ?>


            <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
            <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
            <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>

            <form method="POST" action="../backend/controllers/carritoController.php" class="AgregaCarrito">
    <input type="hidden" name="producto_id" value="<?php echo htmlspecialchars($producto['id']); ?>">
    <button type="submit" class="btn-agregar">Agregar al carrito</button>
</form>

        </div>
    <?php } ?>
</div>

<?php include('../cliente/views/footer.php'); ?>