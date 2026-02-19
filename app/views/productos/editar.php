<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Editar Producto</h3>
            <form method="POST" action="index.php?action=editar&id_producto=<?php echo $producto['id_producto'] ?>">
                <input class="form-control mt-3" type="text" value="<?php echo $producto['nombre_producto'] ?>" name="nombre_producto" required>
                <input class="form-control mt-3" type="number" value="<?php echo $producto['vunitario_producto'] ?>" name="vunitario_producto" required>
                <input class="form-control mt-3" type="number" value="<?php echo $producto['stock_producto'] ?>" name="stock_producto" required>
                <button class="btn btn-primary mt-3" type="submit">Actualizar</button>
                <a class="btn btn-secondary mt-3" href="index.php">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
