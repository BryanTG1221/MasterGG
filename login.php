<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master GG</title>
    <link rel="shortcut icon" href="resources/MasterGGLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="loginstyles.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container__main">
        <div class="container__formulario">
            <div class="container-logo">
                <img class="logo" src="resources/MasterGGLogo.png" alt="logo">
                <h1 class="TituloFormulario">MASTER GG</h1> 
            </div>
            <div class="container-form">
                <form class="form-register" action="loginValidacion.php?varId=$idProducto" method="POST">
                    <label for="input-name">Nombre de usuario</label>
                    <input type="text" id="input-name" name="usuario">
                    <label for="input-pass">Password</label>
                    <input type="password" id="input-password" name="passwd">
                    <button class="button-login">INICIAR SESION</button>
                    <button class="button-register"><a class="button-link" href="register.html">REGISTRARME</a></button>
                </form>
            </div>
        </div>
    </div>
    <?php

        $idProductoGbl;
        $idProductoGbl = $_GET['producto'];

        session_start();
        ob_start();

        $_SESSION['IdProductoLog'] = $idProductoGbl;

    ?> 
</body>
</html>