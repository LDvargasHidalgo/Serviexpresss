<?php
include 'conexion_be.php'; // Asegúrate de incluir el archivo de conexión

$serviceCRUD = new ServiceCRUD($conn);

// Ejemplo de creación de un nuevo servicio
//$serviceCRUD->createService(1, 'Nombre del Servicio', 2, 'imagen.jpg', true);

// Ejemplo de lectura de todos los servicios
$result = $serviceCRUD->readServices();

while ($row = $result->fetch_assoc()) {
    // Procesar cada fila como desees
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
}

// Ejemplo de actualización de un servicio
//$serviceCRUD->updateService(1, 1, 'Nuevo Nombre', 3, 'nueva_imagen.jpg', false);

// Ejemplo de eliminación de un servicio
//$serviceCRUD->deleteService(1);

$conn->close(); // Cerrar la conexión al finalizar
?>