<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cantidadEnPeoso= floatval(value:$_POST["cantidad"]);

$valorDolar=40;
$cantidadEnPeoso;
$cantidadtotaldolares=$cantidadEnPeoso/$valorDolar;
echo"resultado de la convercion";
echo"$cantidadEnPeoso pesos uruguayos equivalen a " . $cantidadtotaldolares . " dolares";
}else{ 
    echo "error en la solicitud.";
}
?>