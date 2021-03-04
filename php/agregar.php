<?php
    require 'conexion.php';
    if($_POST){
    $nombre_producto=$_POST['nombre_producto'];
    $vunitario_producto=$_POST['vunitario_producto'];
    $stock_producto=$_POST['stock_producto'];
  

    $sql_pro="INSERT INTO producto (nombre_producto,vunitario_producto,stock_producto) VALUES('$nombre_producto','$vunitario_producto','$stock_producto')";
    $sentencia_pro= $pdo->prepare($sql_pro);
    $sentencia_pro->execute(array($nombre_producto,$vunitario_producto,$stock_producto));
    }   
    //header ('location:ingreso.php')
    //echo 'acep';
    if($_GET){
        $id_producto = $_GET['id_producto'];
        $nombre_producto = $_GET['nombre_producto'];
        $vunitario_producto = $_GET['vunitario_producto'];
        $stock_producto = $_GET['stock_producto'];

        //echo '<br>';
        //echo $id_producto ;
        //echo '<br>';
        //echo $nombre_producto ;
        //echo '<br>';
        //echo $vunitario_producto ;
        //echo '<br>';
        //echo $stock_producto ;

        include_once 'conexion.php';

        $sql_editar = 'UPDATE producto  SET nombre_producto=?,vunitario_producto=?,stock_producto=? WHERE id_producto=?';
        $sentencia_editar= $pdo->prepare($sql_editar);
        $sentencia_editar->execute(array($nombre_producto,$vunitario_producto,$stock_producto,$id_producto));
    }   
?>

<html>
<head>
	<title>Nuevo Producto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div align="center">
<div class="container mt-5">
	<div class="row">
        <div class="col-md-8">
            <h3>Producto</h3>
            <form method="POST">
                <input class="form-control mt-3" type="text" placeholder="Nombre" name="nombre_producto">
                <input class="form-control mt-3" type="text" placeholder="Precio" name="vunitario_producto">
                <input class="form-control mt-3" type="text" placeholder="Cantidad" name="stock_producto">
            
                <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                <a class="btn btn-primary mt-3" href="pantalla.php" role="button">Ver Productos</a>
            </form>	
        </div>
	</div>  	
</div>
</div>



</body>
</html>