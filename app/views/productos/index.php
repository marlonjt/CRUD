<?php $titulo = 'Productos'; ?>
<?php include __DIR__ . '/../layout/header.php' ?>

<div class="table-container">
    <div class="table-container__header">
        <h4>
            <i class="fas fa-box"></i>
            Lista de Productos
        </h4>
        <a class="btn-nuevo" href="index.php?action=crear">
            <i class="fas fa-plus"></i>
            Nuevo Producto
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['nombre_producto'] ?></td>
                    <td><?php echo $producto['stock_producto'] ?></td>
                    <td class="precio">$<?php echo number_format($producto['vunitario_producto'], 2) ?></td>
                    <td>
                        <a class="btn-accion btn-accion--editar"
                            href="index.php?action=editar&id_producto=<?php echo $producto['id_producto'] ?>">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                    <td>
                        <a class="btn-accion btn-accion--eliminar"
                            href="index.php?action=eliminar&id_producto=<?php echo $producto['id_producto'] ?>"
                            onclick="return confirm('¿Eliminar este producto?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../../views/layout/footer.php' ?>
