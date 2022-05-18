<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master GG</title>
    <link rel="stylesheet" href="stylesEstadisticas.css">
</head>
<body>

    <div class="container-nav">
        <div class="nav-main">
            <div class="logo-container">
                <img class="logo" src="resources/MasterGGLogoDark.png" alt="logo">
                <a href="index.html" class="dominio-logo">MasterGG.com</a>
            </div>
        </div>
    </div>
    <div class="titulo-pag">
        <h1 class="titulo-estadisticas">ESTADISTICAS</h1>
    </div>
    <div class="container__titulo-tabla">
        <h2 class="titulo-tabla">Ventas</h2>
    </div>

    <?php

        $conexion = mysqli_connect('localhost','root','','mastergg');
        $consulta = "call mostrarVentas";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            while ($row = $resultado->fetch_array()) {
                $num_orden = $row['num_orden'];
                $Usuario = $row['Nombre_Usuario'];
                $producto = $row['nombre'];
                $fecha_orden = $row['fecha_orden'];
                ?>
                <div class="container__main">
                    <div class="container-venta">
                        <h2 class="titulos-orden"><?php echo "Numero de Orden # " , $num_orden; ?></h2>
                        <p>
                            <b class="categoria-db">Nombre del Usuario:</b> <?php echo $Usuario; ?> <br>
                            <b class="categoria-db">Producto:</b> <?php echo $producto; ?> <br>
                            <b class="categoria-db">Fecha de Compra:</b> <?php echo $fecha_orden; ?> <br>
                        </p>
                    </div>
                </div>
                <?php 

            }
        }
    ?>

    <div class="container__titulo-tabla">
        <h2 class="titulo-tabla">Usuarios Registrados</h2>
    </div>
    <?php

    $conexion = mysqli_connect('localhost','root','','mastergg');
    $consulta = "SELECT * FROM `mostrarusuarios`;";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        while ($row = $resultado->fetch_array()) {
            $Usuario = $row['Nombre_Usuario'];
            $fecha_registro = $row['fecha_registro'];
            ?>
            <div class="container__main">
                <div class="container-venta">
                    <h2 class="titulos-orden"><?php echo "Usuario: " , $Usuario; ?></h2>
                    <p>
                        <b class="categoria-db">Fecha de Registro:</b> <?php echo $fecha_registro; ?> <br>
                    </p>
                </div>
            </div>
            <?php 

        }
    }
    ?>
    <div class="container__titulo-tabla">
        <h2 class="titulo-tabla">Productos</h2>
    </div>
    <?php

    $conexion = mysqli_connect('localhost','root','','mastergg');
    $consulta = "SELECT cantidadProductos();";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        while ($row = $resultado->fetch_array()) {
            $Cantidad = $row['cantidadProductos()'];
            ?>
            <div class="container__main">
                <div class="container-venta">
                    <h2 class="titulos-orden"><?php echo "Lotes de productos: "; ?></h2>
                    <p>
                        <b class="categoria-db">Productos:</b> <?php echo $Cantidad; ?> <br>
                    </p>
                </div>
            </div>
            <?php 

        }
    }
    ?>
</body>
</html>