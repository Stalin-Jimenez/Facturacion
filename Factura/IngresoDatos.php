<?php
require '../config/conexion.php';
$message = '';
if (!empty($_POST['ntarjeta']) && !empty($_POST['nombres']) && !empty(['apellidos']) && !empty(['direccion']) && !empty(['fcaducidad']) && !empty(['acaducidad']) && !empty(['cseguridad'])) {
    $sql = "INSERT INTO tarjeta (Ntarjeta, Nombres, Apellidos, Direccion, Fcaducidad, Acaducida, Cseguridad) VALUES (:ntarjeta, :nombres, :apellidos, :direccion, :fcaducidad, :acaducidad, :cseguridad)";
    $stmt = $conn->prepare($sql);
    $Ntarjeta = password_hash($_POST['ntarjeta'], PASSWORD_BCRYPT);
    $Cseguridad = password_hash($_POST['cseguridad'], PASSWORD_BCRYPT);
    $stmt->bindParam(':ntarjeta', $Ntarjeta);
    $stmt->bindParam(':nombres', $_POST['nombres']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':fcaducidad', $_POST['fcaducidad']);
    $stmt->bindParam(':acaducidad', $_POST['acaducidad']);
    $stmt->bindParam(':cseguridad', $Cseguridad);
    if ($stmt->execute()) {
        ?>
        <script >
            alert('Transaccion Exitosa');
        </script>
        <?php
        ?>
        <script >
            alert('Precio del Producto: $1,100\n\
Iva: 12%\n\
Toatal de la Transaccion: $1,232');
            window.location = "../index.php";
        </script>
        <?php
    } else {
        ?>
        <script >
            alert('Ups Hubo un Error En la Transaccion');
        </script>
        <?php
    }
} else {
    ?>
    <script >
        alert('Los Campos estan vacios');
    </script>
    <?php
}
?>
<html>
    <head>
        <title>Compra Mix</title>
        <meta charset="UTF-8">
        <link href="../css/adicionales.css" rel="stylesheet">
        <link href="../css/Estilo.css" rel="stylesheet">
        <link href="login.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/custom.css" />
    </head>

    <head>
        <?php
        require '../head.php';
        ?>
    </head>
    <body>
        <form  method="POST">
            <div class="container">
                <div class="login-form" >
                    <div class="form-header">
                        <img class="img-responsive" src="../imgenes/tarjeta-de-debito.png" style="width: 112px;">
                        <div style="font-size: 24px; margin-top: -65; text-decoration:none; font-family: cursive; color: #00b8cb"><a>Ingrese los Datos su Tarjeta</a></div>
                    </div>
                    <div class="form-signin">
                        <input type="number" name="ntarjeta" placeholder="Numero de Tarjeta">
                        <input type="text" name="nombres" placeholder="Nombres">
                        <input type="text" name="apellidos" placeholder="Apellidos">
                        <input type="text" name="direccion" placeholder="Direccion">
                        <div style="margin-right: 225"><input type="number" name="fcaducidad" placeholder="Fecha de Caducidad Mes"></div>
                        <div style="margin-top: -82; margin-left:225"><input type="number" name="acaducidad" placeholder="Año de Caducidad"></div>
                        <input type="number" name="cseguridad" placeholder="Codigo de Seguridad (CVV)">
                    </div>
                    <div class="form-footer">
                        <input type="submit" value="Registrarse">
                    </div>
                </div>
            </div>
        </form>
    </body>
    <footer>

        <?php
        require '../footer.php';
        ?>

    </footer>
</html>
