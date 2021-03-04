<?php
$link = 'mysql:dbname=prueba;host=127.0.0.1';
$usuario = 'root';
$pass = '';

try {
    $pdo = new PDO($link, $usuario, $pass);

} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
    exit;
}

?>