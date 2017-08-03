<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM tiene_metodo T,envio E WHERE T.codigo_envio=E.codigo_envio AND T.codigo_producto=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));



echo "<select name='EnvioSeleccionado' id='EnvioSeleccionado'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['nombre']."'>" . utf8_encode($re['nombre']) . "</option>";
}
echo "</select>";
?>