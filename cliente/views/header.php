<!-- header.php -->

<head>
    <title>TechHome</title>
    <link rel="stylesheet" href="../cliente/css/estilos.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery y Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<header>
    <div class="header-container">
        <!-- Enlace que redirige al index.php -->
        <a href="../backend/index.php" class="logo-link">
            <!-- Imagen del logo -->
            <img src="../cliente/images/logo.png" class="logo-icon" alt="logo">
            <!-- Título -->
            <h1 class="logo-text">TechHome</h1>
        </a>
    </div>

    <!-- Barra de navegación -->
    <form method="GET" class="navbar-search" id="search-form">
        <input type="text" name="query" placeholder="¿Qué buscas?" class="search-input">
        <img src="../cliente//images/lupa.png" class="img-fluid search-icon" alt="lupa" onclick="document.getElementById('search-form').submit();" />
    </form>
    <div class="options-container">
        <img src="../cliente/images/carrito.png" class="carrito-icon" alt="carrito" onclick="location.href='../cliente/carrito.php'">
        <img src="../cliente/images/perfil.png" class="perfil-icon" alt="perfil" onclick="location.href='logout.php'">
    </div>
    <nav>
        <a href="../cliente/productos.php">Productos</a>
        <a href="../cliente/quienes_somos.php">Quiénes Somos</a>
        <a href="../cliente/contacto.php">Contáctenos</a>
    </nav>
</header>
