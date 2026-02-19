<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Nuevo Producto</h3>
            <form method="POST" action="index.php?action=crear">
                <input class="form-control mt-3" type="text" placeholder="Nombre" name="nombre_producto" required>
                <input class="form-control mt-3" type="number" placeholder="Precio" name="vunitario_producto" required>
                <input class="form-control mt-3" type="number" placeholder="Cantidad" name="stock_producto" required>
                <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                <a class="btn btn-secondary mt-3" href="index.php">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
