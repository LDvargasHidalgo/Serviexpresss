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
    $activo = isset($_POST['activo']) ? 1 : 0;

    // Procesar la imagen
    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];
    $ruta = "../assets/images" . $imagen;
    move_uploaded_file($imagen_tmp, $ruta);

    // Insertar el servicio en la base de datos
    $sql = "INSERT INTO service (user_id, name, category_id, image, active) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("isssb", $user_id, $nombre, $categoria, $ruta, $activo);

    if ($stmt->execute()) {
        echo "<script>
                alert('El servicio se ha agregado correctamente.');
                window.location.href = 'bienvenido.php';
              </script>";
        exit();
    } else {
        echo "Error al agregar el servicio: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
