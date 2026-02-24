<?php $titulo = 'Productos'; ?>
<?php include __DIR__ . '/../../views/layout/header.php' ?>

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
                    <td><?php echo htmlspecialchars($producto['nombre_producto'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?php echo htmlspecialchars($producto['stock_producto'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td class="precio">$<?php echo number_format($producto['vunitario_producto'], 2) ?></td>
                    <td>
                        <a class="btn-accion btn-accion--editar"
                            href="index.php?action=editar&id_producto=<?php echo htmlspecialchars($producto['id_producto'], ENT_QUOTES, 'UTF-8') ?>">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                    <td>
                        <form action="index.php?action=eliminar" method="POST">
                            <input type="hidden" name="id_producto" value="<?php echo htmlspecialchars($producto['id_producto'], ENT_QUOTES, 'UTF-8') ?>">
                            <button type="submit" class="btn-accion btn-accion--eliminar" onclick="return confirm('¿Eliminar este producto?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../../views/layout/footer.php' ?>
