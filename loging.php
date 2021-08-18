<?php
session_start();
if (isset($_SESSION['User_id'])) {
    header("Location: index.php");
}

require './config/conexion.php';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, correo, clave, usuarios FROM users WHERE correo =:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['clave'])) {
        $_SESSION['User_id'] = $results = ['id'];
        header('location: index.php');
    } else {
        $message = 'Tus credenciales son incorrectas';
    }
}
?>
<html>

<head>
    <title>Inicio de Sesion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>

<body background=" imgenes/img222.png">

    <div class="container ">
        <div class="login-form  " class="fadeInDown" style="background: #ffffff">
            <div class="form-header " class="fadeIn first">
                <img src="imgenes/logopagina.png" class="img-responsive">
            </div>

            <form class="form-signin" class="fadeIn second" action="loging.php" method="POST">
                <input class="form-control" type="text" name="email" placeholder="Ingresar su correo">
                <input class="form-control" type="password" name="password" placeholder="Ingrese su contraseña">
                <!--                     <button id="ingresarBtn" name="Ingresar" class="btn btn-primary" onclick="login22();">Ingresar</button>
                                         <br>
                                         <br>-->
                <input type="submit" value="Iniciar Sesion">
                <?php if (!empty($message)) : ?>
                    <p> <?= $message ?></p>
                <?php endif; ?>

            </form>

            <div> <a class="glyphicon glyphicon-user" href="registro.php">Registrarse</a></div>

            <!-- <div id="mensaje"></div> -->
        </div>
    </div>
</body>

</html>