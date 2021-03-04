<?php
echo 'editar.php?id=1&nombre_producto=salchi&vunitario_producto=1&stock_producto=2';
//echo '<br>';

$id = $_GET['id_producto'];
$nombre_producto = $_GET['nombre_producto'];
$vunitario_producto = $_GET['vunitario_producto'];
$stock_producto = $_GET['stock_producto'];

echo '<br>';
echo $id;
echo '<br>';
echo $nombre_producto ;
echo '<br>';
echo $vunitario_producto ;
echo '<br>';
echo $stock_producto ;

include_once 'conexion.php';


$sql_editar ="UPDATE producto  SET nombre_producto=?,vunitario_producto=?,stock_producto=? WHERE id_producto=?";
$sentencia_editar= $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre_producto,$vunitario_producto,$stock_producto,$id));

header('location:pantalla.php');