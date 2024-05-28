<?php
require "../config/conexion.php";
$celular = $_POST["celulardeldestino"];
$valor = $_POST["valor"];
$pin = $_POST["pin"];


$sql = "INSERT INTO `transferencia`(celular_destino, valor, fecha_sys) VALUES ('".$celular."', ".$valor." , now() )";


if($conexion->query($sql))
{
    echo "transferencia exitosa";
}else{
    echo"error transfiriendo saldo";
}




?>