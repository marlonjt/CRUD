<?php

include_once 'conexion.php';

$id = $_GET['id_producto'];


$sql_eliminar ="DELETE FROM producto WHERE id_producto=?";
$sentencia_eliminar= $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));

header ('location:pantalla.php'); 