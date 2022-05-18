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
            <h1>!ERROR DE AUTENTICACION!</h1>
            <p class="p-bienvenida">Porfavor vuelve a intentar con un usuario o contraseña correcta.</p>
        </div>
        <div class="container-button">
            <button class="button-home">
                <a href="index.html">Volver a intentar!</a>
            </button>
        </div>
    </div>

    <?php

    $conexion = mysqli_connect('localhost','root','','mastergg');

    session_start();
    ob_start();
    $IdProducto = $_SESSION['IdProductoLog'];
    echo $IdProducto;


    function IniciarSesion ($conexion,$IdProducto) {
    
        global $usuarioLog;
        $usuarioLog = $_POST['usuario'];
        global $passwd;
        $passwd = $_POST['passwd'];
        
        
        $consulta = "SELECT * FROM `usuarios` WHERE Nombre_Usuario = '$usuarioLog' AND Password = '$passwd'";
        $resultado = mysqli_query($conexion,$consulta);
        
        $filas = mysqli_num_rows($resultado);
        
        if($filas){
            if($IdProducto == 0 && $usuarioLog == 'Amser') {
                header("location: estadisticas.php");
            }
            else if($IdProducto == 1) {
                header("location: compraexitosaPC01.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 2) {
                header("location: compraExitosaPC02.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 3){
                header("location: compraExitosaPC03.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 4) {
                header("location: compraExitosaKey01.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 5) {
                header("location: compraExitosaKey02.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 6) {
                header("location: compraExitosaKey03.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 7) {
                header("location: compraExitosaMouse01.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 8) {
                header("location: compraExitosaMouse02.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 9) {
                header("location: compraExitosaMouse03.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 10) {
                header("location: compraExitosaHeadset01.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 11) {
                header("location: compraExitosaHeadset02.php?varName=$usuarioLog");
            }
            else if ($IdProducto == 12){
                header("location: compraExitosaHeadset03.php?varName=$usuarioLog");
            }
        }
        mysqli_close($conexion);
    } 

    IniciarSesion($conexion,$IdProducto);


?>
</body>
</html>