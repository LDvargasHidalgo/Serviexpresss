

<!-- Archivo para almacenar los datos en la DB -->
<?php  
include('conexion_be.php');

/* Almacenar los input en variables */
$all_name = $_POST['all_name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];

/* Encriptar la contraseña */
$password = hash('sha512', $password);

/* Query para que los datos que entren en estas variables la guarde en nuestra tabla los datos deben estar tal cual como los escribimos en la tabla*/
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
                      VALUES('$all_name','$email','$user','$password')";  

/* Verificar que el correo no se repita en la DB */
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$email' ");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");  
            window.location = "../page/login.php";          
        </script>
        ';
    /* Con exit() nos aseguramos que termine el script  y no se guarde el correo si esta repetido */
    exit();
}

/* Verificar que el usuario no se repita en la DB */
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user' ");
if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente");  
            window.location = "../page/login.php";          
        </script>
        ';   
    exit();
}


/* Ejecutar la query */
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    /* Si se ejecuta correctamente nos manda a la pagina de login */
    echo '
    <script>
            alert("Usuario almacenado exitosamente");  
            window.location = "../page/login.php";          
        </script>
        ';
} else {
    /* Si no se ejecuta correctamente nos manda a la pagina de registro */
    echo '
    <script>
            alert("Intentalo de nuevo, usuario no almacenado");  
            window.location = "../page/login.php";          
        </script>
        ';
}

mysqli_close($conexion);



?>

