<?php
$can=$_GET['cantidad'];
$valor=$_GET['valor'];
$edad=$_GET['edad'];

$neto=$can * $valor;

if($edad>60){
    $des_edad = $neto * 0.15;
    $neto =$des_edad;


}

if($can > 10){
    $des_can = $neto * 0.10;
    $neto =$des_can;


    echo "el precio final  $neto";
}
?>