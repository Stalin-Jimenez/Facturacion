<?php
require '../config/db.php';
require '../config/conexion.php';
session_start();
$IdUsuarioSesion=$_SESSION['idUsuario_S'];
$mensaje=$_POST['mensaje'];
if($mensaje!='eliminar'){
    $idUsuario=$_POST['IdUsuario'];
    $NombresApellidos=$_POST['Nombres_txt'];
    $Usuario=$_POST['Usuario_txt'];
    $Clave=$_POST['Clave_txt'];
    $RepetirClave=$_POST['Repetir_txt'];
    $estado=$_POST['estado_txt'];

    if($idUsuario==0){
        $sql="insert into usuario(Nombre,Usuario,clave,estado) values('$NombresApellidos','$Usuario','$Clave','$estado');";
    }else{
        $sql="update usuario set Nombre='$NombresApellidos',Usuario='$Usuario',clave='$Clave',estado='$estado' where idusuario=$idUsuario;";
    }
}else{
    $idUsuario=$_POST['id'];
    $sql="delete from usuario where idusuario=$idUsuario;";
}
$result=mysqli_query($conexion,$sql);

if($result){
    if($mensaje!='eliminar'){
        echo "Registro Guardado Correctamente";
    }else{
        echo "Registro Eliminado Correctamente";
    }
}else{
    echo "Ocurrió un problema al momento de guardar. Favor intentar de nuevo". mysqli_error();
}