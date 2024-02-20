<?php
session_start(); // Iniciar la sesión al comienzo del script

// Verificar si el usuario está logueado (es decir, si la variable 'usuario' está seteada en $_SESSION)
if (isset($_SESSION['usuario'])) {
    // El usuario está logueado, mostrar contenido protegido
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include_once 'header.php'; ?>


    <body>

        <?php include_once 'nav.php'; ?>

        <h1>BIENVENIDO <?php echo $_SESSION['usuario']; ?></h1>
        <a href="../php/cerrar_sesion.php">Cerrar sesión</a>
       

        <?php include_once 'footer.php'; ?>
    </body>
    </html>
<?php
} else {
    // El usuario no está logueado, redirigir a la página de inicio de sesión o mostrar un mensaje de error
    header("Location: login.php"); // Asegúrate de que este archivo exista y sea el correcto para la redirección
    exit;
}
?>
