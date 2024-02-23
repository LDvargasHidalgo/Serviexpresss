<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, input, select {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="file"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php include_once 'nav.php'; ?> 
    <h2>Agregar Servicio</h2>
    <form action="procesar_servicio.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre del Servicio:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria" required>
            <option value="1">Belleza</option>
            <option value="2">Tecnología</option>
            <option value="3">Mascotas</option>
            <option value="4">Hogar</option>
        </select>

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen">

        <label for="activo">Activo:</label>
        <input type="checkbox" id="activo" name="activo" value="1" checked>

        <input type="submit" value="Agregar Servicio">
    </form>
    <?php include_once 'footer.php'; ?>
</body>
</html>