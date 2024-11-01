<!DOCTYPE html>
<html>
<head>
    <title>TechServer Solutions</title>
    <link rel="stylesheet" href="css/estilos.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- jQuery y Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Share+Tech+Mono&display=swap" rel="stylesheet">

<!--Fuente de body -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <img src="./images/logo.png" class="logo-icon" alt="logo">
    <h1>TechHome</h1>
    <form method="GET" class="navbar-search" id="search-form">
        <input type="text" name="query" placeholder="¿Qué buscas?" class="search-input">
        <img
            src="./images/lupa.png"
            class="img-fluid search-icon"
            alt="lupa"
            style="cursor: pointer;"
            onclick="document.getElementById('search-form').submit();"
        />
    </form>
    <div class="options-container">
    <img src="./images/carrito.png" class="carrito-icon" alt="carrito" onclick="location.href='carrito.php'">
    <img src="./images/perfil.png" class="perfil-icon" alt="perfil" onclick="location.href='logout.php'">
    </div>
</header>
<!-- Barra de navegación -->
<nav>
    <a href="index.php">Inicio</a>
    <a href="quienes_somos.php">Quiénes Somos</a>
    <a href="productos.php">Productos</a>
    <a href="contacto.php">Contáctenos</a>
</nav>
</header>
<main>