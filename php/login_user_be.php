<?php

session_start();
include 'conexion_be.php';

$user = $_POST['user'];
$password = $_POST['password'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user' and contrasena='$password' ");

if(mysqli_num_rows($validar_login) > 0){
    // Si el usuario existe en la DB
    $_SESSION['usuario'] = $user;
    header("location: ../page/bienvenido.php");
    exit;
} else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");  
            window.location = "../page/login.php";          
        </script>
    ';
    exit;
}

?>