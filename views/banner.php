<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>TechHome</title>
</head>
<body>
    
    
    <img src="images/promo.jpg" alt="promo" class="banner-promo">
    <div style="display: flex; gap: 25px; padding: 20px;">
    <!-- Primer carrusel: Productos más vendidos -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="flex: 1; padding: 20px; box-sizing: border-box;">
        <div class="carousel-inner">
            <h2>Productos más vendidos</h2>
            <div class="carousel-item active">
                <img src="images/electro1.png" class="d-block w-100" alt="Electrodoméstico 1">
            </div>
            <div class="carousel-item">
                <img src="images/electro2.png" class="d-block w-100" alt="Electrodoméstico 2">
            </div>
            <div class="carousel-item">
                <img src="images/electro3.png" class="d-block w-100" alt="Electrodoméstico 3">
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
    <div id="carouselPromotions" class="carousel slide" data-ride="carousel" style="flex: 1; padding: 20px; box-sizing: border-box;">
        <div class="carousel-inner">
            <h2>Promociones</h2>
            <div class="carousel-item active">
                <img src="images/promo2.jpg" class="d-block w-100" alt="Promoción 1">
            </div>
            <div class="carousel-item">
                <img src="images/promo3.jpg" class="d-block w-100" alt="Promoción 2">
            </div>
            <div class="carousel-item">
                <img src="images/promo4.jpg" class="d-block w-100" alt="Promoción 3">
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
    <div id="carouselNewProducts" class="carousel slide" data-ride="carousel" style="flex: 1; padding: 20px; box-sizing: border-box;">
        <div class="carousel-inner">
            <h2>Nuevos Productos</h2>
            <div class="carousel-item active">
                <img src="images/produ1.png" class="d-block w-100" alt="Nuevo Producto 1">
            </div>
            <div class="carousel-item">
                <img src="images/produ2.png" class="d-block w-100" alt="Nuevo Producto 2">
            </div>
            <div class="carousel-item">
                <img src="images/produ3.png" class="d-block w-100" alt="Nuevo Producto 3">
            </div>
        </div>
        <!-- Controles del tercer carrusel -->
        <a class="carousel-control-prev" href="#carouselNewProducts" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselNewProducts" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
