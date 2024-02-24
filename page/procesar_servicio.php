<?php
include '../php/conexion_be.php';

session_start();

// Verificar si el usuario está autenticado antes de procesar el formulario
if (!isset($_SESSION['user_id'])) {
    // Redirigir al usuario a la página de inicio de sesión si no está autenticado
    header("Location: login.php");
    exit();
}

// Usar el user_id del usuario autenticado para agregar el servicio
$user_id = $_SESSION['user_id'];

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $description = $_POST['description'];
    $activo = isset($_POST['activo']) ? 1 : 0;

    // Procesar la imagen
    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];
    $ruta = "../assets/images/" . $imagen; // Corregido: Añadido '/' después de 'images'
    move_uploaded_file($imagen_tmp, $ruta);

    // Insertar el servicio en la base de datos
    $sql = "INSERT INTO service (user_id, name, category_id, description, image, active) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    if ($stmt === false) {
        echo "Error al preparar la consulta: " . $conexion->error;
        exit();
    }

    $result = $stmt->bind_param("issssi", $user_id, $nombre, $categoria, $description, $ruta, $activo); // Corregido: 'issssi' refleja 1 int y 5 strings
    if ($result === false) {
        echo "Error al vincular parámetros: " . $stmt->error;
        exit();
    }

    if ($stmt->execute()) {
        echo "<script>
                alert('El servicio se ha agregado correctamente.');
                window.location.href = 'bienvenido.php';
              </script>";
        exit();
    } else {
        echo "Error al agregar el servicio: " . $stmt->error; // Cambiado para usar $stmt->error
    }

    $stmt->close();
    $conexion->close();
}
?>

