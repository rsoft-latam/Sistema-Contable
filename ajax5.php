<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM p_tiene T,pago P WHERE T.codigo_pago=P.codigo_pago AND T.codigo_producto=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));



echo "<select name='PagoSeleccionado' id='PagoSeleccionado'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['nombre']."'>" . utf8_encode($re['nombre']) . "</option>";
}
echo "</select>";
?>