<?php
session_start();

require_once __DIR__ . '/app/controllers/AuthController.php';
require_once __DIR__ . '/app/controllers/ProductoController.php';

$action = $_GET['action'] ?? 'index';

// Proteger rutas — si no hay sesión, redirige al login
if (!isset($_SESSION['usuario']) && $action !== 'login') {
    header('Location: index.php?action=login');
    exit;
}

$auth = new AuthController();
$controller = new ProductoController();

switch ($action) {
    case 'login':
        $auth->login();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'crear':
        $controller->crear();
        break;
    case 'editar':
        $controller->editar();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    default:
        $controller->index();
        break;
}
