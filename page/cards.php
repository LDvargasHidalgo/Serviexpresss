<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <style>
        /* Estilos para las tarjetas */
        .cards-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-right: 20px; /* Ajusta el margen derecho según tus preferencias */
        }
        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .card p {
            margin: 0;
            padding: 10px;
        }
        .ver-mas-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            display: block;
            width: 100%;
        }
        .ver-mas-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Servicios</h2>
    <!-- Cards start -->
    <div class="cards-container">
        <?php
        // Consulta los servicios desde la base de datos
        include_once '../php/conexion_be.php';
        $query = "SELECT s.name AS service_name, c.name AS category_name, s.image 
                  FROM service s
                  INNER JOIN category c ON s.category_id = c.id";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $service_name = $row['service_name'];
                $category_name = $row['category_name'];
                $image = $row['image'];
        ?>
        <div class="card">
            <img src="<?php echo $image; ?>" alt="<?php echo $service_name; ?>" />
            <h3><?php echo $service_name; ?></h3>
            <p><?php echo $category_name; ?></p> <!-- Nombre de la categoría -->
            <a href="ver_mas.php?category=<?php echo $category_name; ?>" class="ver-mas-btn">Ver más</a>
        </div>
        <?php
            }
        } else {
            echo "No se encontraron servicios.";
        }
        mysqli_close($conexion);
        ?>
    </div>
    <!-- Cards end -->
</body>
</html>
