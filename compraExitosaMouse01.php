<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master GG</title>
    <link rel="shortcut icon" href="resources/MasterGGLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesComprasExitosas.css">
</head>
<body>
    <div class="contaienr__main">
        <div class="logo-container">
            <img class="logo" src="resources/MasterGGLogoYellow.png" alt="">
            <p class="mastergg-p">Master GG</p>
        </div>
        <div class="info-registro">
            <h1>!Compra Exitosa!</h1>
            <p class="product-name">RAZER Viper Mini Black</p>
            <img id="pc-csgo" src="resources/Mouse/blackshow.png" alt="PC">
            <p class="p-bienvenida">En las siguientes 24 horas te llegara un correo para otorgarte el numero de orden.</p>
        </div>
        <div class="container-button">
            <button class="button-home">
                <a href="index.html">Comprar Mas!</a>
            </button>
        </div>
    </div>
    <?php
    $conexion = mysqli_connect('localhost','root','','mastergg');

    $usuario = $_GET['varName'];
    $localtime = date("Y/m/d");

    function GenerarOrden ($conexion,$usuario,$localtime) {
    
        
        $consulta = "SELECT id_Usuario FROM `usuarios` WHERE Nombre_Usuario = '$usuario'";
        $resultado = mysqli_query($conexion,$consulta);
        $valorQuery = mysqli_fetch_array($resultado);
        $consultaInsertar = "INSERT INTO ventas(num_orden, fecha_orden, id_Usuario, id_Producto) VALUES ('','$localtime','$valorQuery[0]','7')";
        $resultado = mysqli_query($conexion,$consultaInsertar); 
        echo $valorQuery[0];
        
        mysqli_close($conexion);
    } 
    
    GenerarOrden($conexion,$usuario,$localtime);
    

    ?>
</body>
</html>