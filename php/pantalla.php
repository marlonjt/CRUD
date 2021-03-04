<?php
include_once 'conexion.php';
//productos de BDD
$sql_leer = 'SELECT * FROM producto';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//agregar

if($_POST){
  $nombre_usuario = $_POST['nombre_usuario'];
	$password = $_POST['password'];
	
	$sql_user='INSERT INTO usuario (nombre_usuario,password) VALUES (?,?)';
	$sentencia_user= $pdo->prepare($sql_user);
	$sentencia_user->execute(array($nombre_usuario,$password));
  //echo('iniciaste');
  
  $sentencia_user=null;
  $pdo=null;
}

if($_GET){
  $id = $_GET['id_producto'];
  
  $sql_unico = 'SELECT * FROM producto WHERE id_producto=?';

  $gsent_unico = $pdo->prepare($sql_unico);
  $gsent_unico->execute(array($id));

  $resultado_unico = $gsent_unico->fetch();
  var_dump($resultado_unico);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inventario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<div class="div">
<h1 align = "center">Inventario</h1>
</div>

<div class="container mt-5">
<?php if(!$_GET): ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($resultado as $dato): ?>
    <tr>
      <th scope="row"><?php echo $dato['id_producto']?></th>
      <td><?php echo $dato['nombre_producto']?></td>
      <td><?php echo $dato['vunitario_producto']?></td>
      <td><?php echo $dato['stock_producto']?></td>
      <td><a href="pantalla.php?id_producto=<?php echo $dato['id_producto']?>"><i class="far fa-edit"></i></a></td>
      <td><a href="eliminar.php?id_producto=<?php echo $dato['id_producto']?>"><i class="far fa-trash-alt"></i></a></td>
    </tr>
    <?php endforeach ?>
    
  </tbody>
</table>

<div align="center">
<a class="btn btn-primary" href="agregar.php">Nuevo Producto</a>
</div>

<?php endif ?>
</div>

<div align="center">
<div class="container mt-5">
<?php if($_GET): ?>
	<div class="row">
        <div class="col-md-8">
            <h3>Editar Producto</h3>
            <form method="GET" action="editar.php">
                <input type= "text"  name="id_producto" value="<?php echo $resultado_unico['id_producto']?>">
                <input value="<?php echo $resultado_unico['nombre_producto']?>" class="form-control mt-3" type="text" placeholder="Nombre" name="nombre_producto">
                <input value="<?php echo $resultado_unico['vunitario_producto']?>" class="form-control mt-3" type="text" placeholder="Precio" name="vunitario_producto">
                <input value="<?php echo $resultado_unico['stock_producto']?>" class="form-control mt-3" type="text" placeholder="Cantidad" name="stock_producto">
                <button class="btn btn-primary mt-3">Aceptar</button>
                <a class="btn btn-primary mt-3" href="pantalla.php" role="button">Ver Productos</a>
            </form>	
  <?php endif ?>
        </div>
	</div>  	
</div>
</div>

</body>
</html>


