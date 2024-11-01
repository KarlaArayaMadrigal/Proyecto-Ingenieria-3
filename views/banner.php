<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="estilos.css">

<img src="images/promo.jpg" alt="promo" class= "banner-promo">
<div style="display: flex; gap: 25px;">
    <!-- Primer carrusel: Productos más vendidos -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="width: 50%;">
        <div class="carousel-inner">
            <h2>Productos más vendidos</h2>
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

        <!-- Controles del primer carrusel -->
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Segundo carrusel: Promociones -->
    <div id="carouselPromotions" class="carousel slide" data-ride="carousel" style="width: 50%;">
        <div class="carousel-inner">
            <h2>Promociones</h2>
            <div class="carousel-item active">
                <img src="images/promo2.jpg" class="d-block w-100" alt="Promoción 1">
            </div>
            <div class="carousel-item">
                <img src="images/promo3.jpg" class="d-block w-100" alt="Promoción 2">
            </div>
            <div class="carousel-item">
                <img src="images/electro3.jpg" class="d-block w-100" alt="Promoción 3">
            </div>
        </div>

        <!-- Controles del segundo carrusel -->
        <a class="carousel-control-prev" href="#carouselPromotions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselPromotions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
        <!-- Tercer carrusel: Nuevos productos -->
        <div id="carouselNewProducts" class="carousel slide" data-ride="carousel" style="width: 50%;">
        <div class="carousel-inner">
            <h2>Nuevos Productos</h2>
            <div class="carousel-item active">
                <img src="images/electro1.jpg" class="d-block w-100" alt="Promoción 1">
            </div>
            <div class="carousel-item">
                <img src="images/electro2.jpg" class="d-block w-100" alt="Promoción 2">
            </div>
            <div class="carousel-item">
                <img src="images/electro3.jpg" class="d-block w-100" alt="Promoción 3">
            </div>
        </div>

        <!-- Controles del tercer carrusel -->
        <a class="carousel-control-prev" href="#carouselPromotions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselPromotions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>
    
</body>
</html>