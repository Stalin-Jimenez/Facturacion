<?php
session_start();
require './config/conexion.php';
if (!isset($_SESSION['User_id'])) {
    $records = $conn->prepare('SELECT id, correo, clave, usuarios FROM users  WHERE id = :id');
    $records->bindParam(':id', $_SESSION['User_id']);
    $records->execute();
    $results = $records->fetch((PDO::FETCH_ASSOC));
    $user = null;
    if (count($results) > 0) {
        $user = $results;
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/adicionales.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <title>Compra Mix</title>
</head>

<head>
    <?php
    require './head.php';
    ?>
</head>

<body>
    <table>
        <th>

            <div>
                <!--          Producto de tecnologia-->
                <div class="producto">
                    <img src="imgenes/ltp.jfif">
                    <p style="color:black;text-align: center;margin-top: 5px">
                        <b> Laptop msi gt75 titan </b>
                    </p>
                    <p style="color:black;text-align: center;margin-top: 5px">
                        <em> Series GT75 Titan 4K-071<br>
                            Usos específicos del producto Personal, gaming, business. Marca MSI<br>
                            Tamaño de la Pantalla 17.3 pulgadas lcd<br>
                            Sistema operativo Windows 10 Pro
                        </em>
                    </p>
                    <form>
                        <button id="comprar" name="comprar" class="btn btn-primary" style="margin-left: 200px"><a href="Productos/Descripcion.php" style="text-decoration: none; color: #ffffff">Detalles</a></button>
                    </form>
                </div>
            </div>
        </th>



        <th>
            <div>
                <!--          Producto de Cocina-->
                <div class="producto1" align="center">
                    <img src="imgenes/Recurso 1.png" Align="Center">
                    <p style="color:black;text-align: center;margin-top: 5px">
                        <b> Indurama - Encimera a Inducción EI4PVE534 Platos </b>
                    </p>

                    <p style="color:black;text-align: center;margin-top: 2px">

                        <em> Modelo: EI4-PVE53<br>
                            9 niveles de potencia + Booster.<br>
                            Vidrio vitrocerámico de fácil limpieza y alta resistencia<br>
                            Eficiencia que se acomoda a tu necesidad
                        </em>
                    </p>
                    <form>
                        <button id="comprar" name="comprar" class="btn btn-primary" onclick="" style="margin-left: 200px"><a href="Productos/Descripcion1.php" style="text-decoration: none; color: #ffffff">Detalles</a></button>
                    </form>
                </div>
            </div>
        </th>



        <th>
            <div>
                <!--          Producto de Cocina-->
                <div class="producto2" align="center">
                    <img src="imgenes/Recurso 2.png">
                    <p style="color:black;text-align: center;margin-top: 5px">
                        <b> Sony Consola PS5</b>
                    </p>
                    <p style="color:black;text-align: center;margin-top: 5px">

                        <em>Experimenta cargas ultra rápidas gracias a una unidad de estado sólido (SSD) de alta velocidad, una inmersión más profunda con retroalimentación háptica, gatillos adaptivos y el nuevo audio 3D.
                        </em>

                    </p>
                    <form>
                        <button id="comprar" name="comprar" class="btn btn-primary" onclick="" style="margin-left: 200px"><a href="Productos/Descripcion2.php" style="text-decoration: none; color: #ffffff">Detalles</a></button>
                    </form>
                </div>
            </div>
        </th>
    </table>
</body>

<footer>

    <?php
    require './footer.php';
    ?>

</footer>

</html>