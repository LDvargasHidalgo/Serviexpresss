<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="../assets/CSS/main.css">
</head>
<body>
   
    <!-- Cards start -->
    <div class="cards-container">
        <?php
        // Asegúrate de tener el archivo de conexión a la base de datos
        include_once '../php/conexion_be.php';
        $query = "SELECT s.name AS service_name, c.name AS category_name, s.image , s.description AS description
                  FROM service s
                  INNER JOIN category c ON s.category_id = c.id";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $service_name = $row['service_name'];
                $category_name = $row['category_name'];
                $description = $row['description'];
                
                $image = $row['image'];
        ?>
        <div class="card">
            <img src="<?php echo $image; ?>" alt="<?php echo $service_name; ?>" />
            <h3><?php echo $category_name; ?></h3>
            
            <p class="card-description"><?php echo $service_name; ?></p>            
            <p class="card-description"><?php echo $description; ?></p>
            <a href="ver_mas.php?category=<?php echo urlencode($service_name); ?>" class="ver-mas-btn">Ver más</a>
        </div>
        <?php
            }
        } else {
            echo "No se encontraron servicios.";
        }
        // Cierra la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </div>
    <!-- Cards end -->
</body>
</html>
