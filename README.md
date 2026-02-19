# 📦 Sistema de Inventario y Ventas

Sistema web para gestión de inventario y ventas desarrollado como proyecto de instituto. Posteriormente mejorado aplicando buenas prácticas de seguridad y arquitectura MVC.

---

## 🧰 Stack Tecnológico

- **PHP** — Lógica del servidor
- **MySQL** — Base de datos
- **Apache** — Servidor web
- **PDO** — Conexión segura a la base de datos
- **Bootstrap 4** — Estilos e interfaz
- **SCSS** — Preprocessor de CSS
- **Composer** — Gestor de dependencias PHP
- **vlucas/phpdotenv** — Manejo de variables de entorno

---

## ⚙️ Requisitos

- PHP 7.4 o superior
- MySQL 8.0 o superior
- Apache 2.4 o superior
- Composer 2.x

---

## 🚀 Instalación

### 1. Clona el repositorio

```bash
git clone https://github.com/marlonjt/CRUD.git
cd CRUD
```

### 2. Instala las dependencias

```bash
composer install
```

### 3. Configura las variables de entorno

```bash
cp .env.example .env
nano .env
```

Edita el archivo `.env` con tus credenciales:

```
DB_HOST=127.0.0.1
DB_NAME=nombre_de_tu_base
DB_USER=tu_usuario
DB_PASS=tu_password
```

### 4. Crea la base de datos e importa la estructura

```bash
mysql -u tu_usuario -p -e "CREATE DATABASE nombre_de_tu_base;"
mysql -u tu_usuario -p nombre_de_tu_base < inventario_inicial.sql
```

### 5. Genera el hash de la contraseña del usuario

El archivo `inventario_inicial.sql` incluye un usuario de ejemplo con el password en placeholder. Debes generar tu propio hash antes de usar el sistema:

```bash
php -r 'echo password_hash("tu_password", PASSWORD_DEFAULT);'
```

Copia el hash generado y actualiza en la base de datos:

```bash
mysql -u tu_usuario -p
```

```sql
USE nombre_de_tu_base;
UPDATE usuario SET password='HASH_GENERADO_AQUÍ' WHERE nombre_usuario='admin';
EXIT;
```

### 6. Configura Apache

Copia o enlaza el proyecto en tu directorio de Apache:

```bash
sudo cp -r . /var/www/html/inventario
sudo chown -R www-data:www-data /var/www/html/inventario
sudo systemctl restart apache2
```

### 7. Accede al sistema

```
http://localhost/inventario
```

---

## 📋 Funcionalidades

- Login y logout con sesión
- Listado de productos con stock y precio
- Crear, editar y eliminar productos
- Estructura de clientes y facturas (en desarrollo)

---

## 👤 Autor

**Marlon** — [@marlonjt](https://github.com/marlonjt)
