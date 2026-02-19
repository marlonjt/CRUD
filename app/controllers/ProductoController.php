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
            $this->modelo->crear(
                $_POST['nombre_producto'],
                $_POST['vunitario_producto'],
                $_POST['stock_producto']
            );
            header('Location: index.php');
            exit;
        }
        require_once __DIR__ . '/../views/productos/crear.php';
    }

    public function editar()
    {
        $id = $_GET['id_producto'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->modelo->actualizar(
                $id,
                $_POST['nombre_producto'],
                $_POST['vunitario_producto'],
                $_POST['stock_producto']
            );
            header('Location: index.php');
            exit;
        }
        $producto = $this->modelo->obtenerPorId($id);
        require_once __DIR__ . '/../views/productos/editar.php';
    }

    public function eliminar()
    {
        $id = $_GET['id_producto'];
        $this->modelo->eliminar($id);
        header('Location: index.php');
        exit;
    }
}
