<?php
session_start();

// Asegúrate de que las rutas sean correctas y relativas desde 'backend/index.php'
include('../cliente/views/header.php');
include('../cliente/views/banner.php');
?>



<!-- Scripts necesarios para el funcionamiento de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php
include('../cliente/views/footer.php');
?>
