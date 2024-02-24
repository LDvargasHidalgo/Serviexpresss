

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/login.css">   
    <!-- Tipo de letra Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Serviexpress</title>
</head>
<body>

    <header>
        <div id="logo">
            <a href="index.php">
                <img src="../assets/images/logo.png" alt="Nombre de tu empresa">
            </a>
        </div>
    </header>


    <div id="background-container"></div>
    <main>

        <div class="container_all">
            <div class="back_box">
                <div class="back_box_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn_login">Iniciar Sesión</button>
                </div>
                <div class="back_box_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn_register">Regístrarse</button>
                </div>
            </div>

            <!--Form Login and registro-->
            <div class="container_login_register">
                <!--Login-->
                <form action="../php/login_user_be.php" method="POST" class="form_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="user">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="../php/register_user_be.php" method="POST" class="form_register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="all_name">
                    <input type="text" placeholder="Correo Electronico" name="email">
                    <input type="text" placeholder="Usuario" name="user">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Prestador Servicio</button>
                    <button>Usuario</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../assets/script/login-register.js"></script>
</body>
</html>