<?php
session_start();
include('views/header.php');
?>

<link rel="stylesheet" href="estilos.css">

<h2>Bienvenido a TechServer Solutions</h2>

<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/Electro1.jpg" class="d-block w-100" alt="Electrodoméstico 1">
        </div>
        <div class="carousel-item">
            <img src="images/electro2.jpg" class="d-block w-100" alt="Electrodoméstico 2">
        </div>
        <div class="carousel-item">
            <img src="images/electro3.jpg" class="d-block w-100" alt="Electrodoméstico 3">
        </div>
    </div>

    <!-- Controles del carrusel -->
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Scripts necesarios para el funcionamiento de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php include('views/footer.php'); ?>
