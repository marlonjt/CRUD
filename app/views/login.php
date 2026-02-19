<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Iniciar Sesión</h3>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error ?></div>
            <?php endif ?>
            <form method="POST" action="index.php?action=login">
                <input class="form-control mt-3" type="text" placeholder="Usuario" name="nombre_usuario" required>
                <input class="form-control mt-3" type="password" placeholder="Contraseña" name="password" required>
                <button class="btn btn-primary btn-block mt-3" type="submit">Entrar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
