<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inventario - Login</title>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>

    <div class="login-wrapper">
        <div class="login-card">

            <div class="login-card__header">
                <i class="fas fa-boxes"></i>
                <h2>Inventario</h2>
                <p>Ingresa tus credenciales para continuar</p>
            </div>

            <div class="login-card__body">

                <?php if (isset($error)): ?>
                    <div class="alert alert-danger mb-3">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <?php echo $error ?>
                    </div>
                <?php endif ?>

                <form method="POST" action="index.php?action=login">

                    <div class="campo">
                        <label for="usuario">Usuario</label>
                        <input
                            class="form-control"
                            type="text"
                            id="usuario"
                            placeholder="Tu nombre de usuario"
                            name="nombre_usuario"
                            required>
                    </div>

                    <div class="campo">
                        <label for="password">Contraseña</label>
                        <input
                            class="form-control"
                            type="password"
                            id="password"
                            placeholder="Tu contraseña"
                            name="password"
                            required>
                    </div>

                    <button class="btn-login" type="submit">
                        <i class="fas fa-sign-in-alt me-2"></i>
                        Entrar
                    </button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
