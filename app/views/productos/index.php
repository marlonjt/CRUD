<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand">Inventario</span>
        <span class="text-white">👤 <?php echo $_SESSION['usuario'] ?></span>
        <a class="btn btn-outline-light btn-sm" href="index.php?action=logout">Cerrar Sesión</a>
    </nav>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['id_producto'] ?></td>
                        <td><?php echo $producto['nombre_producto'] ?></td>
                        <td><?php echo $producto['vunitario_producto'] ?></td>
                        <td><?php echo $producto['stock_producto'] ?></td>
                        <td>
                            <a href="index.php?action=editar&id_producto=<?php echo $producto['id_producto'] ?>">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="index.php?action=eliminar&id_producto=<?php echo $producto['id_producto'] ?>">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="text-center">
            <a class="btn btn-primary" href="index.php?action=crear">Nuevo Producto</a>
        </div>
    </div>
</body>

</html>