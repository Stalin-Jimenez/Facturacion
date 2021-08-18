<?php

// establecer la conexión
require_once '../config/conexion.php';
$usuario = $_POST['usuario_p'];
$clave = $_POST['clave_p'];

// COMO CONSULTAR EN UNA BASE DE DATOS DESDE PHP
$sql = "select * from factura where usuarios='$usuario' and clave='$clave';";
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


    