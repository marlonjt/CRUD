<?php
class Usuario
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function buscarPorNombre($nombre_usuario)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM usuario WHERE nombre_usuario = ?');
        $stmt->execute([$nombre_usuario]);
        return $stmt->fetch();
    }
}
