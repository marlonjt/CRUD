<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{
    private $modelo;

    public function __construct()
    {
        global $pdo;
        $this->modelo = new Producto($pdo);
    }

    public function index()
    {
        $productos = $this->modelo->obtenerTodos();
        require_once __DIR__ . '/../views/productos/index.php';
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre_producto']);
            $precio = trim($_POST['vunitario_producto']);
            $stock = trim($_POST['stock_producto']);
            if ($nombre == '' || $precio == '' || $stock == '') {
                $error = 'Los campos no pueden estar vacíos';
            } elseif ($precio <= 0 || $stock <= 0) {
                $error = 'Precio y Stock deben ser mayor 0';
            } else {
                $this->modelo->crear(
                    $nombre,
                    $precio,
                    $stock
                );
                header('Location: index.php');
                exit;
            }
        }
        require_once __DIR__ . '/../views/productos/crear.php';
    }

    public function editar()
    {
        $id = $_GET['id_producto'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre_producto']);
            $precio = trim($_POST['vunitario_producto']);
            $stock = trim($_POST['stock_producto']);
            if ($nombre == '' || $precio == '' || $stock == '') {
                $error = 'Los campos no pueden estar vacíos';
            } elseif ($precio <= 0 || $stock <= 0) {
                $error = 'Precio y Stock deben ser mayor 0';
            } else {
                $this->modelo->actualizar(
                    $id,
                    $nombre,
                    $precio,
                    $stock
                );
                header('Location: index.php');
                exit;
            }
        }
        $producto = $this->modelo->obtenerPorId($id);
        require_once __DIR__ . '/../views/productos/editar.php';
    }

    public function eliminar()
    {
        $id = $_POST['id_producto'];
        $this->modelo->eliminar($id);
        header('Location: index.php');
        exit;
    }
}
