<?php
////iniciar la sesión
//session_start();
//$idUsuario_Recibe = $_SESSION['idUsuario_S'];
//$idrol=$_SESSION['idRol_S'];
////echo "El id es:".$idUsuario_Recibe;
//require_once './config/conexion.php';
//$sql = "select * from loging where idUsuario=$idUsuario_Recibe";
//$resultado = mysqli_query($conexion, $sql);
//if ($resultado != null) {
//    if (mysqli_num_rows($resultado) > 0) {
//        $rw_usuario = mysqli_fetch_array($resultado);
//        $nombres = $rw_usuario['Usuario'];
//        $rol=$rw_usuario['Rol_Id'];
//    } else {
//        echo "No existe registro del usuario";
//        exit();
//    }
//} else {
////               echo "Ocurrió algo al momento de conectarse.".mysqli_error_list();
//}
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/custom.css" />
<nav class="navbar navbar-collapse" role="navigation" style="background: #000000; font-size: 14px;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php" style="color: white"><b>Inicio</b></a></li>
            <?php // if (!empty($usuario)) {
            ?>
                <li><a href="Tecnologia.php" style="color: white;"><b>Tecnologia</b></a></li>

                <li><a href="Cocina.php" style="color: white"><b>Cocina</b></a></li>

                <li><a href="Entrenimiento.php" style="color: white"><b>Entretenimiento</b></a></li>

                <li><a href="#" style="color: white"><b>Facturar</b></a></li>

            <?php
//            } else {
            ?>


                <li><a href="loging.php" style="color: white"><b>Iniciar Sesion</b></a></li>

                <li><a href="salir.php" style="color: white"><b>Cerrar sesion</b></a></li>
            <?php
//            }
            ?>


        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if (!empty($usuario)) {
            ?>
                <li><a href="salir.php" style="color: white" class="glyphicon glyphicon-log-out"><b> Salir</b></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>