<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/Usuario.php';

class AuthController
{
    private $modelo;

    public function __construct()
    {
        global $pdo;
        $this->modelo = new Usuario($pdo);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre_usuario = $_POST['nombre_usuario'];
            $password = $_POST['password'];

            $usuario = $this->modelo->buscarPorNombre($nombre_usuario);

            if ($usuario && password_verify($password, $usuario['password'])) {
                $_SESSION['usuario'] = $usuario['nombre_usuario'];
                header('Location: index.php');
                exit;
            }

            $error = 'Usuario o contraseña incorrectos';
        }
        require_once __DIR__ . '/../views/login.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php?action=login');
        exit;
    }
}
