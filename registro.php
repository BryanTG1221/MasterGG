<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master GG</title>
    <link rel="shortcut icon" href="resources/MasterGGLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesRegisterComplete.css">
</head>
<body>
    <div class="contaienr__main">
        <div class="logo-container">
            <img class="logo" src="resources/MasterGGLogoYellow.png" alt="">
            <p class="mastergg-p">Master GG</p>
        </div>
        <div class="info-registro">
            <h1>!BIENVENIDO!</h1>
            <p class="p-bienvenida">Con tu registro ahora podras comprar, nuestros productos y obtener recompensas exclusivas.</p>
        </div>
        <div class="container-button">
            <button class="button-home">
                <a href="index.html">ENTRAR A LA TIENDA!</a>
            </button>
        </div>
    </div>
    <?php
    $conexion = mysqli_connect('localhost','root','','mastergg');


    insertar($conexion);

    function insertar ($conexion) {

        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $localtime = date("Y/m/d");

        $consulta = "INSERT INTO usuarios(Nombre_Usuario, Email, Password) VALUES ('$usuario','$email','$passwd')";
        mysqli_query($conexion,$consulta);
        $consulta = "INSERT INTO registros(id_Usuario, Fecha_Registro) VALUES ('','$localtime.value')";
        mysqli_query($conexion,$consulta);
        mysqli_close($conexion);
    }

    ?>
</body>
</html>
