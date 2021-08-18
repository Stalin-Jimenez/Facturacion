<?php
require_once '../config/db.php'; //Contiene las variables de configuracion para conectar a la base de datos
require_once '../config/conexion.php'; //Contiene funcion que conecta a la base de datos
// tema de seguridad informática
session_start();
$IdUsuario = $_SESSION['idUsuario_S'];
$fechaHora = date('Y-m-d H:m:s');
//insert tabla de auditoria id fecha nombrePágina, consulto, modifico, elimino

$sql = "SELECT * FROM usuario;";
$result = mysqli_query($conexion, $sql)
?>
<table id="tablaListar" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
<!--         <th>N°</th>-->
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha1</th>
            <th>Fecha2</th>
            <th>Fecha3</th>
            <th>Fecha4</th>
            <th>Fecha5</th>        
            <th>Estado</th>
<!--            <th>Rol</th>-->
        </tr>
    </thead>

    <tfoot>
        <tr>
<!--         <th>N°</th>-->
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha1</th>
            <th>Fecha2</th>
            <th>Fecha3</th>
            <th>Fecha4</th>
            <th>Fecha5</th>        
            <th>Estado</th>
<!--            <th>Rol</th>-->


        </tr>
    </tfoot>
    <tbody>
        <?php
        if ($result != null) {
            if (mysqli_num_rows($result) > 0) {
                foreach ($result as $usuario) {
                    $estado = "INACTIVO";
                    $class = "warning";
                    if ($usuario['Estado'] == 'A') {
                        $estado = "ACTIVO";
                        $class = "success";
                    }
                    ?>
                    <?php
                    $idrol = $loging['Rol_Id'];
                    $sql = "select * from rol where idroles = $idrol";
                    $result1 = mysqli_query($conexion, $sql);
                    $array = mysqli_fetch_array($result1);
                    $Nombre_rol = $array['Rol'];
                    ?>

                    <tr>
            <!--        <td><?php echo $usuario['idusuario'] ?><td>-->
                        <td><?php echo $usuario['Nombre'] ?></td>
                        <td><?php echo $usuario['Apellido'] ?></td>
                        <td><?php echo $usuario['Fecha1'] ?></td>
                        <td><?php echo $usuario['Fecha2'] ?></td>
                        <td><?php echo $usuario['Fecha3'] ?></td>
                        <td><?php echo $usuario['Fecha4'] ?></td>
                        <td><?php echo $usuario['Fecha5'] ?></td>                       
                        <td><span class="label label-<?php echo $class; ?>"><?php echo $estado ?></span></td>


                    </tr>


                    <?php
                }
            }
        }
        ?>
    </tbody>
</table>
