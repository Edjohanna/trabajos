<?php
$cupo=8000000;
$int=0.01;

$compra=$_GET["comprar"];

if($compra > $cupo){
    echo "no se puede realizar la compra porque el monto es invalido";
    return;
}
$cupo - $compra;

$comprain= $compra * $int;

$saldo= $compra + $int;


?>
