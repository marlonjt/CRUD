<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo ?? 'Inventario' ?></title>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>

    <div class="layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar__logo">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </div>

            <ul class="sidebar__nav">
                <li class="nav-label">Menú</li>
                <li>
                    <a href="index.php" class="<?php echo (!isset($_GET['action']) || $_GET['action'] == 'index') ? 'active' : '' ?>">
                        <i class="fas fa-box"></i>
                        Productos
                    </a>
                </li>
                <li>
                    <a href="index.php?action=usuarios" class="<?php echo (isset($_GET['action']) && $_GET['action'] == 'usuarios') ? 'active' : '' ?>">
                        <i class="fas fa-users"></i>
                        Usuarios
                    </a>
                </li>
            </ul>

            <div class="sidebar__footer">
                <a href="index.php?action=logout">
                    <i class="fas fa-sign-out-alt"></i>
                    Cerrar Sesión
                </a>
            </div>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="contenido-principal">

            <!-- NAVBAR -->
            <nav class="navbar-dashboard">
                <div class="navbar-dashboard__titulo">
                    <i class="fas fa-circle" style="font-size:8px; color:#27ae60"></i>
                    <?php echo $titulo ?? 'Panel' ?>
                </div>
                <div class="navbar-dashboard__usuario">
                    <div class="avatar">
                        <?php echo strtoupper(substr($_SESSION['usuario'] ?? 'U', 0, 1)) ?>
                    </div>
                    <div>
                        <div class="nombre"><?php echo $_SESSION['usuario'] ?? '' ?></div>
                        <div class="rol">Administrador</div>
                    </div>
                </div>
            </nav>

            <!-- VISTA -->
            <div class="contenido">
