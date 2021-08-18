<?php

//conexion a la base de datos
require '../config/conexion.php';
$usuario = $_POST ['usuario_p'];
$clave = $_POST ['clave_p'];

//integracion a la base de datos
$sql = "select * from factura where usuarios='$usuario' and Contraseña ='$clave';";
//ejecutar sql 
$sql_ejc = mysqli_query($conexion, $sql);
if ($sql_ejc) {
    //login existe o no
    $numFilas = mysqli_num_rows($sql_ejc);
    $ban = 0;
    if ($numFilas == 1) {
        $ban = 1;
        echo $ban;
    } else {

        echo $ban;
    }
} else {
    $ban = 3;
    echo ('ERROR') . mysqli_error();
}

