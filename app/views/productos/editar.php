<?php $titulo = 'Editar Producto'; ?>
<?php include __DIR__ . '/../layout/header.php' ?>

<div class="form-panel">
    <div class="form-panel__header">
        <h4>
            <i class="fas fa-pen"></i>
            Editar Producto
        </h4>
    </div>
    <div class="form-panel__body">

        <?php if (isset($error)): ?>
            <div class="alert alert-danger mb-3">
                <i class="fas fa-exclamation-circle me-2"></i>
                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif ?>

        <form method="POST" action="index.php?action=editar&id_producto=<?php echo htmlspecialchars($producto['id_producto'], ENT_QUOTES, 'UTF-8') ?>">

            <div class="campo">
                <label for="nombre">Nombre del producto</label>
                <input class="form-control" type="text" id="nombre"
                    value="<?php echo htmlspecialchars($producto['nombre_producto'], ENT_QUOTES, 'UTF-8') ?>"
                    name="nombre_producto" required>
            </div>

            <div class="campo">
                <label for="precio">Precio unitario</label>
                <input class="form-control" type="number" id="precio"
                    value="<?php echo htmlspecialchars($producto['vunitario_producto'], ENT_QUOTES, 'UTF-8') ?>"
                    step="0.01" name="vunitario_producto" required>
            </div>

            <div class="campo">
                <label for="stock">Stock disponible</label>
                <input class="form-control" type="number" id="stock"
                    value="<?php echo htmlspecialchars($producto['stock_producto'], ENT_QUOTES, 'UTF-8') ?>"
                    name="stock_producto" required>
            </div>

            <div class="form-acciones">
                <button class="btn-guardar" type="submit">
                    <i class="fas fa-save"></i>
                    Actualizar
                </button>
                <a class="btn-cancelar" href="index.php">
                    <i class="fas fa-times"></i>
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php include __DIR__ . '/../../views/layout/footer.php' ?>
