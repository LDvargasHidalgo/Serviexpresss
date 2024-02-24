<!DOCTYPE html>
<html lang="en">
<?php 
include_once 'header.php';
session_start(); // Iniciar sesión al comienzo del script

// Verificar si el usuario está logueado
if (isset($_SESSION['usuario'])) {
    // El usuario está logueado, mostrar el contenido protegido
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
    <style>
        .form-title {
            text-align: center;
            margin-top: 20px;
        }
        .service-form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label, .form-input, .form-select {
            display: block;
            margin-bottom: 10px;
        }
        .form-input, .form-file-input, .form-select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-checkbox {
            margin-top: 5px;
        }
        .form-submit {
            background-color: #ea7941;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-submit:hover {
            background-color: #fff;
            color: #ea7941;
        }
    </style>
</head>
<body>
    <?php include_once 'nav.php';?>
    <h1>BIENVENIDO <?php echo $_SESSION['usuario']; ?></h1>
    <h2 class="form-title">Agregar Servicio</h2>
    <form action="procesar_servicio.php" method="POST" enctype="multipart/form-data" class="service-form">
        <label for="nombre" class="form-label">Nombre del Servicio:</label>
        <input type="text" id="nombre" name="nombre" required class="form-input">

        <label for="categoria" class="form-label">Categoría:</label>
        <select id="categoria" name="categoria" required class="form-select">
            <option value="1">Belleza</option>
            <option value="2">Tecnología</option>
            <option value="3">Mascotas</option>
            <option value="4">Hogar</option>
        </select>

        <label for="description" class="form-label">Descripción:</label>
        <input type="text" id="description" name="description" required class="form-input">

        <label for="imagen" class="form-label">Imagen:</label>
        <input type="file" id="imagen" name="imagen" class="form-file-input">
        
        <input type="submit" value="Agregar Servicio" class="form-submit">
    </form>
    <a href="../php/cerrar_sesion.php">Cerrar sesión</a>
    <?php include_once 'footer.php';?>
</body>
</html>
<?php
} else {
    // El usuario no está logueado, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit;
}
?>
