<?php
class Producto
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenerTodos()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM producto');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM producto WHERE id_producto = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function crear($nombre, $precio, $stock)
    {
        $stmt = $this->pdo->prepare('INSERT INTO producto (nombre_producto, vunitario_producto, stock_producto) VALUES (?, ?, ?)');
        return $stmt->execute([$nombre, $precio, $stock]);
    }

    public function actualizar($id, $nombre, $precio, $stock)
    {
        $stmt = $this->pdo->prepare('UPDATE producto SET nombre_producto=?, vunitario_producto=?, stock_producto=? WHERE id_producto=?');
        return $stmt->execute([$nombre, $precio, $stock, $id]);
    }

    public function eliminar($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM producto WHERE id_producto = ?');
        return $stmt->execute([$id]);
    }
}
