<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM almacen WHERE codigo_sucursal=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));


echo "<select name='CodigoSeccion' id='NumeroAlmacen'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['numero_almacen']."'>" . utf8_encode($re['nombre']) . "</option>";
}
echo "</select>";
?>