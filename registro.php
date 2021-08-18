<?php
require './config/conexion.php';
$message = '';
if (!empty($_POST['email']) && !empty($_POST['password']) && !empty(['usuario'])) {
    $sql = "INSERT INTO users (correo, clave, usuarios) VALUES (:email, :password,:usuario)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    if ($stmt->execute()) {
        $message = 'Usuario creado correctamente';
    } else {
        $message = 'Lo sentimos, ha ocurrido un error creando su contraseña';
    }
}else{
    $message = 'Campos de Texto Vacios';
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/Estilo.css">
</head>

<body>

    <h1>Registrate</h1>
    <span>o <a href="loging.php">Inicia Session</a></span>
    <form action="registro.php" method="post">
        <input type="text" name="usuario" placeholder="Ingrese su nombre">
        <input type="email" name="email" placeholder="Ingrese su correo">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="Registrarse">
        <?php if (!empty($message)) : ?>
            <p style="text-align: center;"><?= $message ?></p>
        <?php endif ?>
    </form>

</body>

</html>